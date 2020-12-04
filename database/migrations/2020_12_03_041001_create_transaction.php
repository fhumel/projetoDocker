<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction', function (Blueprint $table) {
            $table->id();
            $table->decimal('value',9,3);
            $table->timestamps();

            $table->foreign('payer')
//                ->constrained('users')
                ->onDelete('cascade')
                ->references('id')->on('users');

            $table->foreign('payee')
//                ->constrained('users')
                ->onDelete('cascade')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
