<?php
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    
    $conn = new mysqli('localhost','root','','portfolio');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        
        $stmt=$conn->prepare("insert into contact_details1(name,email,subject,message) values(?,?,?,?)");
        $stmt->bind_param("ssss",$name,$email,$subject,$message);
        $stmt->execute();
        //echo "Data added!!";
        $stmt->close();
        $conn->close();
    }
}


?>

