<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\StaffResource;
use App\Http\Resources\V1\StaffCollection;
use App\Filters\V1\StaffFilter;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new StaffFilter();
        $filterItems = $filter->transform($request); //format:['column','operator','value']
        
        if (count((array)$filterItems) == 0){
            return new StaffCollection(Staff::paginate());
        } else {
            $staff = Staff::where($filterItems)->paginate();
            return new StaffCollection($staff->appends($request->query()));
        }
        
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
    public function store(StoreStaffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return new StaffResource($staff);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
