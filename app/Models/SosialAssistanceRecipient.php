<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SosialAssistanceRecipient extends Model
{
    use SoftDeletes, UUID;

    protected $fillable = [
        'sosial_assistance_id',
        'head_of_family_id',
        'amount',
        'reason',
        'bank',
        'account_number',
        'proof',
        'status',
    ];

    public function sosialAssistance()
    {
        return $this->belongsTo(SosialAssistance::class);
    }

    public function headOfFamily()
    {
        return $this->belongsTo(HeadOfFamily::class);
    }

}
