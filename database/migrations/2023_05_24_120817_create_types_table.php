<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100)->unique();
            $table->string("slug", 100)->unique();
            $table->foreignId("projects_id")->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('types');
    }
};
