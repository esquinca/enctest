<?php

namespace App;
use App\Menu;
use App\Venue;
use Spatie\Permission\Traits\HasRoles; //<--Se añade la siguiente linea
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles; //<-Se añade el HasRoles

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function menus()
    {
      return $this->belongsToMany(Menu::class);
    }
    public function venues()
    {
      return $this->belongsToMany(Venue::class);
    }

}
