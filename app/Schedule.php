<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable = [
        'user_id', 'local', 'go_at',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function saveSchedule($data){
            $this->user_id = auth()->user()->id;
            $this->local = $data['local'];
            $this->go_at = $data['go_at'];
            $this->save();
            return true;
    }
}
