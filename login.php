<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login using PHP</title>

    <!-- we need to chose between an off the shelf style set up like bootstrap or write one ourselves -->

    <link rel="stylesheet" type="text/css" href="login.css">

</head>

<body class ="bg" background="images/login2.jpg">

<h1> Welcome to Aberdeen International Students WebSite</h1>
<div style="width:400px; border=20px;  align="right">


<div style="margin:40px 40px">

    <div class="loginbox" align="right">
        <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label> Email : </label><input type="text" name="username"><br><br>
            <label> Password :</label><input type="password" name="password"><br><br>
            Remember Me: <input type="checkbox" name="rememberme" class="box"><br><br>
            <button type="submit">Login</button>
        </form>
    </div>
    <?php if(isset($error)) {
        echo "Sorry your login didn't work please try again"
        ;}?>

    <?php
    /*
        Include the external file "dbConfig.php" which defines 4 PHP variables:
        $dbHost, $dbUser, $dbPassword and $dbDatabase.
    */
    require_once "config_rgu.php";
    /*
        We use configure PDO to report erros by throwing exceptions.
        So all PDO operations are put into a try-catch block.
    */



    try	{
        /*
            Connect to MySQL and set error mode.
            For MySQL connection, the data source name string is in the format:

            mysql:host=xxx;dbname=yyy
        */
        $dataSourceName="mysql:host=$dbHost;dbname=$dbDatabase;";		//compose data source name as a string
        $pdo=new PDO($dataSourceName,$dbUser,$dbPassword);		//create PDO object
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);		//tell PDO to report errors by exceptions

        /*
            Compose SQL query and execute it.

            If there is an error in the query, the result is a false.
            In this case, all subsequent operation to result will give an exception.

            If the query is successful, result will be a PDOStatement object.
        */

        //$query="select * from Users";		//compose SQL query as a string

        $email=$_GET["username"];      //look for keyword parameter submitted in the GET request
        $password=$_GET["password"];
        if (isSet($email))            //if keyword is set
            //$query=$query." where Users.email like '%".$email."%'"."and User.password like'%".$password."%'"; //append filter to SQL query
            //$query = "select ".$email." from Users";
            $query="select * from Users"." where Users.email like '%".$email."%'"." and Users.password_text like '%".$password."%'";
        //this is a normal WHERE xxx LIKE... filter in SQL
        $result=$pdo->query($query);	//execute SQL query

        print "<table>\n";										//Generate the static tags.
        print "<tr>\n";											//I could use 1 single echo/print
        print "<th>user_id</th><th>email</th><th>password</th><th>user_type</th>\n";				//but I better show you the tags here with multiple prints.
        print "</tr>\n";

        if ($result->rowCount()==0)
        {
            echo "<p>No data retrieved.</p>\n";
        }
        else	{
            /*
                Now we can iterate through result as an array
                using the PHP foreach loop.
            */
            foreach ($result as $row)
            {
                /*
                    For each row, generate a <tr>...</tr> pairs.
                    Each row retrieved is an associative array.
                    Use the column/field names as indices to get the field values.
                */
                print "<tr>\n";										//for each record generate a table row
                print "<td>".$row["user_id"]."</td>\n";			//use column name as index into row to get value
                print "<td>".$row["email"]."</td>\n";
                print "<td>".$row["password_text"]."</td>\n";
                print "<td>".$row["user_type"]."</td>\n";
                print "</tr>\n";									//finish the row
            }
            print "</table>\n";										//finish table
        }

        $pdo=null;	//Destroy PDO object by removing all references to it
        //This will close the connection to MySQL.
    } catch (PDOException $exception)
    {
        /*
            In case of any exception, use PDOException::getMessage()
            to get the error as a string and output it to the web page.
        */
        echo "<div class='error'>".$exception->getMessage()."</div>";
    }



    ?>

</div>
</div>


</body>
</html>