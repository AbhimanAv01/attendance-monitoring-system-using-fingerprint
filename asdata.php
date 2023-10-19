<?php  
//Connect to database
require 'connectDB.php';

$sql_query =  "UPDATE users_logs SET attendance_status = 'present' 
where timein between '14:00:00' and '14:20:00' ";
$sql_query =  "UPDATE users_logs SET attendance_status = 'absent' 
where timein between '14:20:00' and '15:00:00' ";
if ($conn->query($sql_query) === true) 
{ 
    echo "Data Copied Successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to proceed $sql_query. "
       .$conn->error; 
} 
// Close the  connection 
$conn->close(); 
?> 
