<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
    	return view('file.home');
    }
    public function store(request $request)
    {
    	if ($request->hasFile('image')) {

    		$request->file('image');
    		//return Storage::putFile('public', $request->file('image') );
            return $request->image->storeAs('public','chek.jpg');
    	}else{
    		return'No selected file';
    	}

    }
    public function show()
        {
            $url= Storage::url('chek.jpg');
            return"<img src='".$url."'/>";
        }

    
}
