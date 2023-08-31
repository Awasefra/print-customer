<?php

namespace App\Models;

use App\Models\CustomerVirtualAccount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerClosing extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'no_tlpn',
        'status_id',
        'metode_bertemu_id'
    ];
    public function customer():BelongsTo
    {
        return $this->belongsTo(CustomerVirtualAccount::class, 'id');

    }
}
