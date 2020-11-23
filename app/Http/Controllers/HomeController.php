<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeTableModel;

class HomeController extends Controller
{
    function onVideotAll(){
        $result = HomeTableModel::select('video_desc', 'video_url')->get();
         return $result;
     }

     function onSelectClientProject(){
        $result = HomeTableModel::select('total_project','total_client')->get();
        return $result;
    }

    function onSelectTechDesc(){
        $result = HomeTableModel::select('technology_desc')->get();
        return $result;
    }

    function onSelectHomeTitle(){
        $result = HomeTableModel::select('home_title','home_subtitle')->get();
        return $result;
    }
 }

