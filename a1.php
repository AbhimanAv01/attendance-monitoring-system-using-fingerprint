<?php  
//Connect to database
require 'connectDB.php';

// ==============subject divided=============
$sql_query =  "INSERT INTO subject1  select * from users_logs where timein between '09:00:00' and '10:00:00' "; 
    if ($conn->query($sql_query) === true) 
{ } 
else
{ } 

$sql_query =  "INSERT INTO subject2  select * from users_logs where timein between '10:00:00' and '11:00:00' "; 
    if ($conn->query($sql_query) === true) 
{ } 
else
{ } 

$sql_query =  "INSERT INTO subject3  select * from users_logs where timein between '11:00:00' and '12:00:00' "; 
    if ($conn->query($sql_query) === true) 
{ } 
else
{ } 

$sql_query =  "INSERT INTO subject4  select * from users_logs where timein between '12:00:00' and '13:00:00' "; 
    if ($conn->query($sql_query) === true) 
{ } 
else
{ } 

$sql_query =  "INSERT INTO subject5  select * from users_logs where timein between '14:00:00' and '15:00:00' "; 
    if ($conn->query($sql_query) === true) 
{ } 
else
{ } 

$sql_query =  "INSERT INTO subject6  select * from users_logs where timein between '15:00:00' and '16:00:00' "; 
    if ($conn->query($sql_query) === true) 
{ } 
else
{ } 





// =================attendance status============

$sql_query =  "UPDATE users_logs SET attendance_status = 'present' 
where timein between '09:00:00' and '09:15:00' ";

if ($conn->query($sql_query) === true) 
{} 
else
{} 


$sql_query =  "UPDATE users_logs SET attendance_status = 'absent' 
where timein between '09:15:00' and '10:00:00' ";
if ($conn->query($sql_query) === true) 
{ } 
else
{ } 



$sql_query =  "UPDATE users_logs SET attendance_status = 'present' 
where timein between '10:00:00' and '10:15:00' ";

if ($conn->query($sql_query) === true) 
{} 
else
{} 



$sql_query =  "UPDATE users_logs SET attendance_status = 'absent' 
where timein between '10:15:00' and '11:00:00' ";
if ($conn->query($sql_query) === true) 
{ } 
else
{ } 




$sql_query =  "UPDATE users_logs SET attendance_status = 'present' 
where timein between '11:00:00' and '11:15:00' ";

if ($conn->query($sql_query) === true) 
{} 
else
{} 


$sql_query =  "UPDATE users_logs SET attendance_status = 'absent' 
where timein between '11:15:00' and '12:00:00' ";
if ($conn->query($sql_query) === true) 
{ } 
else
{ } 



$sql_query =  "UPDATE users_logs SET attendance_status = 'present' 
where timein between '12:00:00' and '12:15:00' ";

if ($conn->query($sql_query) === true) 
{} 
else
{} 


$sql_query =  "UPDATE users_logs SET attendance_status = 'absent' 
where timein between '12:15:00' and '13:00:00' ";
if ($conn->query($sql_query) === true) 
{ } 
else
{ } 




$sql_query =  "UPDATE users_logs SET attendance_status = 'present' 
where timein between '14:00:00' and '14:15:00' ";

if ($conn->query($sql_query) === true) 
{} 
else
{} 


$sql_query =  "UPDATE users_logs SET attendance_status = 'absent' 
where timein between '14:15:00' and '15:00:00' ";
if ($conn->query($sql_query) === true) 
{ } 
else
{ } 



$sql_query =  "UPDATE users_logs SET attendance_status = 'present' 
where timein between '15:00:00' and '15:15:00' ";

if ($conn->query($sql_query) === true) 
{} 
else
{} 


$sql_query =  "UPDATE users_logs SET attendance_status = 'absent' 
where timein between '15:15:00' and '16:00:00' ";
if ($conn->query($sql_query) === true) 
{ } 
else
{ } 







// Close the  connection 
$conn->close(); 
?> 
