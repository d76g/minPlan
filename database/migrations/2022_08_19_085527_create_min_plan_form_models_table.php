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
        Schema::create('min_plan_form_models', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('priority');
            $table->string('age')->nullable();
            $table->boolean('receive_sms')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('receive_email')->nullable();
            $table->boolean('needs_safty_plan')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('min_plan_form_models');
    }
};
