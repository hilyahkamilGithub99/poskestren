<?php

namespace App\Models;

use App\Models\Obat;
use App\Models\User;
use App\Models\Santri;
use App\Models\ObatPembayaran;
use App\Models\SetelahPembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    public $incrementing = true;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    protected $guarded = [];
    // protected $fillable = ['santri_id2', 'weight', 'blood_presure', 'pulse', 'body_temprature', 'respiratory', 'complaints', 'physical_check', 'treatment', 'diagnoses', 'therapy', 'recomendation', 'nama_obat', 'santri_id', 'total_payment', 'total_purchase', 'user_id', 'paid_amount'];


    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function obats()
    {
        return $this->belongsToMany(Obat::class);
    }

    public function obat_pembayaran()
    {
        return $this->hasMany(ObatPembayaran::class);
    }
}