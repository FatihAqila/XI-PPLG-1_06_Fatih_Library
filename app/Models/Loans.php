<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;
    protected $fillable = ['loan_id', 'user_id', 'book_id', 'tanggal_pinjam', 'tanggal_kembali', 'status'];
}
