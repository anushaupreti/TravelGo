<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Hotel;
use App\Admin\Category;
use App\packagemodel;

class HotelController extends Controller
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
    public function create()
    {
         $category=Category::all();
         $package=packagemodel::all();
        return view('admin.hotel.create',compact('category','package'));
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
            "type"=>"required",
            "city"=>"required",
            "state"=>"required",
            "package"=>"required",
            "location"=>"required",
            "featured"=>"required"
        ]);

   $image=$request->featured;
   $image_new_name=time().'.'.$image->getclientOriginalname();
   $image->move('uploads/hotels/',$image_new_name);

       $hotel=new Hotel();
       $hotel->name=$request->name;
       $hotel->type=$request->type;
       $hotel->city=$request->city;
       $hotel->state=$request->state;
       $hotel->package_id=$request->package;
       $hotel->location=$request->location;
       $hotel->featured='uploads/hotels/'.$image_new_name;
       $hotel->save();
       $hotel->categories()->sync($request->hotel);
        return redirect()->route('hotel.index');
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
