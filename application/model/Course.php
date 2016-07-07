<?php
namespace app\model;
use think\Model;
/**
 * 课程
 */
class Course extends Model
{
    public function Klasses()
    {
        return $this->belongsToMany('Klass',  config('database.prefix') . 'klass_course');
    }
}