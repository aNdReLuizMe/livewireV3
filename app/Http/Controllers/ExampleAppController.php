<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleAppController extends Controller
{
    public function app()
    {
        dd($_GET);
    }
    public function app2(Request $request)
    {
        dd($request);
    }
}
