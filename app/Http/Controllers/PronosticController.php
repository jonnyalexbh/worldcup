<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class PronosticController extends Controller
{
  /**
  * index
  *
  */
  public function index()
  {
    $groups = Group::with(['matches'])->get();
    return view('pronostics.index', ['groups' => $groups]);
  }
}
