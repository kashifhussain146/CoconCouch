<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table = 'question';
   protected $fillable = ['question', 'collegeid', 'coursesid', 'score', 'visiblity', 'type', 'startdatetime', 'enddatetime', 'num_words', 'answer', 'price', 'subject_category', 'subject', 'file_name', 'answer_file', 'addedby', 'answerstatus', 'status', 'views_count', 'added_date'];

   public function category(){
        return $this->belongsTo(SubjectCategory::class,'subject_category','id');
   }

   public function subjects(){
      return $this->belongsTo(Subject::class,'subject','id');
   }

   public function scopeActivated($query){
      return  $query->where('status','Y');
   }
}
