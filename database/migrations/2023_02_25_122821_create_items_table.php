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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('barcode');
            $table->integer('stok_produk');
            $table->integer('terjual_produk');
            $table->string('nm_produk', 100);
            $table->enum('aktif_produk', ['Y', 'N']);
            $table->text('isi_produk');
            $table->string('foto_produk', 100);
            $table->double('harga_produk', 8, 2);
            $table->integer('diskon_produk');
            $table->decimal('berat_produk', $precision = 8, $scale = 2);
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
        Schema::dropIfExists('items');
    }
};
