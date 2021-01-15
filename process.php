
  <?php 
  require_once('connect.php');
  session_start();
      if(isset($_POST['Login']))
      {
         if(empty($_POST['UName']) || empty($_POST['Password']))
         {
              header("location:index.php?Empty= Please Fill in the Blanks");
         }
         else
         {
              $query="select * from admin where UName='".$_POST['UName']."' and Pass='".$_POST['Password']."'";
              $result=mysqli_query($con,$query);
   
              if(mysqli_fetch_assoc($result))
              {
                  $_SESSION['Admin']=$_POST['UName'];
                  header("location:welcome.php");
              }
              else
              {
                  header("location:index.php?Invalid= Please Enter Correct Name and Password ");
              }
         }
      }
      else
      {
          echo 'Not Working Now Guys';
      }
   