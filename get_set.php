<?php
class Employee
{
   protected $id;
   protected $fullName;
   protected $birthDay;
   protected $phone;
   protected $email;
   
   public function setID($id)
   {
      $this->id = $id;
   }
     
   public function getID()
   {
      return $this->id;
   }

   public function setFullName($fullName)
   {
      $this->fullName = $fullName;
   }
     
   public function getFullName()
   {
      return $this->fullName;
   }

   public function setBirthDay($birthDay)
   {
      $this->birthDay = $birthDay;
   }
     
   public function getBirthDay()
   {
      return $this->birthDay;
   }

   public function setPhone($phone)
   {
      $this->phone = $phone;
   }
     
   public function getPhone()
   {
      return $this->phone;
   }

   public function setEmail($email)
   {
      $this->email = $email;
   }
     
   public function getEmail()
   {
      return $this->email;
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

   public function setExpInYear($expInYear)
   {
      $this->expInYear = $expInYear;
   }
     
   public function getExpInYear()
   {
      return $this->expInYear;
   }

   public function setProSkill($proSkill)
   {
      $this->proSkill = $proSkill;
   }
     
   public function getProSkill()
   {
      return $this->proSkill;
   }

   public function showInfo()
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

   public function setGraduationDate($graduationDate)
   {
      $this->graduationDate = $graduationDate;
   }
     
   public function getGraduationDate()
   {
      return $this->graduationDate;
   }

   public function setGraduationRank($graduationRank)
   {
      $this->graduationRank = $graduationRank;
   }
     
   public function getGraduationRank()
   {
      return $this->graduationRank;
   }

   public function setEducationr($education)
   {
      $this->education = $education;
   }
     
   public function getEducation()
   {
      return $this->education;
   }

   public function showInfo()
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

   public function setMajors($majors)
   {
      $this->majors = $majors;
   }
     
   public function getMajors()
   {
      return $this->majors;
   }

   public function setSemester($semester)
   {
      $this->semester = $semester;
   }
     
   public function getSemester()
   {
     return $this->semester;
   }

   public function setUniversityName($universityName)
   {
      $this->universityName = $universityName;
   }
     
   public function getUniversityName()
   {
      return $this->universityName;
   }

   public function showInfo()
   {
      Parent::showInfo();
      echo "<br>$this->majors";
      echo "<br>$this->semester";
      echo "<br>$this->universityName";
   }
}

$intern = new Intern;
$intern->setID(1);
$intern->setFullName('Tô Văn Mạnh');
$intern->setBirthDay('27/08/1998');
$intern->setPhone('0974xxxxxx');
$intern->setEmail('manhtv@smartosc.com');
$intern->setMajors('Lập Trình PHP');
$intern->setSemester('Học kỳ 1');
$intern->setUniversityName('HaNoi-Aptech');
$intern->showInfo();
?>
