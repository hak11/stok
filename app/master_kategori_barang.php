<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_kategori_barang extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'master_kategori_barangs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_kategori', 'keterangan'];
/*
   public function master_items()
    {
        return $this->belongsTo('App\master_item');
    }
*/
}
