<!doctype html>
<html>
<head>
    <title>International Student Web App</title>
    <meta charset="utf-8">
</head>
<body>
<h1> Welcome to Aberdeen International Students WebSite</h1>

<form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label>email</label><input name="email" size="20"><br>
    <label>password</label><input name="password" size="20"><br>
    <button type="submit">Search</button>
</form>

<?php
/*
    Include the external file "dbConfig.php" which defines 4 PHP variables:
    $dbHost, $dbUser, $dbPassword and $dbDatabase.
*/
require_once "dbconfig.php";
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

    $query="select * from Users";		//compose SQL query as a string

    $email=$_GET["email"];      //look for keyword parameter submitted in the GET request
    $password=$_GET["password"];
if (isSet($email))            //if keyword is set
        //$query=$query." where Users.email like '%".$email."%'"."and User.password like'%".$password."%'"; //append filter to SQL query
    //$query = "select ".$email." from Users";
    $query=$query." where Users.email like '%".$email."%'";
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

</body>
</html>
