<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysusersTable extends Migration
{

    public function up()
    {
        Schema::create('sysusers', function (Blueprint $table) {
            $table->id();
            $table->string('uname')->unique();
            $table->string('namalengkap');
            $table->timestamp('email')->nullable();
            $table->string('upass');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sysusers');
    }
}
