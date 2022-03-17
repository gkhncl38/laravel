<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun', function (Blueprint $table) {
            $table->id();
            $table->string('urun_ad');
            $table->string('urun_kategori');
            $table->string('urun_gorsel')->default('#')->change();
            $table->string('urun_text');
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
        Schema::dropIfExists('urun');
    }
}
