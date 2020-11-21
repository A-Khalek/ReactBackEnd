<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactTableModel extends Model
{
    protected $table  = 'contact_tbl';
    protected $primaryKey   =   'id';
    public $incrementing    = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
