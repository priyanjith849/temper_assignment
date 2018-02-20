<?php
namespace App\Repositories\UserOnboarding;


use App\Repositories\UserOnboarding\UserOnboardingInterface;

use App\Models\UserOnboarding;


class UserOnboardingRepository implements UserOnboardingInterface
{

    
    public function getChartData()
    {
        $weekOnboringdata = \DB::select("
            SELECT A.week_id, onboarding_percentage,(week_percentage_head_count/week_head_count)*100 AS head_count_percentage  
            FROM

                (SELECT WEEK(created_at) AS week_id, onboarding_percentage, count(*) AS week_percentage_head_count
                FROM users_onboarding
                GROUP BY onboarding_percentage, WEEK(created_at)
                ) AS A

            LEFT JOIN 

                (SELECT WEEK(created_at) AS week_id, count(*) AS week_head_count
                FROM users_onboarding
                GROUP BY WEEK(created_at) ) AS B
            ON A.week_id = B.week_id

            ORDER BY week_id,onboarding_percentage");


        $data = [];

        //Set array for chart render
        if(count($weekOnboringdata)){

            foreach ($weekOnboringdata as $key => $value) {

                if (!(array_key_exists($value->week_id, $data))) {
                  
                  $data[$value->week_id]["name"]  = $value->week_id.'-Week';
                  $data[$value->week_id]["data"][] = [0,0]; 

                }

                $data[$value->week_id]["data"][] = [$value->onboarding_percentage,floatval($value->head_count_percentage)]; 

            }

        }

        //Remove unwanted key from the array
        $finalDataSet = [];
        foreach($data as $record){
            array_push($finalDataSet, $record);
        }
        
        return $finalDataSet;
    }

    
}
