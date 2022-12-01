<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_join_membership', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('email');
            $table->string('phone_number');
            $table->string('banking');
            $table->string('operator');
            $table->string('name_membership');
            $table->string('membership_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_join_membership');
    }
}
