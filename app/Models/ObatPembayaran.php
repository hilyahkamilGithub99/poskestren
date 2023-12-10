<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatPembayaran extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $fillable = [
        'pembayaran_id',
        'obat_id',
    ];

    public function pembayaran()
{
    return $this->belongsTo(Pembayaran::class);
}
}