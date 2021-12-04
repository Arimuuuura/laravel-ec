<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')
                ->constrained();
            // TODO オーナーを完全に削除したときにShopも削除する
            //    ->onUpdate('cascade')
            //    ->onDelete('cascade');
            $table->string('name');
            $table->text('information');
            $table->string('filename');
            $table->boolean('is_selling');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
