<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeTableModel extends Model
{
    protected $table  = '	home_tbl';
    protected $primaryKey   =   'id';
    public $incrementing    = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
