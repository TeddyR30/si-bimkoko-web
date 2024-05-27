<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Konseli;
use App\Models\Konselor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;

class ProfileController extends Controller
{
    public function show()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();

        return view('profile.show',$data);


    }
}


