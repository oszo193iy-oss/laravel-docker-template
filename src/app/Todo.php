<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected $fillable = [
        'content',
    ];
    // contentはfillメソッドで流し込んでokという宣言
}