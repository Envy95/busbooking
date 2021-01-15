<!DOCTYPE html>
<html>
<head>
    <title>Bookings</title>
</head>
<div class="header">
        <style>

        h1{text-align: center;}
        h2{text-align: center;}

    </style>


    <h2>Booked Information<h2>
    </div>
    <div class="content">
        <hr>
        <br>
<?php
    error_reporting(0);
        $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db,"busreservation") or die(mysqli_error($db));
        ?>  
<body>
     <table border="1" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th bgcolor="#ff00ff">Username</th>
                                        <th bgcolor="#ff00ff">Contact Number</th>
                                        <th bgcolor="#ff00ff">Email</th>
                                        <th bgcolor="#ff00ff">Option 1</th>
                                        <th bgcolor="#ff00ff">Option 2</th>
                                        
                                     </tr>
                                </thead>
                                <tbody>
                <?php                  

                $query = 'SELECT * FROM booking';
                    $result = mysqli_query( $db,$query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_array($result)) {
                                             
                            echo '<tr bgcolor="#c0c0c0">';
                            echo '<td align="center">'. $row['cus_username'].'</td>';
                            echo '<td align="center">'. $row['cus_contactno'].'</td>';
                            echo '<td align="center">'. $row['cus_email'].'</td>';
                            echo '<td bgcolor="#cc0000"> <a  type="button" class="btn btn-xs btn-danger" href="cancel-book.php?type=book&delete & id=' . $row['book_id'] . '"> <input align="right" type="submit" class="btn btn-primary" value="Cancel"></a>
                            </td>';
                            echo '<td bgcolor="blue"> <a  type="button" class="btn btn-xs btn-danger" href="payment-confirmation.php?type=book&select & id=' . $row['book_id'] . '"> <input align="right" type="submit" class="btn btn-primary" value="Confirm Payment"></a>
                            </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                            <br>
                          <hr>
            <form action="paid-bookings.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="List of Paid Bookings">
            </form>   <br>
              <form action="index.php" method="POST">
                <input align="right" type="submit" class="btn btn-primary" value="Log out">
            </form>  
           
</body>
</html>