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
        Schema::table('transacoes', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor',9,3);
            $table->timestamps();

            $table->foreign('pagador')
//                ->constrained('users')
                ->onDelete('cascade')
                ->references('id')->on('users');

            $table->foreign('beneficiario')
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
