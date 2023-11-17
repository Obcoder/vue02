<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreregionRequest;
use App\Http\Requests\UpdateregionRequest;
use App\Models\region;
use Inertia\Inertia;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Регионы',
            'regions' => ['Адыгея', 'Башкортостан'],
        ];

        return Inertia::render('regions', $data);
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
    public function store(StoreregionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateregionRequest $request, region $region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(region $region)
    {
        //
    }
}
