<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('sex');
            $table->date('dob');
            $table->string('education_level');
            $table->string('school')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->text('address');
            $table->string('time_to_reach_you');
            $table->string('why_be_maker')->nullable();
            $table->boolean('attend_tech_events')->nullable();
            $table->boolean('attended_tech_events')->nullable();
            $table->boolean('exhibited_at_event')->nullable();
            $table->integer('how_you_know_op')->nullable();
            $table->boolean('attended_our_techcamp')->nullable();
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
        Schema::dropIfExists('members');
    }
}
