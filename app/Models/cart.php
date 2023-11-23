<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable = ['file_id','user_id','address','phone','status','price','method'];
    protected $table = 'carts';
    public $timestamps = false;
    // Mối quan hệ với bảng "files"
    public function file()
    {
        return $this->belongsTo(File::class, 'file_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
