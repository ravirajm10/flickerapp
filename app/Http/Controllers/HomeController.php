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
        $recentPhotos = $this->flickerService->getRecentPhotos();
        return view('home', ['recentphotos' => $recentPhotos, 'size' => 'o']);
    }

    /*
     * Get the photos of respective size
     *
     * @param Obj $request
     * @return string $photoList
     */
    public function photoListBySize(Request $request) {
        $recentPhotos = $this->flickerService->getRecentPhotos();

        return view('partials.photo-list', ['recentphotos' => $recentPhotos, 'size' => $request->get('sizeType')]);
    }
}
