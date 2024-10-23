<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   // Menampilkan daftar pengguna dengan role super_admin
   public function index()
   {
        return view('user.dashboard');
   }
}
