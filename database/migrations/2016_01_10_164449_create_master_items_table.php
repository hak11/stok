<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasterItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('master_items', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nama_barang');
$table->integer('kategori');
$table->float('harga');
$table->string('distributor');

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
        Schema::drop('master_items');
    }

}
