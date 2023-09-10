<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NastavnikController extends Controller

{
        public function index()
        {
            return Nastavnik::all();
        }
    
        public function store(Request $request)
        {
            $grad = new Nastavnik();
            $grad->ime = $request->ime;
            $grad->email = $request->email;
            $grad->lozinka = $request->lozinka;
            $grad->save();
    
            return 'Dodano';
        }
    
        public function edit(Request $request) {
            $grad = Nastavnik::find($request->id);
            $grad->ime = $request->ime;
            $grad->email = $request->email;
            $grad->lozinka = $request->lozinka;
            $grad->save();
    
            return 'Uređeno';
        }
    
        public function destroy($id) {
            Nastavnik::find($id)->delete();
    
            return 'Izbrisano';
        }
}
