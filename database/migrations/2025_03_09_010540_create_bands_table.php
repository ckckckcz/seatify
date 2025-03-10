<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('banner_image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bands');
    }
};

