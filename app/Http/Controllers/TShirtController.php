<?php

namespace App\Http\Controllers;
use App\Models\tshirt;

use Illuminate\Http\Request;

class TShirtController extends Controller
{
   public function index(){
    $data = tshirt::get();
    return view('')->with('data', $data);
   }
   

   public function create(Request $request)
   {
      $request->validate([
        'judul' => 'required',
        'sinopsis' => 'required',
      ]);

      tshirt::create([
        'judul' => $request->judul,
        'sinopsis' => $request->sinopsis,
      ]);

      return redirect('/');
}
}
