<?php

namespace App\Http\Controllers;

use App\Models\CzescSamochodowa;
use Illuminate\Http\Request;

class CzescSamochodowaController extends Controller
{
    public function dodajRekord(Request $request)
    {
        $validatedData = $request->validate([
            'nazwa' => 'required',
            'producent' => 'required',
            'numer_seryjny' => 'required|unique:czesc_samochodowa',
            'ilosc' => 'required|integer',
            'kategoria' => 'required',
        ]);

        $czesc = new CzescSamochodowa;
        $czesc->Nazwa = $validatedData['nazwa'];
        $czesc->Producent = $validatedData['producent'];
        $czesc->Numer_seryjny = $validatedData['numer_seryjny'];
        $czesc->Ilosc = $validatedData['ilosc'];
        $czesc->Kategoria = $validatedData['kategoria'];
        $czesc->save();
        return redirect('/dodaj');
    }
    public function dodaj()
    {
        return view('home.dodaj');
    }
}
