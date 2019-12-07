<?php
namespace App\Http\Controllers;
use App\Work;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('work');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('work.create');
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
        $work = new Work();
        $work->input1 = $request->input('input1');
        $work->input2 = $request->input('input2');
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.'.$extension;
            $file->move('app/public/',$filename);
            $work->image = $filename;
        }
        else {
            return $request;
            $work->image='';
        }
        $work->save();
        return redirect()->route('works')
        ->with('success','Cart added successfully...');
    }
    public function display()
    {
        $works = Work::all();
        return view('work.index')->with('works',$works);
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
        $work = Work::find($id);
        return view('work.edit',compact('work','id'));
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
        $work = Work::find($id);
        
        $work->input1=$request->get('input1');
        $work->input2=$request->get('input2');
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.'.$extension;
            $file->move('app/public/',$filename);
            $work->image = $filename;
        }
       
        $work->save();
        return redirect('works');
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
        $work = Work::find($id);
        $work->delete();
        return redirect('works')->with('success','Cart has been  deleted');
    }
}
