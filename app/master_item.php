<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_item extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'master_items';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_barang', 'kategori', 'harga', 'distributor'];

/*
    public function masterkategori()
    {
        return $this->hasMany('App\master_kategori_barang');
    }
*/
}
