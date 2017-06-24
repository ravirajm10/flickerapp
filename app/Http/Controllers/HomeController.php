<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FlickerService;

class HomeController extends Controller
{
    /*
     * Thr Flicker Service
     *
     * @var FlickerService
     */
    public $flickerService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FlickerService $flickerService)
    {
        $this->middleware('auth');
        $this->flickerService = $flickerService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
