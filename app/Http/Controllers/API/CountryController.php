<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\country;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $like = $request->search;

        $countries = country::where('name', 'like', '%'.$like.'%')
            ->orderBy('created_at', 'desc')
            ->get();

        $data = [
            'countries' => $countries,
        ];

        return $data;
    }
}
