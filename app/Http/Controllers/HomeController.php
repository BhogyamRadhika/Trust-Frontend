<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    

    public function about()
    {
        return view('pages.about');
    }

    public function boardOfDirectors()
    {
        return view('pages.boardOfDirectors');
    }
    public function boardOfAdvisors()
    {
        return view('pages.boardOfAdvisors');
    }
    public function leadershipteam()
    {
        return view('pages.leadershipteam');
    }

    public function ourDoctors()
    {
        return view('pages.ourDoctors');
    }

    public function diagnosticsolutions()
    {
        return view('pages.diagnosticsolutions');
    }
    public function blogsingle()
    {
        return view('pages.blog-single');
    }
    public function brouchers()
    {
        return view('pages.brouchers');
    }

    public function newsroom()
    {
        return view('pages.newsroom');
    }
    public function scientificPublications()
    {
        return view('pages.scientificPublications');
    }
    public function careers()
    {
        return view('pages.careers');
    }
    public function lifeAtTRUSTlab()
    {
        return view('pages.lifeAtTRUSTlab');
    }
    public function biochemistry()
    {
        return view('pages.biochemistry');
    }
    public function cart()
    {
        return view('pages.cart');
    }
    // public function diagnosticsolutions()
    // {
    //     return view('pages.diagnosticsolutions');
    // }
    public function contact()
    {
        return view('pages.contact');
    }
    public function currentOpportunities()
    {
        return view('pages.currentOpportunities');
    }
   
    public function home(Request $request)
{
    // Fetch packages
    $packagesResponse = Http::withOptions(['verify' => false])
        ->get('https://edos.mytrustlab.com/api/tests/bydepartment/package');

    if ($packagesResponse->failed()) {
        abort(500, 'Failed to fetch packages');
    }

    $packages = $packagesResponse->json();

    // Fetch tests
    $testsResponse = Http::withOptions(['verify' => false])
        ->get('https://edos.mytrustlab.com/api/tests/');

    if ($testsResponse->failed()) {
        abort(500, 'Failed to fetch tests');
    }

    $tests = $testsResponse->json();

    // Map packages with corresponding tests
    $groupedData = [];
    foreach ($packages as $package) {
        $groupedData[] = [
            'package' => $package,
            'tests' => array_filter($tests, function ($test) use ($package) {
                return $test['test_name'] === $package['title'];
            }),
        ];
    }

    // PayU configuration
    $payuConfig = [
        'key' => env('PAYU_KEY'),
        'salt' => env('PAYU_SALT'),
        'mode' => env('PAYU_MODE', 'test'), // Default to test mode
        'test_url' => env('PAYU_TEST_URL', 'https://sandboxsecure.payu.in/_payment'),
        'production_url' => env('PAYU_PRODUCTION_URL', 'https://secure.payu.in/_payment'),
    ];

    $key = $payuConfig['key'];
    $salt = $payuConfig['salt'];
    $txnid = uniqid(); // Unique transaction ID
    $amount = $request->input('amount', 0);
    $firstname = $request->input('firstname', 'Test User');
    $email = $request->input('email', 'test@example.com');
    $phone = $request->input('phone', '9999999999');
    $productinfo = $request->input('productinfo', 'Test Product');
    $surl = route('payment.success');
    $furl = route('payment.failure');
    $profiles = array_filter($tests, function ($test) {
        return stripos($test['test_name'], 'Profile') !== false;
    });
    // Generate hash
    $hashString = "{$key}|{$txnid}|{$amount}|{$productinfo}|{$firstname}|{$email}|||||||||||{$salt}";
    $hash = strtolower(hash('sha512', $hashString));

    // Determine PayU URL
    $payuUrl = $payuConfig['mode'] === 'test' ? $payuConfig['test_url'] : $payuConfig['production_url'];

    return view('pages.home', compact('profiles','payuUrl', 'key', 'txnid', 'amount', 'firstname', 'email', 'phone', 'productinfo', 'surl', 'furl', 'hash', 'groupedData', 'payuConfig'));
}



    public function paymentSuccess(Request $request)
    {
        // Handle success response
        return view('pages.payu_success', ['data' => $request->all()]);
    }

    public function paymentFailure(Request $request)
    {
        // Handle failure response
        return view('pages.payu_failure', ['data' => $request->all()]);
    }
            

}
