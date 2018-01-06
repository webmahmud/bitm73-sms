<?php


namespace App\classes;


class Student
{
public function saveStudentInfo($data){
   $dblink = mysqli_connect('localhost','root','','batch73');

  $sql = "INSERT INTO students (name,email,mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";


  if (mysqli_query($dblink,$sql)){

      $message = "Data Save Successfully";
      return $message;
  }else {
      $message = die('Query Problem: '.mysqli_error($dblink));

  }


}
}