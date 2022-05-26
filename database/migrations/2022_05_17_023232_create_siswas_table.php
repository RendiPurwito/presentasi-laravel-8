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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jeniskelamin',['laki-laki', 'perempuan']);
            $table->enum('agama',['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu']);
            $table->enum('jurusan',['bc', 'mm', 'rpl', 'tei', 'tkj']);
            $table->bigInteger('notelepon');
            $table->text('alamat');
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
        Schema::dropIfExists('siswas');
    }
};
