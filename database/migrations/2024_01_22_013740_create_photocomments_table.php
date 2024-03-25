<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotocommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photocomments', function (Blueprint $table) {
            $table->BigIncrements('KomentarID');
            $table->string('IsiKomentar');
            $table->date('TanggalKomentar');
            $table->UnsignedBigInteger('FotoID');
            $table->foreign('FotoID')->references('FotoID')->on('photos')->onDelete('cascade');
            $table->UnsignedBigInteger('UserID');
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('photocomments');
    }
}
