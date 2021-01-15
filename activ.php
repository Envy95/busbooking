<!DOCTYPE html>
     <html> 
     <head> 
      <?php
      error_reporting(0);
        $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
         mysqli_select_db($db,"form") or die(mysqli_error($db));

        ?>  
  <title></title>
  </head>
  <style type="">
    .myDiv{
      text-align: center;
    }
    div.a{
      text-indent: 50px;
    }
  </style>
  <body> 
      <div class="myDiv">
      <H1>SUMMER SCHOOL REGISTRATION FORM</H1>
      <h2>Please print and return to child’s school<br>
Confirmations will be sent out prior to start of program</h2>
</div>
<hr>
<div>

    What school do you attend:<br><br>
  <input type="checkbox" id="school1" name="school1" value="Baker">
    <label for="school1">Baker</label>
  <input type="checkbox" id="school2" name="school2" value="Creek">
    <label for="school2">First Creek</label>
  <input type="checkbox" id="school3" name="school3" value="Gray">
    <label for="school3">Gray</label>
  <input type="checkbox" id="school4" name="school4" value="Mason">
    <label for="school4">Mason</label>
  <input type="checkbox" id="school5" name="school5" value="Stewart">
    <label for="school5">Stewart</label>
  <input type="checkbox" id="school6" name="school6" value="Bryant">
    <label for="school6">Bryant</label>
  <input type="checkbox" id="school7" name="school7" value="Giaudrone">
    <label for="school7">Giaudrone</label>
  <input type="checkbox" id="school8" name="school8" value="Jason">
    <label for="school8">Jason Lee</label>
  <input type="checkbox" id="school9" name="school9" value="Meeker">
    <label for="school9">Meeker</label>
  <input type="checkbox" id="school10" name="school10" value="Truman">
    <label for="school10">Truman</label><br><br>
    <hr>
  Middle School Programs:<br><br>
    <input type="checkbox" id="program1" name="program1" value="Jump">
    <label for="program1">Jump Start</label>
    <input type="checkbox" id="program2" name="program2" value="Camp">
    <label for="program2">Middle School Camp (limited sites)</label>
    <input tabindex="" ype="checkbox" id="program3" name="program3" value="ELL">
    <label for="program3">Middle School ELL (limited sites)</label>
  
  <div class="myDiv">
    <h3 style="background-color: black;"><p style="color: white;">STUDENT INFORMATION</p></h3>
  </div>
  <div>
  <form role="form" method="post" action="transac.php?action=add">
    <label>Student Name:</label>
    <input placeholder="First Name" name="fname">
    <input placeholder="MI" name="mi">
    <input placeholder="Last Name" name="lname">
    <label>ID#:</label>
    <input name="id">
    <br><br>
    <label>Home Address:</label>
    <input class="form-control" placeholder="Street Address" name="address">
    <input name="city" placeholder="City" style="text-align: center;">
    <input name="state" placeholder="State" style="text-align: center;">
    <input name="zip" placeholder="Zip" style="text-align: center;"><br><br>
    <label>Home Phone:</label>
    <input name="hphone1">
    <label>Cell Phone:</label>
    <input name="cphone"><br><br>
    <label>Email:</label>
    <input name="email">
    <p>(For Confirmation/Reminder)</p> 
    <button type="submit">Save</button>   
  </form>
  </div>
    <div class="myDiv">
    <h3 style="background-color: black;"><p style="color: white;">CONTACT INFORMATION</p></h3>
    </div>
    Parent/Guardian Name:
    <input type="text" name="parent"><br><br>
    Home Phone:
    <input type="number" name="hphone2">
    Work/Cellphone:
    <input type="number" name="cphone2"><br><br>
    Emergency Contact Name:
    <input type="text" name="ename">
    Relationship to Student: 
    <input type="text" name="rel"><br><br>
    Emergency Phone:
    <input type="text" name="ephone">
    Alternate Phone:
    <input type="text" name="aphone">
    <div class="myDiv">
    <h3 style="background-color: black;"><p style="color: white;">MEDICAL INFORMATION</p></h3>
    </div>
    <p>Does your child have a life-threatening health condition? <i>(See Note below)</i>   
    <input type="checkbox" name="yes"><label>Yes</label>
    <input type="checkbox" name="no"><label>No</label>
    </p>

   If yes please explain:<br><br>
   <textarea rows="4" cols="100"></textarea>
   <hr>
   <p>Does your child needs medication at school? 
    <input type="checkbox" name="yes"><label>Yes</label>
    <input type="checkbox" name="no"><label>No</label>
   </p>
   If yes please explain:<br><br>
   <textarea rows="4" cols="100"></textarea>
   <hr>
   <p>Does your child have any other medical issues of which we need to be aware
    <input type="checkbox" name="yes"><label>Yes</label>
    <input type="checkbox" name="no"><label>No</label>
   </p>
   If yes please explain:<br><br>
   <textarea rows="4" cols="100"></textarea>
   <hr>
  <strong>
     <i>NOTE:  Parent/Guardian are responsible for providing the required medication to designated program staff on the first day of summer school. Medication currently held at the school must be picked up prior to the end of the regular school year. Summer School Staff will not have access to medications from the regular school year.  If registration is completed prior to end of school year, this information will be transferred for the student. If registration is completed after the school year has ended, the parent/guardian is responsible for providing a copy to designated program staff on or before the student’s first day in summer school.  A notification will be communicated to the summer school instructor.  
     </i>
  </strong>
  <br><br>
  <hr>


</div> 
  </body >
  </html>