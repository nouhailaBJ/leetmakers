<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suponsor;
class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Suponsor::all();
        return view("admin.sponsors.index", compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return  view("admin.sponsors.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Suponsor();

        if($request->hasFile('image'))
        {
            $avatar = $request->file('image');
            $filename = time() .'.'. $avatar->getClientOriginalExtension();
            $avatar->move('uploads/sponsors/', $filename);  
        }
        else
        {
            $filename = '';
        }
        $project->logo = $filename;  
        $project->name = $request->name;  
        $project->save();
        return  redirect("/adminpanel/sponsors")->with('success', 'success updated');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Suponsor $sponsors)
    {
        $sponsors = $sponsors->find($id);
        $sponsors->delete();
        return redirect('adminpanel/sponsors')->with('success', 'success deleted ');
    }
}
