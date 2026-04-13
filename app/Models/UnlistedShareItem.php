<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnlistedShareItem extends Model
{
    protected $table = 'unlisted_share_items';
    protected $fillable = [
        'unlisted_share_list_id',
        'script_name',
        'face_value',
        'landing_price'
    ];
    public function list()
    {
        return $this->belongsTo(UnlistedShareList::class, 'unlisted_share_list_id');
    }
}
