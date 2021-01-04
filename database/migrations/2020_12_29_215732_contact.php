<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('facebook_link',250);
            $table->string('facebook_name',70);
            $table->string('instagram_link',250);
            $table->string('instagram_name', 70);
            $table->string('main_phone', 15);
            $table->string('secundary_phone', 15);
            $table->string('main_address', 200);
            $table->string('secundary_address', 200);
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
