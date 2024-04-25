<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function Admin() {
        return view('Admin.pages.dashboard');
    }
    public function Konselor() {
        return view('Konselor.pages.dashboard');
    }
    public function Konseli() {

        $userCount = User::count();
        // $postCount = Post::count();
        // $peminjamanCount = Peminjaman::count();

        return view('Konseli.pages.dashboard', ['user_count' => $userCount]);

    }
}
