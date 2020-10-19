<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_detail', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('email');
            $table->integer('contact');
            $table->integer('curr_ctc');
            $table->integer('exp_ctc');
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
