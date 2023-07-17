
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mr Abhi </title>
    <link href="mailing/style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>


</head>

<body>

    <header>
        <h1> Welcome, to Your Website Data Page!!</h1>
    </header>
    <main>


        

            <table border='1' style='border-collapse:collapse;'>
                <tr>
                   
                    <th>S.no </th>
                    <th>fullname</th>
                    <th>email</th>
                    <th>messages</th>
                </tr>

                <?php
                  $conn = mysql_connect("sql208.epizy.com","epiz_31548401","YoBu26xVLB");
                     mysql_select_db("epiz_31548401_portfolio",$conn);
   
                    if(! $conn ) {
                         die('<div class="alert alert-success">Thank You! I will be in touch</div>'  . mysql_error());
                         }
   
                $sql = 'SELECT DISTINCT fullname, email, user_message FROM contact_me';
                 mysql_select_db('epiz_31548401_portfolio');
                 $retval = mysql_query( $sql, $conn );
                 
                if(! $retval ) {
                    die('Could not get data: ' . mysql_error());
                 }
                
                $i = 1;
                while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
               
                   ?>
                    
                       <tr>
                       <td> <?php
                            echo $i;
                            $i++;
                            ?></td> 
                       <td> <?php echo $row['fullname'];?></td> 
                       <td> <?php echo $row['email'];?></td> 
                       <td> <?php echo $row['user_message'];?></td> 
                       </tr>
                        
               <?php 
                 }
                     
                //  echo "Fetched data successfully\n";
   
                 mysql_close($conn);
                    ?>
            </table>
           
    </main>
</body>

</html>