<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['add_appointment'])) {
    $output = array();
    $fields = array();
    
    $fields['AptNumber'] = mt_rand(100000000, 999999999);
    $fields['Name'] = $_POST['name'];
    $fields['Email'] = $_POST['email'];
    $fields['PhoneNumber'] = $_POST['phone'];
    $fields['AptDate'] = $_POST['adate'];
    $fields['AptTime'] = $_POST['atime'];
    $fields['Services'] = $_POST['services'];
    $fields['home_service'] = ($_POST['add_appointment'] == 'home') ? 'yes' : 'no'; // Set home_service based on add_appointment value

    $query = "INSERT INTO tblappointment (AptNumber, Name, Email, PhoneNumber, AptDate, AptTime, Services, home_service) ";
    $query .= "VALUES ('{$fields['AptNumber']}', '{$fields['Name']}', '{$fields['Email']}', '{$fields['PhoneNumber']}', '{$fields['AptDate']}', '{$fields['AptTime']}', '{$fields['Services']}', '{$fields['home_service']}')";

    $insertQuery = mysqli_query($con, $query);
    if($insertQuery) {
        $output['status'] = "success";
        $output['aptid'] = $fields['AptNumber'];
        $output['message'] = "Your appointment is confirmed. Appointment Number: {$fields['AptNumber']}";
    } else {
        $output['status'] = "error";
        $output['errorMsg'] = "Something Went Wrong. Please try again";
    }

    echo json_encode($output);
}
?>

