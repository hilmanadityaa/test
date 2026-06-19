<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Development extends Model
{
    use SoftDeletes, UUID;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'amount',
        'status',
    ];

    public function DevelopmentApplicants()
    {
        return $this->hasMany(DevelopmentApplicant::class);
    }
}
