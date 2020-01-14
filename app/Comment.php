<?php

namespace App;



class Comment extends Model
{
    
    //this goes  to return post where is the comment
    public function post(){
        
        return $this->belongsTo(Post::class);
        
        
    }
    
       //this goes  to return user where is the comment
    public function user(){
        
        return $this->belongsTo(User::class);
        
        
    }

}