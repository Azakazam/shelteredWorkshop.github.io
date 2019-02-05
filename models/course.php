<?php
class course {

public $course_ID;
public $course_name;
public $course_desc;

  public function getCourseDetails()
    {
        return $this->course_name." ".$this->course_desc;
    }
}
?>