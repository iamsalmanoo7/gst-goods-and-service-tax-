<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <title>Goods & Services Tax (GST) | Calculate GST</title>
<?php require "head.php";  ?>
<section class="post-wrapper-top">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><a href="feedback.php">Feedback</a></li>
         
        </ul>
        <h2>Feedback Form</h2>
      </div>
    </div>
  </section>

<?php

if(isset($_POST['submit']))
{
$date=date("d/m/Y");
$time=date("h:i:sa");
$ip=$_SERVER['REMOTE_ADDR'];
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

$conn=mysqli_connect("localhost","root","","gst");
$insert="INSERT INTO feedback (date,time,ip,name,email,feedback) VALUES	('$date','$time','$ip','$name','$email','$feedback')";

	if(mysqli_query($conn,$insert))
	{
		$x="Feedback Submitted";
	}
		
}
?>


      <section class="section1">
    <div class="container clearfix">




      <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">


        <div class="col-lg-1 col-md-1 col-sm-1">
           <div id="Div1" class="alert-info">
		   
		  </div>
          
          
          <!-- contact_details -->
        </div>




        <div class="col-lg-9 col-md-9 col-sm-9">
          <h4 class="title">Feedback</h4>
          <div id="message" > <?php if(isset($_POST['submit'])) echo $x; ?></div>



    <form id="form1" method="post">

        <div class="form-group">

        <input type="text" ID="name" name ="name" class="form-control" placeholder="Name(Optional)" pattern="{3,100}" required="" title="Enter Name(Optional)" oninvalid="this.setCustomValidity('Please Enter Name')">
        <div class="validate"></div>
        		    </div>



<div class="form-group">

        <input type="text" ID="email" name="email" class="form-control" placeholder="Email" pattern="{3,100}" required="" title="Enter Your Email Address" oninvalid="this.setCustomValidity('Please Enter Your Email Address')">
        <div class="validate"></div>
        		    </div>

<div class="form-group">

        <textarea  ID="email" name="feedback" class="form-control" placeholder="Feedback" pattern="{3,100}" required="" title="Feedback" oninvalid="this.setCustomValidity('Please Enter Your Feedback')" > </textarea>
        <div class="validate"></div>
        		    </div>


<div class="form-send">
        <input type="submit" ID="Button1" class="btn btn-large btn-primary" onclick="Button1_Click" value="Submit" name="submit"/>
         
 </div>
</form>
 </div>
     
      </div>
      <!-- end content -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section -->
<?php require "footer.php";  ?>



</body>
</html>
