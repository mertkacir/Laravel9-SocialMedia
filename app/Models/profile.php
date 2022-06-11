<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class profile extends Model {

    protected $fillable = ['city', 'country', 'about', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }




}
