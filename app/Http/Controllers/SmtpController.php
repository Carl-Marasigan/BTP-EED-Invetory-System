<?php

namespace App\Http\Controllers;

use App\Models\Smtp;
use Illuminate\Http\Request;

class SmtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Smtp::whereId(1)->first();
        return view ('smtp-config', compact('data'));
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
    public function store(Request $request, $id)
    {
        $data = array ();
        $data ['mailer']= $request->mailer;
        $data ['host']= $request->host;
        $data ['port']= $request->port;
        $data ['username']= $request->username;
        $data ['password']= $request->password;
        $data ['encryption']= $request->encryption;
        $data ['sender']= $request->sender;
        DB::table('smtps')->where('id',$id)->update($data);
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function show(Smtp $smtp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function edit(Smtp $smtp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smtp $smtp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smtp $smtp)
    {
        //
    }
}
