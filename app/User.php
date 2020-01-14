<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

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
    
    public function post(){
        
    $this->hasMany(Post::class);
        
        
    }
    
    public function publishpost(Post $post){

     $this->post()->save($post);
        
    }
    
       public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
    
}
