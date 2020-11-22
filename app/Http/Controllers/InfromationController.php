<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformationModel;


class InfromationController extends Controller
{
    function onAllSelect(){
        $result= InformationModel::All();
        return $result;
    }
}
