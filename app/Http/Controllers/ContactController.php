<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function storeContact(Request $request)
     {
          
      $con= new Contact;
      $con->name=request("name");
      $con->email=request("email");
      $con->subject=request("subject");
      $con->message=request("message");
      $con->ticket='TIKT'.random_int(1000, 2500);
      $con->cstatus=1;
      $con->save();
      return redirect()->back()->with(['message' => 'Thanks for raising a ticket with us.Your ticket no is .' . ' ' .$con->ticket]);
         
     }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
