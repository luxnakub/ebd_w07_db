<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Player extends Model {
    protected $fillable = ['genre_id', 'player_name', 'email', 'role_type', 'team_or_channel', 'is_active'];
}