<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function kontakt()
    {
        $email = 'uczelnia@collegiumwitelona.pl';
        $phone = 'tel. 76-723-21-50';
        $address = 'ul. Sejmowa 5A

59-220 Legnica';
        return view('home.kontakt', compact('address', 'phone', 'email'));
    }

    public function onas()
    {

        $author1 = "Radosław Czapliński";
        $author2 = "Adam Cendlewski";
        $author3 = "Marceli Filosek";
        return view('home.o-nas', compact('author1', 'author2', 'author3'));

    }

    public function opony()
    {
        $kategorie = ['Opony'];

        $opony = DB::table('czesc_samochodowa')
            ->whereIn('Kategoria', $kategorie)
            ->get();
        return view('home.opony', compact('opony'));
    }

    public function silnik()
    {
        $kategorie = ['Silnik'];

        $silnik = DB::table('czesc_samochodowa')
            ->whereIn('Kategoria', $kategorie)
            ->get();
        return view('home.silnik', compact('silnik'));
    }

    public function zawieszenie()
    {
        $kategorie = ['Zawieszenie'];

        $zawieszenie = DB::table('czesc_samochodowa')
            ->whereIn('Kategoria', $kategorie)
            ->get();
        return view('home.zawieszenie', compact('zawieszenie'));
    }

    public function skrzynia()
    {
        $kategorie = ['Skrzynia_biegów'];

        $skrzynia = DB::table('czesc_samochodowa')
            ->whereIn('Kategoria', $kategorie)
            ->get();
        return view('home.skrzynia-biegow', compact('skrzynia'));
    }


}
