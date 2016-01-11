<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasterAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('master_areas', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nama_area');
$table->string('pj');
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
        Schema::drop('master_areas');
    }

}
