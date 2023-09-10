<?php

namespace App\Http\Controllers;

use App\Models\Pitanje;
use Illuminate\Http\Request;

class PitanjeController extends Controller
{
    public function index()
    {
        return Pitanje::all();
    }

    public function store(Request $request)
    {
        $grad = new Pitanje();
        $grad->pitanje = $request->pitanje;
        $grad->odgovor = $request->odgovor;
        $grad->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $grad = Pitanje::find($request->id);
        $grad->odgovor = $request->odgovor;
        $grad->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Pitanje::find($id)->delete();

        return 'Izbrisano';
    }
}
