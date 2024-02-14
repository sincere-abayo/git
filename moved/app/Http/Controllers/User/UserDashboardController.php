<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserDashboardController extends Controller
{
    public function index()
    {
return view('user.dashboard');
    }
     public function referral()
    {
return view('user.referral');
    }
     public function showTask()
    {
return view('user.task');
    }
    public function payments()
    {   
        return view('user.payments');
    }
   
    }