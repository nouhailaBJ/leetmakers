<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\JoinUs;
use Hash;
use Redirect;
use Validator;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();



        return view("admin.users.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'intra_username' => 'required|min:2|max:255|unique:users', 
            'email' => 'required|email|unique:users', 
            'name' => 'required|min:2|max:255',
            'avatar' =>'mimes:jpeg,jpg,png,gif',
        ]);
        if ($validator->fails())
            return redirect::back()->withErrors($validator)->withInput(); 

        $user = new User();
        $imageName =  time() .'.'. $avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('/uploads/users'), $imageName);
        $user->intra_username = $request->intra_username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->desc = $request->desc;
        $user->password = Hash::make($request->password);
        $user->avatar = $imageName;
        $user->save();
        return  redirect("/adminpanel/users")->with('success', 'success updated ');
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
    public function edit($id, User $user)
    {
        $user = $user->find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, User $user)
    {
        $user = $user->find($id);
        $user->fill($request->all())->save();
        return redirect('adminpanel/users')->with('success', 'success updated ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, User $user)
    {
        $user = $user->find($id);
        $user->delete();
         return redirect('adminpanel/users')->with('success', 'success delete ');
    }

    public function join_us(Request $request)
    {
        $validator = Validator::make($request->all(), [
             'first_name' => 'required|min:2|max:255', 
             'last_name' => 'required|min:2|max:255', 
             'email' => 'required|min:2|max:255|email', 
             'intra' => 'required|min:2|max:255', 
             'number' => 'required|min:2|max:255', 
             'exp_robotic' => 'required', 
             'description' => 'required|min:10', 
        ]);
        if ($validator->fails())
            return redirect::back()->withErrors($validator)->withInput(); 

        $user = new JoinUs();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->intra = $request->intra;
        $user->number = $request->number;
        $user->exp_robotic = $request->exp_robotic;
        $user->description = $request->description;
        $user->save();
        return  redirect::back()->with('success', 'Thank you for join us '); 
    }

    public function all_joiners()
    {
      $users =  JoinUs::all();
      return  view('admin.joinus', compact('users'));
    }
        public function join_us_page()
    {
        return view('join_us');
    }
    public function all_joiners_dest($id, JoinUs $user)
    {
        $user = $user->find($id);
        $user->delete();
         return redirect('adminpanel/all_joiners')->with('success', 'success delete ');
    }
}
