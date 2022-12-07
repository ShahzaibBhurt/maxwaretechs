<?php
    
    $meeting_name = $_POST['rname'];
    $meeting_email = $_POST['remail'];
    $meeting_phone = $_POST['rphone'];
    $meeting_interest = $_POST['rselect'];

    $connect = mysqli_connect('localhost', 'gaffar', 'test', 'maxware_database');

    if(!$connect){
        echo "Connection not successful! " . mysqli_connect_error();
    } else {
        
        
        
        $sqlQ = "INSERT INTO `maxware_meeting` (`meeting_name`, `meeting_email`, `meeting_phone`, `meeting_interest`) VALUES ('$meeting_name', '$meeting_email', $meeting_phone, '$meeting_interest')";
        
        
 
            
        mysqli_query($connect, $sqlQ);
      
            

        header("Location: ../index.html");
    }

?>