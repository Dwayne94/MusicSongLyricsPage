<?php

// //Step 1: Provider the Servername, Username and Password to access the Server 
// $servername = "localhost"; 
// $username = "root";
// $password = "qwerty123";

// //Provide the database name after database is created
// $database = "db_prac";

// //Step 2: Create the Connection 
// $connection = new mysqli($servername, $username, $password);

// //Step 3: Check the Connection 
// if($connection->connect_error)
// {
//     die ("Connection failed to be established!".$connection->connect_error);
// }
// else
// {
//     echo "Connection established successfully!";
// }

// //Step 4: Create the Database. If the database is already created then only check if database is created
// $db_prac = "create database db_prac"; 

// //Step 5: Check if Database is created 
// if($connection->query($db_prac)===TRUE)
// {
//     echo "Database has been created successfully!";
// }
// else
// {
//     die ("Unable to create the Database! Please try again.".$connection->error);
// }

// //Step 6: Select the Database 
// if($connection->select_db($database))
// {
//     echo "Database db_prac has been selected successfully!";
// }
// else
// {
//     die ("Unable to select the Database db_prac. Please try again!".$connection->error);
// }

// //Step 7: Create the Table 
// $tbl_members = "create table tbl_members(FullName varchar(30) not null, Email varchar(30) primary key not null, Username varchar(20) not null, Gender varchar(15) not null, Age int)";

// //Step 8: Check if the Table is created
// if($connection->query($tbl_members)===TRUE)
// {
//      echo "Table tbl_members has been created successfully";
// }
// else
// {
//     die ("Unable to create Table tbl_members. Please try again!".$connection->error);
// }

//Now we can insert data into the table in 2 ways. Either we insert by typing the PHP code here OR what we select on the HTML page.
//Dont try to run both codes simultaneously or errors will show. You need to comment out respectively. 

// //Step 8A: Insert the data records into the Table
// $insert1 = "insert into tbl_members values ('Dwayne Dsouza', 'dwaynedsouza94@gmail.com', 'dwayne94', 'Male', 29)";

// //Step 9A: Check if the data records were inserted into the Table 
// if($connection->query($insert1)===TRUE)
// {
//     echo "Member record was inserted successfully into the Table tbl_members!";
// }
// else 
// {
//     die ("Unable to add the Member record to the Table tbl_members. Please try again!".$connection->error);
// }

// //Step 8B: Fetch the details if entered on the HTML page and then Insert the details into the Table
// $fullname = $_GET['fullname'];
// $useremail = $_GET['useremail'];
// $username = $_GET['username'];
// $usergender = $_GET['usergender'];
// $userage = $_GET['userage'];

// $insert2 = "insert into tbl_members values ('$fullname', '$useremail', '$username', '$usergender', $userage)";

// //Step 9B: Check if the data records were inserted into the Table
// if($connection->query($insert2)===TRUE)
// {
//     echo "Member record was inserted successfully into the Table tbl_members";
// }
// else 
// {
//     die ("Unable to add the Member record to the Table tbl_members. Please try again!".$connection->error);
// }

// //Step 10: Close the Connection
// $connection->close();

?>