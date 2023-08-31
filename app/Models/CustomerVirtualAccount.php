<?php

namespace App\Models;

use App\Models\CustomerClosing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerVirtualAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'virtual_account',
        
    ];

    public function customer():BelongsTo
    {
        return $this->belongsTo(CustomerClosing::class, 'customer_id');

    }
}
