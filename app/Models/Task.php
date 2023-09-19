<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $casts=[
        'is_done' => 'boolean',
    ];

   /* protected $hidden = [
        'updated_at',
    ];*/

    protected $fillable= ['title','is_done','user_id'];

    public function create():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
