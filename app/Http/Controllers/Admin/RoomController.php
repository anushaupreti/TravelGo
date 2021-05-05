<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Room;
use App\Admin\Hotel;
use App\Admin\Supplier\SupplierDetail;
use Auth;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SupplierDetail $supplierDetail)
    {
        if(Auth::guard('supplier')->check())
        {

         $hotel=Hotel::where('supplier_id','=',Auth::guard('supplier')->user()->id)->get();
         foreach($hotel as $h)
         {
         $room=Room::where('hotel_id','=',$h->id)->get();
         return view('admin.room.index',compact('room'));
         }

        }

        else{
             $room=Room::all();
              return view('admin.room.index',compact('room'));
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $facility=Facility::all();
        $hotel=Hotel::all();
        return view('admin.room.create',compact('facility','hotel'));
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
            "name"=>"required",
            'type'=>'required',
            "description"=>"required",
            "bed"=>"required",
            "featured"=>"required",
            "price"=>"required",
            'size'=>"required",
            "children"=>"required",
            "hotel"=>"required",
            "adult"=>"required",
            "extchildren"=>"required",
            "extadult"=>"required",
            "facility"=>"required",
            "per_day"=>"required"
        ]);
        
        $image=$request->featured;
        $featured_new_name =time().'.'.$image->getClientOriginalName();
        $image->move('uploads/rooms',$featured_new_name);
        $room=new Room;
        $room->roomname=$request->name;
        $room->type=$request->type;
        $room->description=$request->description;
        $room->bed=$request->bed;
        $room->price=$request->price;
        $room->day=$request->day;
        $room->children=$request->children;
        $room->hotel_id=$request->hotel;
        $room->size=$request->size;
        $room->extra_children=$request->extchildren;
        $room->extra_adult=$request->extadult;
        $room->adult=$request->adult;
        $room->per_day=$request->per_day;
        $room->image='uploads/rooms/'.$featured_new_name;
        $room->save();
        $room->facilities()->sync($request->facility);
        return redirect()->route('room.index');

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
    public function destroy($id)
    {
        //
    }
}
