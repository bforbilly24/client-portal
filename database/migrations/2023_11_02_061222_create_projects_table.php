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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('clients_id');
            $table->string('name');
            $table->string('jenis');
            $table->longText('keterangan');
            $table->dateTime('deadline');
            $table->string('status');
            // $table->bigInteger('progress');
            $table->dateTime('masaaktif');
            $table->longText('notes');
            $table->longText('photo');

            $table->softDeletes();
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
};
