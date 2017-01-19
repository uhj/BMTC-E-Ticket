<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\transaction;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function update(Request $request){
        $id = $request->get('id');
        DB::table('users')->where('id',$request->get('id'))
        ->update(['name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone_no'=>$request->get('phone'),
            'dob'=>$request->get('dob'),
            'gender'=>$request->get('radio')]);
        return redirect('/settings');
    }
    public function address(Request $request){
        $id=$request->get('id');
        DB::table('users')->where('id',Auth::user()->id)
        ->update(['name'=>$request->get('name'),
            'City'=>$request->get('city'),
            'State'=>$request->get('state'),
            'Address_line1'=>$request->get('Address1'),
            'Address_line2'=>$request->get('Address2')]);
        return redirect('/settings')->with('address','address');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->email != 'admin@admin.com'){
                $transactions=DB::table('transaction')
                ->where('email',Auth::user()->email)
                ->orderBy('created_at','desc')
                ->paginate(5);
                $roles=DB::table('user_roles')->get();
                return view('/home',['transactions'=>$transactions,'roles'=>$roles]);
            }else{
                $sum=DB::table('users')->sum('wallet_amt');
                return view('/home',['sum'=>$sum]);
            }
    }
    public function getAmount(Request $request){
        return view('transaction')->with(['amount'=>$amount=$request->get('amount')]);
    }
    public function postTransaction(Request $request){
        $amount=$request->get('amount');
        $balance=Auth::user()->wallet_amt;
        $total=$balance + $amount;
        $payment=New transaction;
        $payment->barcode_no=Auth::user()->barcode;
        $payment->user_name=Auth::user()->name;
        $payment->email=Auth::user()->email;
        $payment->transaction_no=FLOOR(Rand()*(999999999 - 10000000 + 1) + 10000000);
        $payment->amount=$request->get('amount');
        $payment->save();
        DB::table('users')->where('id','=',Auth::user()->id)
        ->update(['wallet_amt'=>$total]);
        return redirect('/home');
    }
    public function userSettings(){
        return view('settings');
    }
    
}
