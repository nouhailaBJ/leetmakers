<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Validator;
use Redirect;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('contact.index');
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
             'contact_name' => 'required|min:2|max:255', 
             'contact_email' => 'required|min:2|max:255|email', 
             'contact_message' => 'required|min:10', 
        ]);
        if ($validator->fails())
            return redirect::back()->withErrors($validator)->withInput(); 

        if ($request->isMethod('post'))
        {
            $contact = new Contact;
            $contact->contact_name = $request->contact_name;
            $contact->contact_email = $request->contact_email;
            $contact->contact_message = $request->contact_message;
            $contact->save();
        }
        return redirect('/#contact')->with('success', 'Thank you for contacting us. We will reply to you soon | شكرا على مراسلتنا سوف يتم الرد على رسالتك قريبا ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('contact');
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
    public function destroy($id, Contact $contact)
    {
        $contact->find($id)->delete();
        return redirect('adminpanel/contact')->with('successMessage', 'Success Deleted Message - تم الحذف بنجاح');
    }
}
