<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserOnboardingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testgetChartData()
    {

    	$userOnboardingRepo = new \App\Repositories\UserOnboarding\UserOnboardingRepository();
    	$all = $userOnboardingRepo->getChartData();
    	foreach ($all as $value) {
    		$this->assertArrayHasKey('name', $value);
    		$this->assertArrayHasKey('data', $value);
    	}
        
    }
}
