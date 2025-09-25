<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class DashboardController extends Controller
{
    public function getGenderDistribution()
    {
        $data = Member::selectRaw('gender_id, COUNT(*) as total')->where('situation_id',1)->groupBy('gender_id')->get()->toArray();
  
        return response()->json([
            'male' => $data[0]['total'],
            'female' => $data[1]['total'],
        ]);

    }
    
    public function getAgeGroupDistribution()
    {
        $currentDate = today();
    }
}
