<?php

namespace App;

use App\Mail\ReceipeStored;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;


class Receipe extends Model
{
    //
    protected $fillable = ['name','ingredients','category','author_id'];

    protected static function boot(){
    	parent::boot();

    	static::created(function($receipe){
    		session()->flash("message","Receipe created successfully!!");

        	Mail::to('kyawkyawlin19954@gmail.com')->send(new ReceipeStored($receipe));
    	});
    }

    public function categories()
    {
        return $this->belongsto(Category::class,'category');
    }

}
