<?php

namespace App\Http\Controllers;
use App\Skills;
use App\Experience;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $educations = Skills::all();
        // return view('skills.index')->with('educations',$educations);
      
        return view('skills');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('skills.create');
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
        $skill= new Skills();
        $skill->monthone=$request->input('monthone');
        $skill->monthtwo=$request->input('monthtwo');
        $skill->year=$request->input('year');
        $skill->qualification=$request->input('qualification');
        $skill->heading=$request->input('heading');
        $skill->university=$request->input('university');
        $skill->save();
       
        return redirect()->route('skills')
        ->with('success','Cart added successfully...');
        

    }
    public function display()
    {
        $skills = Skills::all();
        return view('skills.index')->with('skills',$skills);
        // $hires = Hire::all();
        // return view('hire.index')->with('hires',$hires);
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
        $skill = Skills::find($id);
        return view('skills.edit',compact('skill','id'));
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
        $skill = Skills::find($id);
        $skill->monthone=$request->get('monthone');
        $skill->monthtwo=$request->get('monthtwo');
        $skill->year=$request->get('year');
        $skill->qualification=$request->get('qualification');
        $skill->heading=$request->get('heading');
        $skill->university=$request->get('university');
        $skill->save();
        return redirect('skills');
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
        $skill= Skills::find($id);
        $skill->delete();
        return redirect('skills')->with('success','deleted successfully');

    }
}
