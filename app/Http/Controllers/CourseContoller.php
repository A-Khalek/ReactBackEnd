<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseTableModel;

class CourseContoller extends Controller
{

    function onSelectFour(){
        $result = CourseTableModel::limit(4)->get();
        return $result;
    }

    function onSelectAll(){
        $result = CourseTableModel::All();
        return $result;
    }

    function onSelectDetails($CourseID){ 
        
        $id = $CourseID;
        $result = CourseTableModel::where(['id'=>$id]) ->get();
        return $result;
    }
    
}
