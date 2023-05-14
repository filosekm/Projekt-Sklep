<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'subscriber_email' => 'required|email'
        ]);
        if (Newsletter::isSubscribed($request->subscriber_email)) {
            return redirect()->back()->with('error', 'Email już jest zarejestrowany');
        } else {
            Newsletter::subscribe($request);
            return redirect()->back()->with('success', 'Email pomyślnie zarejestrowany');
        }
        $response = Newsletter::subscribe($request);

        $apiResponse = $response->getLastResponse();


        dd($apiResponse);

    }
}
