<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWallet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carteira', function (Blueprint $table) {
            $table->id();
            $table->decimal('dinheiro',9,3);
            $table->timestamps();
            $table->foreign('usuarioUd')
//                ->constrained('users')
                ->onDelete('cascade')
                ->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carteira');
    }
}
