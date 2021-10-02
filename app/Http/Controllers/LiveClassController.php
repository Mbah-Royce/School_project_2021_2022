<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LiveClassController extends Controller
{
    public function startClass()
    { 
        $uuid = Str::uuid();
        $url = " https://30c8-154-72-167-7.ngrok.io/room/"."1/".$uuid;
        echo "<script>window.open('".$url."', '_blank')</script>";    
    }

    public function stopClass()
    {
        
    }
}
