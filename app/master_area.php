<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_area extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'master_areas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_area', 'pj', 'keterangan'];

}
