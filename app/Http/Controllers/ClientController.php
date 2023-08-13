<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\client;

class ClientController extends MainController
{
    public function get_client()
    {
        $client = client::all();

        return view('client', ['client' => $client]);  
    }
}