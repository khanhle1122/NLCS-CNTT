<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    public function showCart()
    {
        if (Auth::check()) {
           
                $userId = Auth::id(); 
                $files = DB::table('files')->where('user_id', $userId)->get();
                $costPerFile = 50000;
                $totalCost = count($files) * $costPerFile;
                return view('cart', ['files' => $files,'totalCost' => $totalCost]);                
        }
        else{
            return redirect('login');
        }
    
    }

    public function addToCart(Request $request)
    {
        // Xử lý thêm sản phẩm vào giỏ hàng
        // Lưu ý: Cần kiểm tra và xử lý dữ liệu đầu vào từ $request

        return redirect()->route('cart.show');
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

