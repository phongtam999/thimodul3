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
        Schema::create('chitieucanhan', function (Blueprint $table) {
            $table->id();
            $table->string("Danhmuc");
            $table->date("Ngay");
            $table->integer("Sotien");
            $table->string("Ghichu");
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
        Schema::dropIfExists('chitieucanhan');
    }
};
