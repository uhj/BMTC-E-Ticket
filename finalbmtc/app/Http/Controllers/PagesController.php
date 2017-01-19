<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Route;
use App\Post;
use DB;
use bus_stops;
use App\transaction;
use Mail;
use Session;

class PagesController extends Controller {
	public function getIndex() {
		return view('Namma_BMTC');
	}
    public function newIndex() {
        return view('Namma_BMTC');
    }
	public function getWelcome() {
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	//public function getAbout() {
	//	return view('pages.about');
	//}

	public function postContact(Request $request) {
		$this->validate($request, [
            'subject' => 'min:3',
            'email' => 'required|email',
            'message' => 'min:5'
            ]);

        $data = array(
            'subject' => $request->subject,
            'email' => $request->email,
            'bodymessage' => $request->message
            );

        Mail::send('emails.contact', $data, function($message) use($data){
            $message->from($data['email']);
            $message->to('ullas.sharma01@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was sent!');

        return redirect()->route('login');
    }
   public function conductor(Request $request)
    {
    		$busnumber=$request->get('busnumber');
    		$routes=DB::table('bus_stops')->where('route_no',$request->get('busnumber'))->get();
    		$stops=DB::table('bus_stops')->distinct()->select('route_no')->get();
    		$users=DB::table('users')->where('barcode',$request->get('barcode'))->get();
    		return view('conductor',['stops'=>$stops,'routes'=>$routes,'users'=>$users,'busnumber'=>$busnumber]);
    }
    Public function cbusnumber(){
    	$stops=DB::table('bus_stops')->distinct()->select('route_no')->get();
    	return view('cbusnumber',['stops'=>$stops]);
    }
    public function generateTicket(Request $request){
        $email=$request->get('email');
    	$from = $request->get('from');
    	$to= $request->get('to');
        $busnumber=$request->get('busnumber');
    	$barcode = $request->get('barcode');
    	$amount = $request->get('amount');
    	$numOfPerson = $request->get('number');
    	$fare = $to - $from;
    	if($fare<0){
    		$fare = $fare * (-1);
    	}
    	switch($fare){
    		case 1:
    		case 2:
    		case 3:
    			$cost = DB::table('fare')->where('stages',1)->pluck('rate');
    			break;
    		case 4:
    		case 5:
    		case 6:
    			$cost = DB::table('fare')->where('stages',2)->pluck('rate');
    			break;
    		case 7:
    		case 8:
    		case 9:
    			$cost = DB::table('fare')->where('stages',3)->pluck('rate');
    			break;
    		case 10:
    		case 11:
    		case 12:
    			$cost = DB::table('fare')->where('stages',4)->pluck('rate');
    			break;
    		case 13:
    		case 14:
    		case 15:
    			$cost = DB::table('fare')->where('stages',5)->pluck('rate');
    			break;
    		case 16:
    		case 17:
    		case 18:
    			$cost = DB::table('fare')->where('stages',6)->pluck('rate');
    			break;    			    			    			
    		case 19:
    		case 20:
    		case 21:
    			$cost = DB::table('fare')->where('stages',7)->pluck('rate');
    			break;
    	}
    	$total = $cost['0'] * $numOfPerson;
        $balance = DB::table('users')->where('barcode',$barcode)->pluck('wallet_amt');
        if($balance[0]<$total){
            return redirect()->action('PagesController@conductor',['busnumber'=>$busnumber])
        ->with('success','Ticket generation failed! Recharge your wallet.');
        }
        DB::table('users')->where('barcode',$barcode)->decrement('wallet_amt',$total);
        $payment=New transaction;
        $payment->barcode_no=$barcode;
        $payment->user_name=$request->get('name');
        $payment->email=$request->get('email');
        $payment->transaction_no=FLOOR(Rand()*(999999999 - 10000000 + 1) + 10000000);
        $payment->amount=$total;
        $payment->source=$from;
        $payment->destination=$to;
        $payment->save();
        $balance=DB::table('users')->where('barcode',$barcode)->pluck('wallet_amt');
        
        /*return view('conductor',['total'=>$total,
            'numOfPerson'=>$numOfPerson,
            'from'=>$from,'to'=>$to,
            'balance'=>$balance['0']]);*/
        return redirect()->action('PagesController@conductor',['busnumber'=>$busnumber])
        ->with('success','Ticket generated');
        /*$data1 = array(
            'email' => $email,
            'total' => $total,
            'numOfPerson'=> $numOfPerson,
            'source'=> $from,
            'destination'=> $to,
            'balance'=> $balance['0']
            );

        Mail::send('emails.tickets', $data1, function($message) use($data1){
            $message->from('ullas.sharma01@gmail.com');
            $message->to($data1['email']);
            $message->source($data1['source']);
            $message->destination($data1['destination']);
            $message->numOfPerson($data1['numOfPerson']);
            $message->total($data1['total']);
            $message->balance($data1['balance']);
        Session::flash('success', 'Ticket Was generated');
        return redirect()->action('PagesController@conductor',['busnumber'=>$busnumber]);
        });*/
    }
}
