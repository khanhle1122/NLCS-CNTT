<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class filecontroller extends Controller
{
    public function showForm()
    {
        return view('upload');
    }
   
    public function uploadFile(Request $request)
    {         
    // Kiểm tra xem người dùng có đăng nhập hay không
    if (auth()->check()) {
        // Xử lý tải lên tại đây
        $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg,pdf,docx',
        ]);

        if ($request->file('file')->isValid()) {
            
            $file = $request->file('file');
            $path = $file->store('update', 'public');

            // Lấy giá trị từ request
            $quantity = $request->input('quantity');
            $kichthuc = $request->input('kichthuoc');

            // Lưu thông tin file vào cơ sở dữ liệu
            $fileRecord = File::create([
                'user_id' => auth()->id(),
                'name' => $file->getClientOriginalName(),
                'path' => $path,
                'quantity' => $quantity,
                'kichthuoc' => $kichthuc,
                // 'price'=>$price,
            ]);
            
            return redirect('cart'); 
        }

        return redirect()->back()->with('error', 'Invalid file or file upload failed.');


        
    } else {
        return redirect('login'); // Nếu không đăng nhập, điều hướng đến trang đăng nhập.
    }
        
    }


    public function download($filepath)
    {
        $filePath = storage_path($file->path);


        if (file_exists($filePath)) {
            return response()->download($filePath, $file->path);
        } else {
            abort(404, 'File not found');
        }
    }

    public function editFile($id){
        $file = File::find($id);
        if($file){


            
            return redirect()->back()->with('success', 'File deleted successfully.');
        }else {
            return redirect()->back()->with('error', 'File not found.');
        }
    } 
    public function deleteFile($id)
    {
        $file = File::find($id);

        if ($file) {
            // Xóa file từ storage
            Storage::delete('public/update' . $file->path);

            // Xóa bản ghi từ bảng "files"
            $file->delete();

            return redirect()->back()->with('success', 'File deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }

}
