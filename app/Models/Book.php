<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 14.05.2016
 * Time: 13:52
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'book';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isbn', 'author', 'title', 'published_at', 'rating'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
}