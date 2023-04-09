<?php

class Crud_ajax{
  private $con;
  function __construct(){
    $this->con = new mysqli('localhost','root','','ajax_crud');
  }
  function insert(){
    // global $con;
    $name= $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $status= $_POST["status"];
    if($name == ""){
        echo "Name field is required";
    }
    else if($email == ""){
        echo "email field is required";
    }
    else if($phone == ""){
        echo "phone field is required";
    }
    else if($status == ""){
        echo "status field is required";
    }
    else{
        $qur = $this->con->query("INSERT INTO tbl_student(name,email,phone,status)VALUES('$name','$email','$phone','$status')");
        if($qur){
            echo "Data Successfully submitted";
           
        }
        else{
            echo "Data Not submitted";
        }
    }
    
   


  }
  function show(){
    // global $con;
    $qur = $this->con->query("SELECT * FROM tbl_student");
    $sum = "";
    $sl=1;
    while($data = $qur->fetch_assoc()){
      $sum .="<tr>
      <td>$sl</td>
      <td>".$data["name"]."</td>
      <td>".$data["email"]."</td>
      <td>".$data["phone"]."</td>
      <td>".$data["status"]."</td>
      <td>
      <button class='btn btn-info btn-sm edit' value='".$data["id"]."'>Edit</button>
      <button class='btn_delete btn btn-danger btn-sm' value='".$data["id"]."'>delete</button>
      </td>
      
      </tr>";
      $sl++;
    }
    
    echo $sum;
  }
  function findData(){
    $id = $_POST["id"];
   $qur = $this->con->query("SELECT * FROM tbl_student WHERE id ='$id' ");
   $data = $qur->fetch_assoc();
   echo json_encode($data);
    
    
  }
  public function update(){
    $id = $_POST["id"];
    $name= $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $status= $_POST["status"];
    if($name == ""){
        echo "Name field is required";
    }
    else if($email == ""){
        echo "email field is required";
    }
    else if($phone == ""){
        echo "phone field is required";
    }
    else if($status == ""){
        echo "status field is required";
    }
    else{
      $qur = $this->con->query("UPDATE tbl_student SET name='$name',email='$email',phone='$phone',status='$status' WHERE id ='$id'");
        if($qur){
            echo "Data Successfully updated";
           
        }
        else{
            echo "Data Not updated";
        }
    }
    
  }
  function delete(){
    // global $con;
    $id = $_POST["id"];  
    $qur = $this->con->query("DELETE FROM tbl_student WHERE id = '$id'"); 
    echo "Item Deleted";
   
    
  }

}

  
  $obj = new Crud_ajax();
  $action = $_POST["action"];
  $obj->$action();
  
?>