<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAssermenteAndLanguesAndCvUrlAndProvanceUrlAndRef1UrlAndRef2UrlAndRef3UrlToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->boolean('assermente')->default(0);
            $table->string('langues')->nullable();
            $table->string('cvUrl')->nullable();
            $table->string('provanceUrl')->nullable();
            $table->string('ref1Url')->nullable();
            $table->string('ref2Url')->nullable();
            $table->string('ref3Url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['assermente','langues','cvUrl','provanceUrl','ref1Url','ref2Url','ref3Url']);
        });
    }
}
