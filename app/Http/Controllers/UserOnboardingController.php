<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\UserOnboarding;
use App\Repositories\UserOnboarding\UserOnboardingInterface;

class UserOnboardingController extends Controller
{

    protected $userOnboarding;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserOnboardingInterface $userOnboarding)
    {
        $this->middleware('auth');
        $this->userOnboarding = $userOnboarding;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.useronboarding.chart');

    }

     /**
     * Show the application chart.
     *
     * @return \Illuminate\Http\Response
     */
    public function showChart()
    {
        return response()->json($this->userOnboarding->getChartData());
    }
}
