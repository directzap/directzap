<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type');
            $table->string('avatar')->nullable();
            $table->string('company')->nullable();
            $table->string('username')->nullable();
            $table->string('pixel_gtm')->nullable();
            $table->string('pixel_facebook')->nullable();
            $table->longText('token_braip')->nullable();
            $table->boolean('active')->default(0);
            $table->boolean('is_admin')->default(0);
            $table->boolean('count_life_time')->default(0);
            $table->date('date_purchase')->nullable();
            $table->date('date_finish')->nullable();
            $table->integer('qtd_collaborators')->default(8);
            $table->integer('qtd_links')->default(8);
            $table->string('phone')->nullable();
            $table->rememberToken();
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
