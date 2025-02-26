<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'product_id',
        'customer_name',
        'order_date',
        'status',
        'comment',
    ];

    protected $casts = [
        'order_date' => 'timestamp',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
