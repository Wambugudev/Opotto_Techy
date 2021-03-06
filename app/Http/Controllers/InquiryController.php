<?php

namespace App\Http\Controllers;

use App\Inquiry;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryFormEmail;


class InquiryController extends Controller
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
    public function store(InquiryRequest $request)
    {


        if ($request->description==null) {
            Inquiry::create([
                'name' => $request->name,
                'email' => $request->email,
                'tellNo' =>$request->telephoneNumber,
                'description' =>'null',
                'service' => $request->service,
                'budget' => $request->budget
            ]);


            $request->description = 'No description';

            // Send to the email
            // Mail::to('wambugudev@gmail.com')->send(new InquiryFormEmail($request));

        } else {
            Inquiry::create([
                'name' => $request->name,
                'email' => $request->email,
                'tellNo' =>$request->telephoneNumber,
                'description' =>$request->description,
                'service' => $request->service,
                'budget' => $request->budget
            ]);

            // Send to the email
            // Mail::to('wambugudev@gmail.com')->send(new InquiryFormEmail($request));
        }

        return redirect(route('home'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }
}
