<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Admin\RoomManagement;
use App\Admin\Room;

class RoommanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $roomid=Input::get('id');
      $room=Room::where('id','=',$roomid)->first();
        return view('admin.roommanagement.create',compact('roomid','room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request,[
        'start'=>"required",
        "end"=>"required",
        "status"=>"required"
    ]);

    $oldid=$request->roomid;
    $roommgt=RoomManagement::where('room_id','=',$oldid)->first();
    if($roommgt==Null)
    {
    $roommgt=new RoomManagement();
    $roommgt->start=$request->start;
    $roommgt->end=$request->end;
    $roommgt->status=$request->status;
    $roommgt->room_id=$request->roomid;
    $roommgt->save();
     return redirect()->route('room.index');
    }
    else{
       $roommgt->start=$request->start;
       $roommgt->end=$request->end;
       $roommgt->status=$request->status;
       $roommgt->room_id=$request->roomid;
       $roommgt->save();
        return redirect()->route('room.index');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    public function destroy($id)
    {
        //
    }
}
