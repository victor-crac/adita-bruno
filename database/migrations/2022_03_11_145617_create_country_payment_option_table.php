<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryPaymentOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_payment_option', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('payment_option_id');
            $table->text('api_key')->nullable();
            $table->text('api_secret')->nullable();
            $table->string('api_username')->nullable();
            $table->text('api_url')->nullable()->comment('API domain name');
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable()->comment('physical address of the paymet provider');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('country_id')
            ->references('id')
            ->on('countries')
            ->onDelete('cascade');
            $table->foreign('payment_option_id')
            ->references('id')
            ->on('payment_options')
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
        Schema::dropIfExists('country_payment_option');
    }
}
