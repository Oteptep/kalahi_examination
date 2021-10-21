<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VolunteerPostRequest;
use App\Sex;
use App\Region;
use App\Volunteer;
use Carbon\Carbon;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $volunteers = Volunteer::with(['region', 'sex'])->orderBy('last_name', 'asc')->get();
        return view('volunteer.index', ['volunteers' => $volunteers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        $genders = Sex::all();

        return view('volunteer.create', ['regions' => $regions, 'genders' => $genders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Volunteer::create($request->except('_token'));
        return redirect('volunteer')->with(['message' => 'Save Successfully']);
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
    public function edit($volunteer_id)
    {
        //
        $volunteer = Volunteer::with(['region', 'sex'])->find($volunteer_id);
        $regions = Region::all();
        $genders = Sex::all();
        return view('volunteer.edit', ['volunteer' => $volunteer, 'regions' => $regions, 'genders' => $genders]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $volunteer_id)
    {
       Volunteer::find($volunteer_id)->find($volunteer_id)->update($request->except(['_token', '_method']));
       return redirect('volunteer')->with(['message' => 'Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return $id;
        Volunteer::find($id);
        return redirect('volunteer')->with(['message' => 'Deleted Successfully']);
    }

    public function delete($volunteer_id)
    {
        //
        Volunteer::find($volunteer_id)->delete();
        return redirect('volunteer')->with(['message' => 'Deleted Successfully']);
    }
}
