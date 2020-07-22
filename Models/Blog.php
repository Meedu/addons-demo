<?php


namespace Addons\AddonsDemo\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $table = 'addons_demo_blogs';

    protected $fillable = [
        'title', 'content',
    ];

}