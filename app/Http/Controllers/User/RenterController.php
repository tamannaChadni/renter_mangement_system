<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Renter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RenterController extends Controller
{
    public function index(){
        return view('user.renter');
    }
    public function store(Request $request){

        $rules = [
            'user_id' => 'required',
            'renter_name' => 'required',
            'phn_number' => 'required',
            'floor' => 'required',
            'flat_number' => 'required',
            'NID' => 'required',
            'advance_amount' => 'required',
        ];
        $data = Renter::created($request->all(),$rules);

        if ($data) {
            return Response::json([
                'status' => true,
                'message' => 'Successfully save all information of renter!'
            ]);
        }
        else {
            return Response::json([
                'status' => false,
                'message' => 'Please fix the following errors!'
            ]);

        }

    }
}
