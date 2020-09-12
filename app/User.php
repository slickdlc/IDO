<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'iduser';
    public $timestamps = false;
   // public $remember_token=false;
    
    protected $fillable = ['user','password'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function hasRole($role){
        $roles=DB::table('users')
        ->join('user_perfil','user_perfil.iduser','users.iduser')
        ->join('perfil','perfil.idperfil','=','user_perfil.idperfil')
        ->where('users.iduser',$this->iduser)
        ->where('user_perfil.estado',1)
        ->select('perfil.perfil')
        ->get();
        foreach ($roles as &$roleuser) {
            if($roleuser->perfil==$role){
                return true;
            } 
        }
        return false;
    }
}