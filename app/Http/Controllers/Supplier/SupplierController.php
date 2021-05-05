<?php

namespace App\Http\Controllers\Supplier;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Supplier\Supplier;
use App\Admin\Supplier\SupplierDetail;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier=SupplierDetail::Where('action','=',0)->get();
        return view('admin.supplier.index',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.supplier.create');
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
          "email"=>"required",
          "address"=>"required",
          "phone"=>'required',
          "password"=>"required"

      ]);
      $supplier=SupplierDetail::create([
          "fullname"=>$request->name,
          "email"=>$request->email,
          "address"=>$request->address,
          "phone"=>$request->phone,
          "password"=>bcrypt($request->password)
      ]);

      return redirect()->back();
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
        $supplier=SupplierDetail::find($id);
        return view('admin.supplier.edit',compact('supplier'));
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
        $this->validate($request,[
            'status'=>"required",
        ]);

        $supplier=SupplierDetail::find($id);
        $supplier->status=$request->status;
        $supplier->save();
        return redirect()->back();
    }

    public function on($id)
    {
     $supplier=SupplierDetail::find($id);
     $supplier->status=1;
     $supplier->save();
      return redirect()->route('supplier.index');
    }
     public function off($id)
    {
     $supplier=SupplierDetail::find($id);
     $supplier->status=0;
     $supplier->save();
      return redirect()->route('supplier.index');
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

    public function login()
    {
        return view('front.supplier.login');
    }
    public function logout(Request $request)
    {
           Auth::guard('supplier')->logout();
       return redirect()->route('supplier.login');
    }


    public function active()
    {
        $active_supplier=SupplierDetail::where('status','=',1)->get();
        return view('admin.supplier.active',compact('active_supplier'));
    }

    public function login_check(Request $request)
    {

         $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if(Auth::guard('supplier')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            if(!Auth::guard('supplier')->user()->status==1)
             {
            Auth::logout();
            return redirect()->route('supplier.login')->withErrors(['Your account is inactive']);
             }
        else{
             return redirect()->intended('admin/dashboard');
        }

        }
               return redirect()->route('supplier.login')->with('error', 'Oppes! You have entered invalid credentials');


    }
}
