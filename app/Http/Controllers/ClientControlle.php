<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientControlle extends Controller
{
    public function show(){
        $data['rows'] = Client::all();
        return view ('clients.show')->with($data);
    }
}
