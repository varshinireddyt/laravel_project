<?php

namespace App\Http\Controllers;
use App\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('experience');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('experience.create');
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
        $skille= new Experience();
        $skille->month=$request->input('month');
        $skille->yearex=$request->input('yearex');
        $skille->company=$request->input('company');
        $skille->role=$request->input('role');
        $skille->retyperole=$request->input('retyperole');
        $skille->description=$request->input('description');
        
        $skille->save();
        return redirect()->route('experience')
        ->with('success','Cart added successfully...');
        

    }
    public function display()
    {
        $experience = Experience::all();
        return view('experience.index')->with('experience',$experience);
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
        $skille = Experience::find($id);
        return view('experience.edit',compact('skille','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $skille = Experience::find($id);
        $skille->month=$request->get('month');
        $skille->yearex=$request->get('yearex');
        $skille->company=$request->get('company');
        $skille->role=$request->get('role');
        $skille->retyperole=$request->get('retyperole');
        $skille->description=$request->get('description');
        $skille->save();
        return redirect('experience');
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
        $skille= Experience::find($id);
        $skille->delete();
        return redirect('experience')->with('success','deleted successfully');
    }
}
