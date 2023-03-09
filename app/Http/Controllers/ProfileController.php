<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile_data['user'] =  Auth::user();
        if($user->usertype == 'freelancer'){
            $freelancer = Freelancer::where('user_id', $user->id)->first();
            $profile_data['freelancer'] = $freelancer;
        }
        return view('profile', $profile_data);
    }
    public function viewProfile($id)
    {
        $user = User::findOrfail($id);
        return view('profile',['user' => $user]);
    }
}
