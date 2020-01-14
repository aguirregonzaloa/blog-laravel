<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Post extends Model
{

    //return all comments on a post
        public function comments(){
        
        return $this->hasMany(Comment::class);
        
    }
    
         // return user where is the comment
    public function user(){
        
        return $this->belongsTo(User::class);
        
        
    }
    
    //Create a filter to use as an archives per month and year
    public function scopeFilter($query,$filter){
    
        //if filter is empty show all posts
        if(empty($filter))
            return ;
        
        //if filter injected month and year
        //show only those posts is corresponded to each month and year
        if($month = $filter['month']){
            
            $query->whereMonth('created_at', Carbon::parse($month)->month);
                
        }
            
        if($year = $filter['year']){
            
            $query->whereYear('created_at',$year); 
                
        }
        //---------------------------------------//
        
    }
    //function using in AppServiceProvider()->boot()
    //allows to show the Archives sidebar
    public static function archives(){
    // return Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
    //     ->groupBy('year','month')
    //     ->orderByRaw('min(created_at) desc')
    //     ->get()->toArray();

         return static::selectRaw("date_part('year', created_at) as year,to_char((created_at), 'Month') as month, count(*) as published")
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
        // return Post::all();
    }
    
    
}