<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Contact;
use Mail;
class ContactController extends Controller
{
   
   public function contact()
{
return view('contact');
} 
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function contactPost(Request $request) 
   {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
    Contact::create($request->all());

    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'bodyMessage' => $request->get('message')
       ), function($message)
   {
       $message->from('eed_btp@outlook.com');
       $message->to('eed_btp@outlook.com', 'EED')->subject('EED Inventory System');
   });
    return back()->with('success', 'E-mail Sent Successfully!'); 
   }
}