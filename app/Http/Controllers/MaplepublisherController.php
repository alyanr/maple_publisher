<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bukuterbit;

class MaplepublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $data['bukuterbit'] = bukuterbit::all();
        return view('index', $data);
    }

}