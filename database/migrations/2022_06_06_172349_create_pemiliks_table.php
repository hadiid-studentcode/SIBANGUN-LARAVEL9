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
        Schema::create('pemiliks', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 20);
            $table->text('alamat');
            $table->string('notlp', 50);
            $table->foreignId('id_user')->references('id')
                ->on('users')->onDelete('cascade')->onUpdate('cascade')->unique();
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
        Schema::dropIfExists('pemiliks');
    }
};
