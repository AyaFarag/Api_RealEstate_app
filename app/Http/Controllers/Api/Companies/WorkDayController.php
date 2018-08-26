<?php

namespace App\Http\Controllers\Api\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Companies\WorkDaysRequest;
use App\Models\WorkDay;


class WorkDayController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkDaysRequest $request)
    {
        $this->authorize('create',WorkDay::class);
        $workDay = auth()->user()->workDays()->create($request->input());
        if($workDay->id){
            return response()->json([
                'message'=> trans('api.Added successfully')
            ],201);
        }else{
            return response()->json([
                'message'=> trans('api.Unexpected error')
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkDaysRequest $request,WorkDay $workDay)
    {
        $this->authorize('update',$workDay);
        $workDayv->update($request->inputs());
         return response()->json([
            'message'=> trans('api.Updated successfully')
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkDay $workDay)
    {
        $this->authorize('delete',$workDay);
        $workDay->delete();
        return response()->json([
            'message'=> trans('api.Deleted successfully')
        ],200);
    }
}
