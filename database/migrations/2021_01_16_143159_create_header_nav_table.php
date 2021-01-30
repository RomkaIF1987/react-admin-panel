<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderNavTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_nav', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('link_url');
            $table->boolean('is_dropdown')->default(false);
            $table->integer('parent_id')->nullable();
            $table->boolean('show')->default(false);
            $table->boolean('edit')->default(false);
            $table->boolean('delete')->default(false);
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
        Schema::dropIfExists('header_nav');
    }
}
