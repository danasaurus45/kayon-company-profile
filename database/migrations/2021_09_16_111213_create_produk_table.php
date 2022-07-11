<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->string('nama_produk', 100);
            $table->string('ket_produk', 100)->nullable();
            $table->string('level_produk', 100)->nullable();
            $table->string('calorie', 50)->nullable();
            $table->string('moisture', 50)->nullable();
            $table->string('ash_content', 50)->nullable();
            $table->string('fixed_carbon', 50)->nullable();
            $table->string('burning_time', 50)->nullable();
            $table->string('ash_type', 50)->nullable();
            $table->string('size', 50)->nullable();
            $table->string('certificate', 50)->nullable();
            $table->string('packaging', 50)->nullable();
            $table->string('img_produk', 255)->nullable();
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
        Schema::dropIfExists('produk');
    }
}
