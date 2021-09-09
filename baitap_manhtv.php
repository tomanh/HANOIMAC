<?php


class Employee
{
   protected $id;
   protected $fullName;
   protected $birthDay;
   protected $phone;
   protected $email;
   
   public function __construct($id, $fullName, $birthDay, $phone, $email)
   {
      $this->id = $id;
      $this->fullName = $fullName;
      $this->birthDay = $birthDay;
      $this->phone = $phone;
      $this->email = $email;
   }
     
   public function showInfo()
   {
      echo "$this->id";
      echo "<br>$this->fullName";
      echo "<br>$this->birthDay";
      echo "<br>$this->phone";
      echo "<br>$this->email";
   }
}

class Experience extends Employee
{
   protected $expInYear;
   protected $proSkill;

   public function __construct($id, $fullName, $birthDay, $phone, $email, $expInYear, $proSkill)
   {
      Parent::__construct($id, $fullName, $birthDay, $phone, $email);
      $this->expInYear = $expInYear;
      $this->proSkill = $proSkill;
   }

   public function showMe()
   {
      Parent::showInfo();
      echo "<br>$this->expInYear";
      echo "<br>$this->proSkill";
   }
}

class Fresher extends Employee
{
   protected $graduationDate;
   protected $graduationRank;
   protected $education;

   public function __construct($id, $fullName, $birthDay, $phone, $email, $graduationDate, $graduationRank, $education)
   {
      Parent::__construct($id, $fullName, $birthDay, $phone, $email);
      $this->graduationDate = $graduationDate;
      $this->graduationRank = $graduationRank;
      $this->education = $education;
   }

   public function showMe()
   {
      Parent::showInfo();
      echo "<br>$this->graduationDate";
      echo "<br>$this->graduationRank";
      echo "<br>$this->education";
   }
}

class Intern extends Employee
{
   protected $majors;
   protected $semester;
   protected $universityName;

   public function __construct($id, $fullName, $birthDay, $phone, $email, $majors, $semester, $universityName)
   {
      Parent::__construct($id, $fullName, $birthDay, $phone, $email);
      $this->majors = $majors;
      $this->semester = $semester;
      $this->universityName = $universityName;
   }

   public function showMe()
   {
      Parent::showInfo();
      echo "<br>$this->majors";
      echo "<br>$this->semester";
      echo "<br>$this->universityName";
   }
}

$intern = new Intern(1,'Tô Văn Mạnh','27/08/1998','0974xxxxxx','manhtv@smartosc.com','PHP','Học kỳ 2','HN-Aptech');

$intern->showMe();

?>
