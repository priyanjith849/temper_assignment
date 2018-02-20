<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersOnboardingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_onboarding', function (Blueprint $table) {
            $table->increments('user_id');
            $table->date('created_at');
            $table->integer('onboarding_percentage');
            $table->integer('count_applications');
            $table->integer('count_accepted_applications');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_onboarding');
    }
}
