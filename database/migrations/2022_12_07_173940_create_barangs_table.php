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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->String('nama');
            $table->string('slug')->unique();
            // $table->string('pemilik');
            $table->Text('kondisi');
            $table->Text('spesifikasi');
            $table->Text('lokasi');
            $table->integer('harga_jual');
            $table->Text('minus');
            $table->string('CP');
            $table->string('status');
            $table->string('image')->nullable();
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('barangs');
    }
};
