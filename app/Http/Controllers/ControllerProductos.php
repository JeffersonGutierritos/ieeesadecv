<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Process\Process;
class ControllerProductos extends Controller
{
    function verinicio(){
        return view('Inicio');
    }
    function actualizar(){
        $process = new Process('git pull');
        $process->run();
    }
}
