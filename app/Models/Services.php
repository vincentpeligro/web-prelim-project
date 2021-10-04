<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Services
 * @package App\Models
 * @version September 30, 2021, 2:02 am UTC
 *
 * @property string $Email
 * @property string $Your_email
 */
class Services extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'services';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Email',
        'Your_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Email' => 'string',
        'Your_email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Email' => 'required|string|max:255',
        'Your_email' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
