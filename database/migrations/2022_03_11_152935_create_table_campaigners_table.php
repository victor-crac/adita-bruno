<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCampaignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("country_id")->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('logo', 2048)->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('legal_document', 2048)->nullable();
            $table->longText("description")->nullable();
            $table->string('physical_address')->nullable();
            $table->boolean("is_individual")->nullable(); 
            $table->string('website')->nullable();
            $table->boolean("active")->default(false); 
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigners');
    }
}
