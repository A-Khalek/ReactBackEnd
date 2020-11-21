<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartDataModel extends Model
{
    protected $table  = 'chart_tbl';
    protected $primaryKey   =   'id';
    public $incrementing    = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
