<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelanceEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelance_employers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Username',30);
            $table->text('Name',30);
            $table->text('Email',30);
            $table->text('Address',50);
            $table->text('Phone',10);
            $table->text('Job_Type',10);
            $table->text('Password',10);
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
        Schema::dropIfExists('freelance_employers');
    }
}
