<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class User
 * @package App\Models
 * @version August 18, 2021, 9:26 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $stripe_id
 * @property string $card_brand
 * @property string $card_last_four
 * @property string|\Carbon\Carbon $trial_ends_at
 */
class User extends Authenticatable
{
    use Notifiable;
    // use SoftDeletes;
    use Billable;
    public $table = 'users';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'stripe_id',
        'card_brand',
        'card_last_four',
        'trial_ends_at'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

  /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'stripe_id' => 'string',
        'card_brand' => 'string',
        'card_last_four' => 'string',
        'trial_ends_at' => 'datetime'
    ];
      /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'stripe_id' => 'nullable|string|max:255',
        'card_brand' => 'nullable|string|max:255',
        'card_last_four' => 'nullable|string|max:4',
        'trial_ends_at' => 'nullable'
    ];

}
