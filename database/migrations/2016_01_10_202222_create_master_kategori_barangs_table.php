<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasterKategoriBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('master_kategori_barangs', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nama_kategori');
$table->text('keterangan');

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
        Schema::drop('master_kategori_barangs');
    }

}
