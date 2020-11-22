<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;

class ProjectController extends Controller
{
    function onSelect3(){
        $result =  ProjectModel::limiti(3)->get();
        return $result;
    }

    function onSelectAll(){
        $result =  ProjectModel::All();
        return $result;
    }

    function onSelectDetails(Request $req){
        $id = $req->input($id);
        $result = ProjectModel::where(['$req'=>$id])->get();
        return $result;

    }
}
