<?php
      //error_reporting(0);
        $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
         mysqli_select_db($db,"form") or die(mysqli_error($db));
         ?>
<?php   
        $firstname = $_POST['fname'];
        $mid = $_POST['mi'];
        $lastnam = $_POST['lname'];
        $id_nu = $_POST['id'];
        $ad = $_POST['address'];
        $ci = $_POST['city'];
        $sta = $_POST['state'];
        $zii = $_POST['zip'];
        $hpon = $_POST['hphone1'];
        $cpon = $_POST['cphone'];
        $ema = $_POST['email'];
           
          switch($_GET['action']){
            case 'add':     
                $query = "INSERT INTO student_info VALUES (".$firstname."','".$mid."','".$lastnam."','".$id_nu."','".$ad."','".$ci."','".$sta."','".$zii."','".$hpon."','".$cpon."','".$ema."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
              
            break;
                     
            }
        ?>  
        <script type="text/javascript">
            alert("Successfully added.");
            window.location = "activ.php";
        </script>   