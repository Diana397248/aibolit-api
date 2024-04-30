<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetResource;
use App\Models\Pet;
use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PetResource::collection(Pet::all());
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
    public function store(StorePetRequest $request)
    {
        $petForCreate = new Pet();
        $petForCreate->fill($request->validated());
//        $user = auth('sanctum')->user();
//        $petForCreate->owner_id = $user->id;
        $petForCreate->owner_id = 1;
        $petForCreate->save();
        return new PetResource($petForCreate);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetRequest $request, Pet $pet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        //
    }
}
