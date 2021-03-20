<?php 
interface School{
    public function mySchool();
}
interface College{
    public function myCollege();
}
interface Varsity{
    public function myVarsity();
}
class Teacher implements School , College , Varsity{
  public function mySchool()
  {
      echo "I am a school teacher";
  }  
  public function myCollege()
  {
      echo "I am a college teacher";
  }
  public function myVarsity()
  {
      echo "I am a varsity teacher";
  }
}
$teacher = new Teacher();
$teacher->mySchool();
echo "<br>";
$teacher->myCollege();
echo "<br>";
$teacher->myVarsity(); 
echo "<hr>";
//Student
class Student implements School , College , Varsity{
    public function mySchool()
    {
        echo "I am a school student";
    }
    public function myCollege()
    {
        echo "I am a college student";
    }
    public function myVarsity()
    {
        echo "I am a varsity student";
    }
}
$student = new Student();
$student->mySchool();
echo "<br>";
$student->myCollege();
echo "<br>";
$student->myVarsity();

?>