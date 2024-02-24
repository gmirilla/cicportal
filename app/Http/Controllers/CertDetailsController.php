<?php

namespace App\Http\Controllers;

use App\Models\certDetails;
use App\Http\Requests\StorecertDetailsRequest;
use App\Http\Requests\UpdatecertDetailsRequest;

class CertDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecertDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecertDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\certDetails  $certDetails
     * @return \Illuminate\Http\Response
     */
    public function show(certDetails $certDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\certDetails  $certDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(certDetails $certDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecertDetailsRequest  $request
     * @param  \App\Models\certDetails  $certDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecertDetailsRequest $request, certDetails $certDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\certDetails  $certDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(certDetails $certDetails)
    {
        //
    }
}
