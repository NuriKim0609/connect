<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\monitoring_video;

class MonitoringVideoController
{
    public function show_today_video(Request $request)
    {
        $d = date('N'); 
        $DayOfWeek = $d % 7 + 1; // 일요일이 1로 시작되는 요일

        $car_id = $request->input('car_id'); // ajax request로 car_id 받는 변수

        $monitoring_videos = monitoring_video::where('car_id', '=', $car_id)
                   ->where('date', '=', $DayOfWeek) 
                   ->get();
        
        return response()->json($monitoring_videos);
    }
}
?>
