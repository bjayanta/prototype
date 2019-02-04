<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('status')->default(0)->comment('0 or 1');
            $table->rememberToken();
            $table->timestamps();
        });

        if (Schema::hasTable('admins')) {
            // admin meta table
            Schema::create('adminmeta', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('admin_id')->unsigned();
                $table->string('meta_key');
                $table->text('meta_value');
                $table->foreign('admin_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminmeta');
        Schema::dropIfExists('admins');
    }
}
