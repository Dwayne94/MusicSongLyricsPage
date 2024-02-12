<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta charname = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Member Database page</title>
        <link rel = "stylesheet" href = "MusicSong2.css">
    </head>
    <body>
        <div class = "header">
            <header>
                Wayne Music Entertainment Members Details
            </header>
        </div>
        
        <?php
        
        //Provide the Servername, Username and Password 
        $servername = "localhost"; 
        $username = "root"; 
        $password = "Blueoystercult94#";
        $database = "db_prac";

        //Create the connection 
        $connection = new mysqli($servername, $username, $password, $database); 

        //Check the connection 
        if($connection->connect_error)
        {
            die ("Server connection was unsuccessful!".$connection->connect_error);
        }
        else 
        {
            echo "Server has been connected successfully!";
        }

        echo "<br>";

        //Since the database was already created in the "DatabaseBasics.php" file, directly connecting to the database 
        if($connection->select_db($database)===TRUE)
        {
            echo "Database db_prac is selected successfully!";
        }
        else 
        {
            die ("Database db_prac was not selected. Pleae try again!".$connection->error);
        }

        echo "<br>";

        //Table "tbl_members" was already created in Database "db_prac" in the "DataBaseBasics.php" file, hence skipping those steps

        //We need to fetch the details being entered on the HTML page
        $name = $_POST['fullname'];
        $email = $_POST['useremail'];
        $username = $_POST['username'];
        $gender = $_POST['usergender'];
        $age = $_POST['userage'];

        //Then we need to insert the details entered on the HTML page into the database table
        $insert = "insert into tbl_members values('$name', '$email', '$username', '$gender', $age)";

        //Check if the data records were inserted into the Table 
        if($connection->query($insert)===TRUE)
        {
            echo "Member record was inserted successfully into the Table tbl_members";
        }
        else 
        {
            die ("Unable to add the Member record to the Table tbl_members. Please try again!".$connection->error);
        }

        //Once the details are entered we need to display the data using the SELECT query 
        $display = "select * from tbl_members";

        //Check if the table is displayed with details 
        $result = $connection->query($display);

        //Check if the Table displays more than 0 rows
        if($result->num_rows>0)
        {
            //Create a Table
            echo "<table>";
            //Create a Row for the Table. tr stands for table row
            echo "<tr>";
            //Create the Table Headings - th stands for table header
            echo "<th>Full Name</th>";
            echo "<th>Email</th>";
            echo "<th>Username</th>";
            echo "<th>Gender</th>";
            echo "<th>Age</th>";
            echo "</tr>";

            echo "<br>";

            while($row = $result->fetch_assoc())
            {
                //Create a Row for the Table to add each record
                echo "<tr>";
                //Add the Data in that row for every column - td stands for table data
                echo "<td>".$row["FullName"]."</td>";
                echo "<td>".$row["Email"]."</td>";
                echo "<td>".$row["Username"]."</td>";
                echo "<td>".$row["Gender"]."</td>";
                echo "<td>".$row["Age"]."</td>";
                echo "</tr>";

                // //We use the below lines of code when we want to display without any table 
                // echo "FullName:".$row["FullName"]."Email:".$row["Email"]."Username:".$row["Username"]."Gender:".$row["Gender"]."Age:".$row["Age"];
                //echo "<br>";
            }
        }
        else
        {
            die ("All the records not displayed correctly. Please display the table again.".$result->error);
        }

        ?>

    </body>
</html>