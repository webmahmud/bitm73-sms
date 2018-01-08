<?php
namespace App\classes;
class Student
{
    public function saveStudentInfo($data){
        $link = mysqli_connect('localhost','root','','batch73');

        $sql = "INSERT INTO students(name,email,mobile) VALUES 
              ('$data[name]','$data[email]','$data[mobile]')";

        if (mysqli_query($link,$sql)){
            $messege = 'Data save successfully';
            return $messege;
        }else{
            die('Query Problem'.mysqli_error($link));
        }

    }

    public function getAllStudentInfo(){
        $link = mysqli_connect('localhost','root','','batch73');

        $sql = "SELECT * FROM students";
        if(mysqli_query($link, $sql)){

            $queryResult = mysqli_query($link,$sql);
            return $queryResult;

        } else{
            die('Query problem'.mysqli_error($link));
        }
    }

    public function getStudentInfoByid($id){
        $link = mysqli_connect('localhost','root','','batch73');

        $sql = "SELECT * FROM students WHERE id = '$id' ";
        if(mysqli_query($link, $sql)){

            $queryResult = mysqli_query($link,$sql);
            return $queryResult;

        } else{
            die('Query problem'.mysqli_error($link));
        }
    }

    public function updateStudentInfo($data,$id){
        $link = mysqli_connect('localhost','root','','batch73');
        $sql = "UPDATE students SET name = '$data[name]',email = '$data[email]',mobile = '$data[mobile]' WHERE id = '$id'";

        if(mysqli_query($link, $sql)){
            header('Location: view-student.php');
        } else{
            die('Query problem'.mysqli_error($link));
        }
    }

    public function deleteStudentInfoByID($id){

        $link = mysqli_connect('localhost','root','','batch73');
        $sql = "DELETE FROM students where id ='$id'";

        if(mysqli_query($link, $sql)){
            header('Location: view-student.php');
        } else{
            die('Query problem'.mysqli_error($link));
        }



    }
}