<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test(Request $request){
        
        $requests = Request::with('employee')->first()->get();
        dd($request);
       // $data=[]
        $pdf = PDF::loadView('requests/pdfs/request_status',compact('requests'));
        return $pdf->download('request.pdf');
    }
}
