<?php

namespace olee\sociallink\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;
    protected $table = "metal_buttons";
    protected $fillable = ['title ','description'];
}
