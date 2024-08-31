<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
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
    public function createClient(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'project'=>'required',
            'page_number'=>'required',
        ]);

        $client = new Client;
        $client->name = $request->name; 
        $client->phone = $request->phone; 
        $client->email = $request->email; 
        $client->address = $request->address; 
        $client->project = $request->project; 
        $client->facebook_review = $request->facebook_review; 
        $client->google_review = $request->google_review; 
        $client->page_number = $request->page_number; 
    
        $client->save();

        return redirect()->back()->with('success', 'Your post has been inserted successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */


    // edit data
    public function editClient($id){
        $clientInfo = Client::findOrFail($id);
        return view('edit', ['clientInfoSingle' => $clientInfo]);
        $clientInfo->save();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'project'=>'required',
            'page_number'=>'required',
        ]);

        $updateClientInfo =  Client::findOrFail($id);
        
        $updateClientInfo->name = $request->name; 
        $updateClientInfo->phone = $request->phone; 
        $updateClientInfo->email = $request->email; 
        $updateClientInfo->address = $request->address; 
        $updateClientInfo->project = $request->project; 
        $updateClientInfo->facebook_review = $request->facebook_review; 
        $updateClientInfo->google_review = $request->google_review; 
        $updateClientInfo->page_number = $request->page_number; 
    
        $updateClientInfo->save();

        return redirect()->back()->with('success', 'Your post has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
