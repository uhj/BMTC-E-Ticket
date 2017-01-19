<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Users;

class MailController extends Controller
{
    publuc function sendEmailTicket(Request $request, $id)
    {
    	$user = User::findOrfail($id);
    	Mail::send('generate' , ['user' => $user], function ($m) use ($user)
    	{
    		$m->from('ullas.sharma01@gmail.com', 'Namma BMTC');
    		$m->to($user->email, $user->name)->subject('Your Ticket')
    	});
    	return view('conductor');
    }
}
