<?php
namespace App\Http\Controllers;
use App\Hire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('hire');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hire.create');
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
        $hire = new Hire();
       
        $hire->rate = $request->input('rate');
        $hire->input1 = $request->input('input1');
        $hire->input2 = $request->input('input2');
        $hire->input3 = $request->input('input3');
        $hire->input4 = $request->input('input4');
        $hire->input5 = $request->input('input5');
        if($request->hasfile('name')) {
            $file = $request->file('name');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.'.$extension;
            $file->move('app/public/',$filename);
            $hire->name = $filename;
        }
        else {
            return $request;
            $hire->name='';
        }
        $hire->save();
        return redirect()->route('hires')
        ->with('success','Cart added successfully...');
       
    }
    
    public function display()
    {
        $hires = Hire::all();
        return view('hire.index')->with('hires',$hires);
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
        $hire = Hire::find($id);
        return view('hire.edit',compact('hire','id'));
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
        // $request->validate([
        //     'coinname' => 'required',
        //     'coinprice'=> 'required|numeric',
        //   ]); 
        $hire = Hire::find($id);
          $hire->rate=$request->get('rate');
          $hire->input1=$request->get('input1');
          $hire->input2=$request->get('input2');
          $hire->input3=$request->get('input3');
          $hire->input4=$request->get('input4');
          $hire->input5=$request->get('input5');
          if($request->hasfile('name')) {
            $file = $request->file('name');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.'.$extension;
            $file->move('app/public/',$filename);
            $hire->name = $filename;
        }
          $hire->save();
          return redirect('hires');
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
        $hire = Hire::find($id);
        $hire->delete();
        return redirect('hires')->with('success','Cart has been  deleted');

    }
}
