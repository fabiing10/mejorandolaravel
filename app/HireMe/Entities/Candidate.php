<?php namespace HireMe\Entities;

class Candidate extends \Eloquent {
	protected $fillable = [];

    public function user(){
        return $this->hasOne('HireMe\Entities\User', 'id', 'id');
    }

    public function category(){
        return $this->belongsTo('HireMe\Entities\Category');
    }
}