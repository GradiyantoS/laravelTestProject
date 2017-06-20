<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function getProjectPatternAttribute($value){
        $id =  sprintf('%03d',$this->cultivation_id);
        $day = date("d",strtotime($this->start_at));
        $month = date("m",strtotime($this->start_at));
        $year = date("y",strtotime($this->start_at));
        $no = $this->project_no;
        $newpattern='P'.''.$id.''.$day.''.$month.''.$year.''.$no;
        return $newpattern;
    }

    public function cultivation()
    {
        return $this->hasMany('App\Cultivation');
    }


}
