<?php

namespace App\Packages\File\src\Http\Controllers;

use App\Http\Controllers\Controller;

class FileController extends Controller
{
    //
    public function index(){
        return view("File::index");
    }
}
