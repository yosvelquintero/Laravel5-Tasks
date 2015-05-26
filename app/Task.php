<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];
}
