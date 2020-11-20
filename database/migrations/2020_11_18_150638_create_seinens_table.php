<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeinensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seinens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
			$table->bigInteger('userid')->unique();
			$table->bigInteger('old');
			$table->bigInteger('wantold');
			$table->string('area');
			$table->string('description');
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
        Schema::dropIfExists('seinens');
    }
}
