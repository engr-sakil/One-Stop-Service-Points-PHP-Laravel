<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('textilesMinistryFile');
            $table->string('textilesMinistryFileStatus');
            $table->string('environmentMinistryFile');
            $table->string('environmentMinistryFileStatus');
            $table->string('foreignMinistryFile');
            $table->string('foreignMinistryFileStatus');
            $table->string('planningMinistryFile');
            $table->string('planningMinistryFileStatus');
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
        Schema::dropIfExists('projects');
    }
}
