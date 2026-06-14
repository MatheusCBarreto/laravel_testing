<?php

namespace App\Http\Controllers;

use App\Services\MainOperations;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Olá, mundo";
    }

    public function showHash(): string
    {
        return MainOperations::generateHash();
    }
}
