<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Redirect;

class SettingController extends Controller
{
    public function index(Setting $siteSetting)
    {
    	$siteSetting = $siteSetting->all();
    	return view('admin.sitesetting.index' , compact('siteSetting'));
    }

    public function store(Request $request, Setting $siteSetting)
    {
    	foreach(array_except($request->toArray(), ['_token' , 'submit']) as $key => $req )
    	{
    		$siteSettingUpdate = $siteSetting->where('namesetting', $key)->get()[0];
    		$siteSettingUpdate->fill(['value' => $req])->save();
    	}
     return Redirect::back()->with('success','Update successfully setting of Site');
 	}

}
