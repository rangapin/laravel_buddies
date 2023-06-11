<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuddiesTable extends Migration
{
    public function up()
    {
        Schema::create('buddies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            // Add any additional columns for the buddies table
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buddies');
    }
}
