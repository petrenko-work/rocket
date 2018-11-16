<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InquiryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'phone' => 'required|max:30',
            'email' => 'email|max:100',
            'message' => 'max:200'
        ]);

        if (!$validator->fails()) {

            $inquiry = new Inquiry();
            $inquiry->name = $request->name;
            $inquiry->phone = $request->phone;
            $inquiry->email = $request->email;
            $inquiry->message = $request->message;
            $inquiry->save();

            return back()->with('success', true);
        } else
            return back()->with('error', $validator->messages()->first());
    }
}
