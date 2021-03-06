<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->index();
            $table->integer('role_id')->unsigned()->index()->default('1');
            $table->string('last_name', 255);
            $table->string('first_name', 255);
            $table->string('gender', 1);
            $table->date('birth_date');
            $table->string('mail', 255);
            $table->string('password', 255);
            $table->timestamp('fidelity', 0)->useCurrent();
            

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('role_id')->references('id')->on('roles');
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
}
