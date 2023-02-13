<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

public function index()
{
    return "index Page";
}

public function about()
{
    return "about Page";
}

public function team()
{
    return "team Page";
}

public function contact()
{
    return "contact Page";
}

public function services()
{
    return "services Page";
}

public function user($name = null)
{
    return 'Welcome ' . $name;
}





}
