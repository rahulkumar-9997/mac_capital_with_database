<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnlistedShareList extends Model
{
    protected $table = 'unlisted_share_lists';
    protected $fillable = ['for_date'];
    public function items()
    {
        return $this->hasMany(UnlistedShareItem::class);
    }
}
