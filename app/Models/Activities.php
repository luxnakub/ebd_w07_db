<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    protected $table = 'activities';
    protected $fillable = ['activity_name', 'activity_date', 'community_id'];

    public function community()
    {
        return $this->belongsTo(Community::class, 'community_id');
    }
}