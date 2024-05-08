<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = 'booking';
    // protected $fillable = [
    //     'nama',
    //     'bidang', 
    //     'no_hp', 
    //     'tanggal', 
    //     'waktu_mulai', 
    //     'waktu_berakhir', 
    //     'keperluan'
    // ];
}
