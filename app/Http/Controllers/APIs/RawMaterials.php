<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Repositories\RawMaterialsRepositoryInterface;
use App\Repositories\ReplacementRawMaterialsRepositoryInterface;
use Illuminate\Http\Request;

class RawMaterials extends Controller
{

    private $rawMaterialsRepositoryInterface, $replacementRawMaterialsRepositoryInterface;
    public function __construct(RawMaterialsRepositoryInterface $rawMaterialsRepositoryInterface, ReplacementRawMaterialsRepositoryInterface $replacementRawMaterialsRepositoryInterface)
    {
        $this->rawMaterialsRepositoryInterface = $rawMaterialsRepositoryInterface;
        $this->replacementRawMaterialsRepositoryInterface = $replacementRawMaterialsRepositoryInterface;

    }


    /**
     * Display a listing of the resource.
     */
    public function getRawMaterials()
    {
        $rawFields = [
            '*'
        ];
        $withRelations = [
            'replacement'
        ];
        $data = $this->rawMaterialsRepositoryInterface->selectCustomData(
            null,
            null,
            $rawFields,
            null,
            null,
            null,
            $withRelations,
        );
        return response()->json($data);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
