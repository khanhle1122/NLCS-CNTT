<?php

namespace App\Http\Controllers;

use DB;
use App\Models\File;
use App\Models\cart;
use App\Models\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function AdminDashboard(){
        
        $files = DB::table('files')->get();
        $users = DB::table('users')->get();

        // Trong controller khi truy vấn dữ liệu
        $files = File::with('user')->get();

        return view('admin.admin_dashboard',['files' => $files,'users' => $users]);
    }

    
}
