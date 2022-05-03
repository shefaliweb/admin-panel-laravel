<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class Eventcontroller extends Controller
{

    public function addevent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->move('uploads/');
        $event = new Event;
        $event->name = $request->name;
        $event->image = $path;
        $event->save();
        return redirect('/ManageEvent')->with('status', 'Event Added Successfully');
    }


    function show(){
        $data=Event::all();
        
        if ($data->isEmpty()) {
            return view('Admin/table', ['members'=>$data])->withData(null);
        }else{
            return view('Admin/table',['members'=>$data]);
        }
    }

    function delete($id){
      $data=Event::find($id);
      $data->delete();

      return redirect('ManageUser')->with('status', 'Gallery Deleted Successfully');
      // return redirect('ManageUser');

  }

  function showdata($id){

      $data=Event::find($id);
      return view('Admin/edit',['data'=>$data]);

  }



       public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->move('uploads/');
        $data=Event::find($request->id);
        $data->name = $request->name;
        $data->image = $path;
        $data->save();
        return redirect('/ManageUser')->with('status', 'Gallery update Successfully');
    }


}
