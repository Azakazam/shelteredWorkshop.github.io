<?php
class client{
    public $client_ID;
    public $name;
    public $course_ID;
    public $email;
   public $gender;

  public function getFullName()
	{
		return $this->name;
	}
}
?>