<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $primaryKey = 'id';  
    public $incrementing = false;  
    protected $keyType = 'string';  
    protected $fillable = ['product_name', 'quantity', 'due_date', 'status', 'operator_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($workOrder) {
            $date = date('Ymd');
            $lastOrder = self::where('id', 'LIKE', "WO-$date-%")->latest()->first();

            // nomor terakhir lalu tambah 1
            $number = $lastOrder ? (intval(substr($lastOrder->id, -3)) + 1) : 1;
            $workOrder->id = sprintf("WO-%s-%03d", $date, $number);
        });
    }

    // Relasi ke tabel users
    public function operator()
    {
        return $this->belongsTo(User::class, 'operator_id');
    }
}
