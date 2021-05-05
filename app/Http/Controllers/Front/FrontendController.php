<?php

namespace App\Http\Controllers\Front;

use App\Admin\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Room;
use App\Admin\Category;
use App\Admin\Booking;
use Carbon\Carbon;
use App\packagemodel;
use Illuminate\Support\Facades\Auth;
use App\Admin\RoomManagement;
use App\Blog;

class FrontendController extends Controller
{
    public function index()
    {
        $hotel=Hotel::all();
        $category=Category::all();
     
        return view('front.index',compact('hotel','category'));
    }


     public function front()
    {
        $hotel=Hotel::all();
        $category=Category::all();
        $package=packagemodel::all();
        $blogs=Blog::all();
      
           
            return view('front.front',compact('hotel','category','package','blogs'));

        
       
    }

    public function about()
    {
        return view('front.about');
    }
    public function tour()
    {
        return view('front.tour');
    }
    public function destination()
    {
        return view('front.destination');
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function contact()
    {
        return view('front.contact');
    }







    public function bycategory(Request $request)
    {
        $cname=$request->input('category');
        dump($cname);
        $category=Category::where('name','=',$cname)->get();
        foreach($category as $c)
        {
           dd($c->hotels);
        }
        dd($category);
        return 'ok';
    }

    public function hotel_search(Request $request)
    {

        $this->validate($request,[
            "state"=>"required",
            "city"=>"required"

        ]);

        $h_checkin=$request->get('checkin');
        $h_checkout=$request->get('checkout');
        $h_children=$request->get('children');
        $h_adult=$request->get('adult');
        $city=$request->get('city');
        $state=$request->get('state');
        $category=$request->get('category');
        $location=$request->get('location');
        dump($location);
        $h_total_capacity=$h_children + $h_adult;
        $room=Hotel::where('location','like',$location.'%')->whereOr('state','=',$state)->get();
          return view('front.search.hotel_list',compact('room'));
    }

    public function locationsearch(Request $request)
      {
       $state=$request->input('data');
       $location=Hotel::where('state','=',$state)->get();
       return response()->json($location);
        }

        public function room_search(Request $request)
        {
            $r_checkin=$request->input('checkin');
            dump($r_checkin);
            $r_checkout=$request->input('checkout');
            dump($r_checkout);
            $hotel_id=$request->input('hotel_id');
            // dump($room_id);
            $findroom=Room::whereIn('hotel_id',$hotel_id)->pluck('id');
            dump($findroom);
            $roommgt=RoomManagement::whereIn('room_id',$findroom)->where('start','<=',$r_checkin)
            ->where('end','>=',$r_checkout)->where('status','=',1)
            ->get();
            dump($roommgt);
            return view('front.search.room_list',compact('roommgt'));
            // return response()->json($roommgt);
        }

    public function allrooms($id)
    {

        $room=Room::where('hotel_id','=',$id)->get();
        dump($room);
         $roommanagement=RoomManagement::whereIn('room_id',$room)->where('status','=',1)->get();
         dd($roommanagement);
        dump($room->count());
        if($room->count()==0)
        {
            return 'Hotel have no rooms';
        }
        else{
       return view('front.allrooms',compact('room'));
        }
    }

    public function apply(Request $request)
    {
        $id=$request->get('id');
        $room=Room::where('id','=',$id)->first();
        $day=$room->day;
        $noadult=$request->get('adult');
        $nochildren=$request->get('children');
        $checkin=$request->get('checkin');
        $checkout=$request->get('checkout');
        $price=$request->get('price');
        $per_day=$room->per_day;
        $start_date = \Carbon\Carbon::createFromFormat('Y-m-d', $checkin);
        $end_date = \Carbon\Carbon::createFromFormat('Y-m-d', $checkout);
        $different_days = $start_date->diffInDays($end_date);
        $sum_days=$different_days;
        if($sum_days >=30)
        {
          $msg='You book more than 30 days';
          return response()->json(['msg'=>$msg,'status'=>0]);
        }
        else{
        $check_extra_day=$different_days-$day;
        if($check_extra_day==0)
        {
         $adult=$room->extra_adult;
        $children=$room->extra_children;
        $aadult=$adult * (int)$noadult;
        $cchildren=$children * (int)$nochildren;
        $total_extra=(int)$aadult + (int)$cchildren;
        $total=$total_extra + $price;
        return response()->json($total);
        }
        else
        {
        $extra_day_charge=$per_day * $check_extra_day;
        $adult=$room->extra_adult;
        $children=$room->extra_children;
        $aadult=$adult * (int)$noadult;
        $cchildren=$children * (int)$nochildren;
        $total_extra=(int)$aadult + (int)$cchildren;
        $total=$total_extra + $price +$extra_day_charge;
        return response()->json($total);
        }
    }

        //   $this->validate($request,[
        //     "checkin"=>"required",
        //     "checkout"=>"required",

        // ]);
        //  $id=$request->input('id');
        //  $room=Room::where('id','=',$id)->first();
        //  $children=$room->extra_children;
        //  $adult=$room->extra_adult;
        //  $noadult=$request->input('adult');
        //  $per_day=100.0;
        //  $price=$request->input('price');
        //  $nochildren=$request->input('children');
        //  $checkin=$request->input('checkin');
        //  $checkout=$request->input('checkout');
        //  $roomcapacity=$request->input('capacity');
        //  $guestcount= (int)$nochildren + (int)$noadult;
        //  $totalguest=(int)$roomcapacity + $guestcount;
        //   if($checkin > $checkout)
        //  {
        //      dd('Please add the correct date Formate');
        //  }

        //   else{
        //  $start_date =\Carbon\Carbon::createFromFormat('Y-m-d', $checkin);
        //  $end_date =\Carbon\Carbon::createFromFormat('Y-m-d', $checkout);
        //  $different_days = $start_date->diffInDays($end_date);
        //  $remaining_days=$different_days - 2;
        //  $extraguest=(int)$totalguest-(int)$roomcapacity;
        //  if($remaining_days >= 2 ||$remaining_days==1|| $extraguest!=0)
        //  {
        //          $price= (int)$price + $remaining_days * $per_day;
        //           $children=$children * (int)$nochildren;
        //           $adult=$adult * (int)$noadult;
        //           $total=$children + $adult;
        //           $price=$price + (int)$total;
        //          return view('pay',compact('price','checkin','checkout'));
        //  }
        //  else{
        //      $price=(int)$price;
        //     return view('pay',compact('price','checkin','checkout'));
        //  }
        //  }
        // dd($roomcapacity);
    }
    public function confirm(Request $request)
    {
        $checkin=$request->checkin;
        $checkout=$request->checkout;
        $room_id=$request->id;
        $room_name=Room::where('id','=',$room_id)->first();
        $guest_id=Auth::user()->id;
        $booking=new Booking();
        $booking->guest_id=$guest_id;
        $booking->check_in=$checkin;
        $booking->check_out=$checkout;
        $booking->room_name=$room_name->roomname;
        $booking->save();
        return redirect()->back()->with('alert','ok');
    }
    public function book($id)
    {
        $room=Room::find($id);
        return view('front.book.book',compact('room'));
    }

    public function package(Request $request,$id)
    {
        
      $hotel=Hotel::where('package_id','=',$id)->paginate(1);
     return view('front.packagelist',compact('hotel'));
    }

    public function photel(Request $request,$id)
    {
        $hotel=Hotel::where('package_id','=',$id)->paginate(1);
        return view('front.photel',compact('hotel'));
    }

    public function room(Request $request, $id)
    {
        $room=Room::where('hotel_id','=',$id)->get();
        return view('front.room',compact('room'));
    }
}
