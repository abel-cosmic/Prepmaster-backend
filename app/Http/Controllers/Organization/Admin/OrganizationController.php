<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;
use App\Models\Organization;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function create() {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganizationRequest $request) {

    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization){

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization) {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizationRequest $request, Organization $organization) {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        if(!$organization){
            return response()->json(['error'=> 'Organization not found'],Response::HTTP_NOT_FOUND);
        }
        $organization->delete();
        return response()->json(['message'=>'Organization deleted successfully'],Response::HTTP_OK);
    }
}
