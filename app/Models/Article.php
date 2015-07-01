<?php
/**
 * Created by PhpStorm.
 * User: renaud
 * Date: 30/06/15
 * Time: 17:07
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content'];

    protected $table = 'articles';

    public $timestamps = false;
}