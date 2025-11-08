<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            $table->string('name');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('unit')->nullable();
            $table->string('barcode')->nullable();
            $table->unsignedBigInteger('default_supplier_id')->nullable();
            $table->integer('shelf_life_days')->nullable();
            $table->boolean('batch_control')->default(false);
            $table->boolean('expiry_control')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
