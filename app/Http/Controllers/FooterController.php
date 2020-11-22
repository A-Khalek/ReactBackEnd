<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterTableModel;

class FooterController extends Controller
{
    public function onSelectAll(){
        $result =FooterTableModel::All();
        return $result;
    }
}
