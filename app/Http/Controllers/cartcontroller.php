<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function showCart()
    {
        if (Auth::check()) {
           

                $userId = Auth::id(); 
                $files = DB::table('files')->where('user_id', $userId)->where('status', 'up')->get();
                $costPerFile = 50000;
                $totalCost = count($files) * $costPerFile;
                return view('cart', ['files' => $files,'totalCost' => $totalCost]);    
                   
    }
    else{
        return redirect('login');
    }

    
    }

    public function upToCart(Request $request){
        return redirect()->route('welcome');
    }


    public function addToCart(Request $request)
    {
        // Xử lý thêm sản phẩm vào giỏ hàng
        // Lưu ý: Cần kiểm tra và xử lý dữ liệu đầu vào từ $request
        
        $dataToStore = $request->all();
        session(['cart_data' => $dataToStore]);

        // Lưu dữ liệu vào CSDL
        Cart::create($dataToStore);
            
        // Xoá dữ liệu session sau khi lưu vào CSDL
        session()->forget('cart_data');

        // Chuyển hướng đến trang cart
        
        $id = $request->input('file_id');
        $file = File::find($id);

        if ($file) {
            $file->update(['status' => File::STATUS_LOAD]);
            Session::flash('success', 'Đơn hàng đang trên đường giao đến bạn');
        } else {
            Session::flash('error', 'File not found.');
        }
    
        return redirect()->route('welcome');
    }

    

    public function removeFromCart(Request $request)
    {
        $id = $request->input('id');
        $file = File::find($id);
    
        if ($file) {
            $file->delete();

        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    
        return redirect()->route('cart.show');
    }

}

