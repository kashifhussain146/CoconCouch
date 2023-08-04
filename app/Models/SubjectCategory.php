<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table = 'subject_category';
     protected $fillable = ['category_name', 'category_code', 'category_dec', 'status'];

     public function scopeActivated($query){
        return  $query->where('status','Y');
     }
}
