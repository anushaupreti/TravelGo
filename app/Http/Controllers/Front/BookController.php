<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Admin\Room;
use App\Admin\RoomManagement;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Front\CutomerBook;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function check(Request $request)
    {
         $data=$request->get('adult');
        // Edited
    //    $checkin=$request->input('checkin');
    //    $checkout=$request->input('checkout');
    //    $capacity=$request->input('capacity');
    //    $children=$request->input('children');
    //    $adult=$request->input('adult');
    //     $availableroom=RoomManagement::where('start','<',$checkout)
    //     ->whereOr('end','>',$checkout)->whereAnd('status','=',1)
    //    ->get();
    // Edit for ajax request

    //    $room=DB::table('rooms')
    //         ->join('room_management', 'rooms.id', '=', 'room_management.room_id')
    //         ->where($availableroom)
    //         ->get();
        // foreach($availableroom as $av){
        //     dd($av->rooms->id);
        // }
        return response()->json($data);
        return view('pay',compact('availableroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Room $room)
    {
    //     $client=New client();
    // $reponse=


        $this->validate($request,[
            "checkin"=>"required",
            "checkout"=>"required",

        ]);
        $id=$request->id;
        $allroom=$room->find($id);
         $children=$allroom->extra_children;
         $adult=$allroom->extra_adult;
         $per_day=50;
         $nochildren=$request->input('children');
         $price=$request->input('price');
         $noadult=$request->input('adult');
         $checkin=$request->input('checkin');
         $checkout=$request->input('checkout');
         $roomcapacity=$request->input('capacity');
         $guestcount= (int)$nochildren + (int)$noadult;
         $totalguest=(int)$roomcapacity + $guestcount;
         $c=CutomerBook::whereNotIn('checkin', [$checkin, $checkout])->get();

         if($c==Null)
         {
             return 'room not available';
         }
         else{
         if($checkin > $checkout)
         {
             dd('Please add the correct date Formate');
         }
        else{
         $start_date = \Carbon\Carbon::createFromFormat('Y-m-d', $checkin);
         $end_date = \Carbon\Carbon::createFromFormat('Y-m-d', $checkout);
         $different_days = $start_date->diffInDays($end_date);
         $remaining_days=$different_days - 2;
         $extraguest=(int)$totalguest-(int)$roomcapacity;
         if($remaining_days >= 2 ||$remaining_days==1|| $extraguest!=0)
         {
                $price= (int)$price + $remaining_days * $per_day;
                  $children=$children * (int)$nochildren;
                  $adult=$adult * (int)$noadult;
                  $total=$children + $adult;
                  $price=$price + (int)$total;
                 return view('pay',compact('price','checkin','checkout','id'));



         }
         else{
             $price=(int)$price;
            return view('pay',compact('price','checkin','checkout','id'));
         }
         }
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
        $room=Room::where('hotel_id','=',$id)->get();
        dump($room);
        return view('book',compact('room'));
    }

    public function confirmbook(Request $request)
    {
       $this->validate($request,[
           "fullname"=>"required",
           "address"=>"required",
           "phone"=>"required",
           "arrival"=>"required"

       ]);

       $book=CutomerBook::create([
           "room_id"=>$request->room_id,
           "fullname"=>$request->fullname,
           "address"=>$request->address,
           "phone"=>$request->phone,
           "arrival"=>$request->arrival,
           "checkin"=>$request->checkin,
           "checkout"=>$request->checkout,

       ]);

      return view("welcome");






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
