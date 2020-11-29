<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;

class ProjectController extends Controller
{
    function onSelect3(){
        $result = ProjectModel::limit(3)->get();
        return $result;
    }

    function onSelectAll(){
        $result =  ProjectModel::All();
        return $result;
    }

    function onSelectDetails($projectId){
        $id = $projectId;
        $result = ProjectModel::where(['id'=>$id])->get();
        return $result;

    }
}
