<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <title>Goods & Services Tax (GST) | Calculate GST</title>
<?php require "head.php";  ?>
<section class="post-wrapper-top">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><a href="calculator.php">Calculate GST</a></li>
         
        </ul>
        <h2>Calculate GST</h2>
      </div>
    </div>
  </section>

<?php

if(isset($_POST['calculate']))
{
$date=date("d/m/Y");
$time=date("h:i:sa");
$ip=$_SERVER['REMOTE_ADDR'];
$name=$_POST['name'];
$email=$_POST['email'];
$per=$_POST['per'];
$amount=$_POST['amount'];
$gst=($per/100)*$amount;
$sgst=$gst/2;
$cgst=$sgst;
$total=$gst+$amount;

$conn=mysqli_connect("sql206.byetcluster.com","epiz_26367975","tclyv5Uf7gP","epiz_26367975_gst");
$insert="INSERT INTO cal (date,time,ip,name,email,per,amount,gst,sgst,cgst,total) VALUES 			  ('$date','$time','$ip','$name','$email','$per','$amount','$gst','$sgst','$cgst','$total')";

	if(mysqli_query($conn,$insert))
	{
		$sgst1="  State    GST=$sgst<br>";
		$cgst1="  Centeral GST=$cgst<br>";
		$gst1="   Total     GST=$gst<br>";
		$per1="   Perctage     =$per%<br>";
		$total1=" Amount Without GST is=$amount & with GST Amount is=$total. GST Percentage=$per%<br>";
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
          <h4 class="title">Calculate GST</h4>
          <div id="message"> <?php if(isset($_POST['calculate']))
		  					{
							echo $sgst1;
							echo $cgst1;
							echo $gst1;
							echo $per1;
							echo $total1;

		
							} ?>
</div>



    <form id="form1" method="post">

        <div class="form-group">

        <input type="text" ID="name" name ="name" class="form-control" placeholder="Business/Company/Factory/Office/Your Name (Optional)" pattern="{3,100}"  title="Enter Your Business/Company/Factory/Office Name(Optional)" oninvalid="this.setCustomValidity('Please Enter Business/Company/Factory/Office Name')">
        <div class="validate"></div>
        		    </div>



<div class="form-group">

        <input type="text" ID="email" name="email" class="form-control" placeholder="Email (Optional)" pattern="{3,100}"  title="Enter Your Email Address" oninvalid="this.setCustomValidity('Please Enter Your Email Address')">
        <div class="validate"></div>
        		    </div>


            <div class="form-group">

        <select ID="per" name="per" class="form-control" runat="server" placeholder="GST Percentage" required="" title="Select Percentage" oninvalid="this.setCustomValidity('Please Enter Valid Password')" >
            <option Value="5">5%</option>
            <option Value="12">12%</option>
            <option Value="18">18%</option>
            <option Value="28">28%</option>
        </select>
<div class="validate">For Help <a href="mygst1.php" target="_blank"><u>Click Here</u></a> OR <a href="img/gst.pdf" target="_blank"><u>Download PDF</u></a></div>
            </div>
   
       <div class="form-group">
        <input type="text" ID="amount" name="amount" class="form-control" placeholder="Amount"  required="">
<div class="validate"></div>
            </div>
      
<div class="form-send">
        <input type="submit" ID="Button1" class="btn btn-large btn-primary" onclick="Button1_Click" value="Calculate" name="calculate"/>
         
      
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
