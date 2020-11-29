<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutTableModel extends Model
{
    protected $table  = 'about_tbl';
    protected $primaryKey   =   'id';
    public $incrementing    = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
