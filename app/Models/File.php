<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $table = 'files';
    protected $fillable = ['user_id','name', 'path','quantity','kichthuoc','status'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public const STATUS_UP = 'up';
    public const STATUS_LOAD = 'load';
    public const STATUS_CHECK = 'check';
}
