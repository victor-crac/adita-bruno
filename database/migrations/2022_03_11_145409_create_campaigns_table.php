<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('currency_id')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('banner', 2048)->nullable();
            $table->decimal('min_amount', 15,2)->nullable();
            $table->decimal('target_amount', 20,2)->nullable();
            $table->longText("description");
            $table->boolean('is_open')->default(false);
            $table->boolean('allow_installment_payments')->default(false);
            $table->boolean("active")->default(true); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
