<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

	/**
	 * The database used by the model.
	 * @var string
	 */
    protected $table = 'questions';


    /**
     * The attributes that are mass asssignable.
     * @var array
     */
    protected $fillable = ['title', 'body', 'topic1', 'topic2', 'topic3'];

    /**
     * A question is owned by a user.
     * 
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
