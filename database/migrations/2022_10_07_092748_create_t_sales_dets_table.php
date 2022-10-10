<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSalesDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sales_dets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id')->constrained('m_barangs');
            $table->foreignId('sales_id')->constrained('t_sales');
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('harga_bandrol');
            $table->integer('qty');
            $table->decimal('diskon_pct');
            $table->decimal('diskon_nilai');
            $table->decimal('harga_diskon');
            $table->decimal('total');
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
        Schema::dropIfExists('t_sales_dets');
    }
}
