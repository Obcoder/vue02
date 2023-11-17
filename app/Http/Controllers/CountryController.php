<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecountryRequest;
use App\Http\Requests\UpdatecountryRequest;
use App\Models\country;
use Inertia\Inertia;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = country::get();

        $data = [
            'title' => 'Страны',
            'countries' => $countries,
        ];

        return Inertia::render('countries', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecountryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecountryRequest $request, country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(country $country)
    {
        //
    }
}
