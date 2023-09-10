<?php

namespace App\Http\Controllers;

use App\Models\Ucenik;
use Illuminate\Http\Request;

class UcenikController extends Controller
{
    public function index()
    {
        return Ucenik::all();
    }

    public function store(Request $request)
    {
        $grad = new Ucenik();
        $grad->ime = $request->ime;
        $grad->email = $request->email;
       

        $grad->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $grad = Ucenik::find($request->id);
        $grad->ime = $request->ime;
        $grad->email = $request->email;
        
      
        $grad->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Ucenik::find($id)->delete();

        return 'Izbrisano';
    }
}
