<?php
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        $client = new Client();

        try {
            $response = $client->post('https://us1.api.mailchimp.com/3.0/lists/e56b5ac623/members', [
                'headers' => [
                    'Authorization' => 'Bearer 23996f3b74690fbf512ed63c15756f02-us21',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'email_address' => $email,
                    'status' => 'subscribed',
                ],
            ]);

// Przetwarzanie odpowiedzi lub inne operacje

            return redirect()->back()->with('success', 'Pomyślnie zapisano do newslettera!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Wystąpił błąd podczas subskrypcji.');
        }
    }
}
