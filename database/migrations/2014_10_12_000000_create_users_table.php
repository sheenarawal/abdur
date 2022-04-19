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
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->integer('age')->length(11)->nullable();
            $table->string('investing_level',255)->nullable();
            $table->string('source',255)->nullable();
            $table->string('motivation',255)->nullable();
            $table->string('duration',255)->nullable();
            $table->string('investment',255)->nullable();
            $table->string('last_name',255)->nullable();
            $table->string('country_citizen',255)->nullable();
            $table->string('country_residence',255)->nullable();
            $table->string('account_type',255)->nullable();
            $table->string('address1',255)->nullable();
            $table->string('address2',255)->nullable();
            $table->string('state',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('zip_code',255)->nullable();
            $table->string('social_link_no',255)->nullable();
            $table->date('dob');
            $table->string('role')->default(2)->comment('1->admin,2->user');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('show_password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamp('deleted_at',)->nullable();
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
