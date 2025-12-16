<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class DashboardController extends Controller
{
    public function data()
    {
        return response()->json([
            'genders' => $this->getGenderDistribution(),
            'ageGroup' => $this->getAgeGroupDistribution()
        ]);
    }

    private function getGenderDistribution()
    {
        $data = Member::selectRaw('gender_id, COUNT(*) as total')->where('situation_id',1)->groupBy('gender_id')->get()->toArray();

        return [
            'male' => $data[0]['total'],
            'female' => $data[1]['total']
        ]; 
    }
    
    private function getAgeGroupDistribution()
    {
        $counts = Member::selectRaw("
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) >= 50 THEN 1 ELSE 0 END) as old,
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) BETWEEN 25 AND 49 THEN 1 ELSE 0 END) as adult,
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) BETWEEN 12 AND 24 THEN 1 ELSE 0 END) as young,
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) <= 11 THEN 1 ELSE 0 END) as child
        ")->first();

        return [
            'old'   => (int) $counts->old,
            'adult' => (int) $counts->adult,
            'young' => (int) $counts->young,
            'child' => (int) $counts->child,
        ];
    }
}
