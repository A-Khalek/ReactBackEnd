<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutTableModel;


class AboutController extends Controller
{
    function onAllSelect(){
        $result = AboutTableModel::All();
        return $result;
    }
}
