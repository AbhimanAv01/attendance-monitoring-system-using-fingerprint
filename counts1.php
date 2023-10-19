<?php  
//Connect to database
// session_start();
require '_dbconnect.php';
require 'connectDB.php';

include 'l1.php';

// echo "mm".$ss;

// $USN=$_SESSION['usn'];
$sql = "SELECT 
           SUM(IF(attendance_status='Present',1,0)) as Present,
           SUM(IF(attendance_status='Absent',1,0)) as Absent 
        FROM subject1 ";
        
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "Present: " . $row["Present"]. "  Absent: " . $row["Absent"]. "<br>";
  }
} else {
  echo "0 results";
}


$conn->close(); 
?> 