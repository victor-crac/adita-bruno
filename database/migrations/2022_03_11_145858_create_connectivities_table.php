<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connectivities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_payment_option_id');
            $table->unsignedBigInteger('request_type_id')->nullable();
            $table->text('api_url')->comment("Full end point to the URL");
            $table->string('http_method')->nullable()->default("GET");
            $table->string('corresponding_file')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('country_payment_option_id')
                ->references('id')
                ->on('country_payment_option')
                ->onDelete('cascade');
            $table->foreign('request_type_id')
                ->references('id')
                ->on('request_types')
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
        Schema::dropIfExists('connectivities');
    }
}
