<?php

       $fullname = $_POST['fullname'];
       $credit_card_number = $_POST['credit_card_number'];
       $expired_date = $_POST['expired_date'];
       $username = $_POST['username'];
       $member_date = $_POST['member_date'];
       $card_code = $_POST['card_code'];

       

       //database conection
       
       $conn = new mysqli('localhost','root','','credit_card_project');
       if($conn->connect_error)
       {
        die('Connection Failed : ');
       }
       else{
        $stmt = $conn->prepare("insert into card_information(fullname,credit_card_number,expired_date,username,member_date,card_code)  values(?,?,?,?,?,?)") ;
        $stmt->bind_param("sisssi",$fullname,$credit_card_number,$expired_date,$username,$member_date,$card_code);
        $stmt->execute();
        echo "LogIn Successfully...."; 
        $stmt->close();
        $conn->close(); } 

        ?>