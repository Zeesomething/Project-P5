<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['id','kaprog','nama_jurusan', 'sampul'];

    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->sampul && file_exists(public_path('images/jurusan' . $this->sampul))) {
            return unlink(public_path('images/jurusan' . $this->sampul));
        }
    }
}
