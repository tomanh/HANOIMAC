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
      echo "id: $this->id";
   }

   public function setFullName($fullName)
   {
      $this->fullName = $fullName;
   }
     
   public function getFullName()
   {
      echo "Họ tên: $this->fullName";
   }

   public function setBirthDay($birthDay)
   {
      $this->birthDay = $birthDay;
   }
     
   public function getBirthDay()
   {
      echo "Ngày sinh: $this->birthDay";
   }

   public function setPhone($phone)
   {
      $this->phone = $phone;
   }
     
   public function getPhone()
   {
      echo "Số điện thoại: $this->phone";
   }

   public function setEmail($email)
   {
      $this->email = $email;
   }
     
   public function getEmail()
   {
      echo "Email: $this->email";
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
      echo "Số năm kinh nghiệm: $this->expInYear";
   }

   public function setProSkill($proSkill)
   {
      $this->proSkill = $proSkill;
   }
     
   public function getProSkill()
   {
      echo "Kỹ năng chuyên môn: $this->proSkill";
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
      echo "Thời gian tốt nghiệp: $this->graduationDate";
   }

   public function setGraduationRank($graduationRank)
   {
      $this->graduationRank = $graduationRank;
   }
     
   public function getGraduationRank()
   {
      echo "Xếp loại tốt nghiệp: $this->graduationRank";
   }

   public function setEducationr($education)
   {
      $this->education = $education;
   }
     
   public function getEducation()
   {
      echo "Trường tốt nghiệp: $this->education";
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
      echo "Chuyên ngành đang học: $this->majors";
   }

   public function setSemester($semester)
   {
      $this->semester = $semester;
   }
     
   public function getSemester()
   {
      echo "Học kì đang học : $this->semester";
   }

   public function setUniversityName($universityName)
   {
      $this->universityName = $universityName;
   }
     
   public function getUniversityName()
   {
      echo "Tên trường đang học: $this->universityName";
   }
}

$intern = new Intern;

$intern->getUniversityName('HaNoi-Aptech');

$intern->getUniversityName();
?>
