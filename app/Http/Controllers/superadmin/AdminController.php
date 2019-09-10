<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
    	$settings = DB::table('settings')->find(1);

        $data = [
            'menu'  => 'dashboard',
            'settings'  => $settings,
            
        ];
    	return view('superadmin.home',$data);
    }

    public function update(Request $request, $id)
    {
        $id =  $request->input('id');
        $user = Users::findOrFail($id);

        $validator = \Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:admins,email,'.$id,
            ]);
     
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        if ($request->hasFile('files'))
        {
            $originalImage = $request->file('files');
            $request['image']  = Helper::processImage($originalImage,TRUE);
            Helper::UnlinkImage(public_path('images'),$user->image);
            
        }
        if($request->input('password') != "")
            $request['password'] = Hash::make($request->input('password'));
        else
            unset($request['password']);

        
        $user->update($request->all());
        return response()->json(['success'=>'Action success']); 
        
    }
}
