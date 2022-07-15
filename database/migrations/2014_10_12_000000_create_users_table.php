<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('annual_income');
            $table->string('occupation')->nullable();
            $table->string('family_type')->nullable();
            $table->string('manglik')->nullable();
            $table->string('expected_income')->nullable();
            $table->string('expected_occupation')->nullable();
            $table->string('expected_family_type')->nullable();
            $table->string('expected_manglik')->nullable();
            $table->boolean('login_type');
            $table->string('google_id')->nullable();
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
        Schema::dropIfExists('users');
    }
};
