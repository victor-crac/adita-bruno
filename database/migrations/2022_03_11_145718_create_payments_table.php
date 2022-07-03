<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contribution_id')->nullable();
            $table->foreignId('currency_id');
            $table->foreignId('payment_status_id');
            $table->foreignId('country_payment_option_id');
            $table->string("transaction_id");
            $table->decimal('amount', 20,2);
            $table->string("sender_number");
            $table->string("receiver_number");
            $table->string("vendor_reference")->nullable();
            $table->text("vendor_message")->nullable();  
            $table->text("reason")->nullable();           
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('contribution_id')
            ->references('id')
            ->on('contributions')
            ->onDelete('cascade');
            $table->foreign('payment_status_id')
            ->references('id')
            ->on('payment_statuses')
            ->onDelete('cascade');
            $table->foreign('country_payment_option_id')
            ->references('id')
            ->on('country_payment_option')
            ->onDelete('cascade');
            $table->foreign('currency_id')
            ->references('id')
            ->on('currencies')
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
        Schema::dropIfExists('payments');
    }
}
