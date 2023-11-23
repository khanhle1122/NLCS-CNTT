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
    public function showAdmin()
    {
        return view('admin.show');
    }

    public function checkFile(Request $request)
    {
        // Xử lý thêm sản phẩm vào giỏ hàng
        // Lưu ý: Cần kiểm tra và xử lý dữ liệu đầu vào từ $request
        $id = $request->input('id');
        $file = File::find($id);

        if ($file) {
            $file->update(['status' => File::STATUS_CHECK]);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }

        return view('admin.show');
    }
    public function checkCart(Request $request)
    {
        // Xử lý thêm sản phẩm vào giỏ hàng
        // Lưu ý: Cần kiểm tra và xử lý dữ liệu đầu vào từ $request
        $id = $request->input('id');
        $file = File::find($id);

        if ($file) {
            $file->update(['status' => File::STATUS_CHECK]);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }

        return view('admin.show');
    }
    
    public function AdminDashboard(){
        
        $files = DB::table('files')->get();
        $users = DB::table('users')->get();
        $carts = DB::table('carts')->get();
        // Trong controller khi truy vấn dữ liệu
        $files = File::with('user')->get();
        $carts = cart::with('user')->get();
        $carts = cart::with('file')->get();

        return view('admin.admin_dashboard',['files' => $files,'users' => $users,'carts' => $carts]);
    }

    
}
