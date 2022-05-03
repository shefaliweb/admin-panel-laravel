<?php

namespace App\Http\Controllers;
 // use App\Http\Controllers\MemberController;
use App\Models\Member;

use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function addData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->move('uploads/');
        $member = new Member;
        $member->name = $request->name;
        $member->image = $path;
        $member->save();
        return redirect('/ManageEvent')->with('status', 'Gallery Added Successfully');
    }


    function show(){
        $data=Member::all();
        
        if ($data->isEmpty()) {
            return view('Admin/table', ['members'=>$data])->withData(null);
        }else{
            return view('Admin/table',['members'=>$data]);
        }
    }

    function delete($id){
      $data=Member::find($id);
      $data->delete();

      return redirect('ManageUser')->with('status', 'Gallery Deleted Successfully');
      // return redirect('ManageUser');

  }

  function showdata($id){

      $data=Member::find($id);
      return view('Admin/edit',['data'=>$data]);

  }



       public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->move('uploads/');
        $data=Member::find($request->id);
        $data->name = $request->name;
        $data->image = $path;
        $data->save();
        return redirect('/ManageUser')->with('status', 'Gallery update Successfully');
    }


}
