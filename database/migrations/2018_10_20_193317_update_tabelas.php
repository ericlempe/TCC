<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTabelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('administradores', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('profissionais', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('locais', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('leitores', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('tags', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
