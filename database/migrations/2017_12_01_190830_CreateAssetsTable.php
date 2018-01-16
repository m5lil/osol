<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode')->unique();
            $table->string('serial');
            $table->string('name');
            $table->longText('description');
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->integer('warranty')->nullable();
            $table->string('condition');
            $table->integer('life_time');
            $table->integer('depreciation_rate');
            $table->integer('area_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->integer('classification_id')->unsigned();
            $table->integer('supplier_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');;
            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade');;
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');;
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');;
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status');
            $table->date('purchase_date');
            $table->integer('purchase_price');
            $table->integer('receipt_code')->nullable();
            $table->date('receipt_date');
            $table->date('maintenance_date')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
