<?php

namespace App\Http\Controllers;

use App\Mail\InquiryReceived;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function page()
    {
        return view('index');
    }

    public function warrantyRequest()
    {
        return view('requests.warranty');
    }

    public function serviceRequest()
    {
        return view('requests.service');
    }

    public function create(Request $request)
    {
        
        $request->validate([
            'userName'         => 'required|string',
            'companyName'      => 'nullable|string',
            'phoneNumber'      => 'required',
            'gstNumber'        => 'nullable',
            'occupation'       => 'required|in:D,EPC,EU',
            'phase'            => 'required|in:SP,TP',
            'quantityRange'    => 'required',
        ]);

        $user = User::create([
            'name' => $request->userName,
            'company_name' => $request->companyName,
            'phone_number' => $request->phoneNumber,
            'gst_number' => $request->gstNumber,
            'occupation_type' => $request->occupation,
            'phase' => $request->phase,
            'quantity_range' => $request->quantityRange
        ]);

        Mail::to(env('ADMIN_MAIL_ADDRESS'))->send(new InquiryReceived($user));

        return redirect()->back();
    }
}
