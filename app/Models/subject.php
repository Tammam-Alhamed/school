<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class subject extends Model
{
    use HasFactory;
    public $guarded=['id','created_at','updated_at'];
 


    public function classes(): BelongsTo
    {
        return $this->belongsTo(classes::class,'class_id');
    }
}
