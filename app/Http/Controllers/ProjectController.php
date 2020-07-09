<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ImageProject;
use App\Sponsore_projects;
use App\Suponsor;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $sponsors = Suponsor::all();
        return view("admin.projects.index", compact('projects', 'sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sponsors(Request $request)
    {
        $sponsors = new Sponsore_projects();
        $sponsors->idProject = $request->idProject;
        $sponsors->idSponsore = $request->idSponsore;
        $sponsors->save();
         return  redirect("/adminpanel/projects")->with('success', 'success added');
    }
    public function store(Request $reques)
    {
        $project = new Project();
   
        $project->title = $reques->title;
        $project->project_description = $reques->project_description;
        $project->tags = $reques->tags;
        $project->startedAt = $reques->startedAt;
        $project->endedAt = $reques->endedAt;
        if($reques->hasFile('image'))
        {
            $avatar = $reques->file('image');
            $filename = time() .'.'. $avatar->getClientOriginalExtension();
            $avatar->move('uploads/projects/', $filename);  
        }
        else
        {
            $filename = '';
        }
        $project->image = $filename;  
        $project->save();
        if ($reques->hasfile('images'))
        {
            foreach($reques->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move('uploads/projects/', $name);    
                $images= new ImageProject();
                $images->image=$name; 
                $images->projectID=$project->id;       
                $images->save();       
            }
        }  
        return  redirect("/adminpanel/projects")->with('success', 'success added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Project $project)
    {
        $project = $project->find($id);
        if (!empty($project))
        {
        $projects = Project::orderBY('id', 'desc')->take(6)->get();
        $sponsors = Sponsore_projects::orderBY('id', 'desc')->where('idProject', $project->id)->get();
        $images = ImageProject::orderBY('id', 'desc')->where('projectID', $project->id)->get();
         return view('project', compact('project', 'projects', 'sponsors','images'));
        }
       else
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Project $project)
    {
        $project = $project->find($id);

        return  view("admin.projects.edit", compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Project $project)
    {
        $project = $project->find($id);
        $project->fill($request->all())->save();
        return redirect('adminpanel/projects')->with('success', 'success updated ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Project $project)
    {
        $project = $project->find($id);
        $project->delete();
         return redirect('adminpanel/projects')->with('success', 'success deleted ');
    }


}
