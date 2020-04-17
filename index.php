<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php' ;?>
	<?php include 'css/Style.css' ;?>
</head>
<body>

	<!-- ----------------------------------------nav starts ---------------------------------------- -->


<nav class="navbar navbar-expand-lg navbar-light bg-light nav_style p-10">
  <a class="navbar-brand pl-5" href="#">COVID-19 INDIA </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="statewise_Case.php">State_Cases</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="symptoms.php">Symptoms<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="prevention.php">Prevention<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="scan.php">Scan_Risk <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

           <!-- ----------------------------------------nav ends ---------------------------------------- -->

<div class=" main bg-light w-100">
	<div class=" d-flex justify-content-center align-item-center">
		<h4 class="container text-center text-success"> Let's Stay Safe And Fight Togather Against Corona Virus </h4>
	</div>
</div>

<div class=" container-fluid main_header bg-light">
	<div class="row w-100 h-100">
		<div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-item-center">
				<img src="photo/coronovirus.png" width="400" height="250">	
			</div>
		</div>
		<div class="col-md-6 col-xl-6 col-lg-6">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-item-center">
				<h3 class="container  "> Connect with local, national, and global organizations. Turn to trusted sources, like the <a target="blank" href="https://www.who.int"> World Health Organization</a> or Your <a target="blank" href="https://www.mohfw.gov.in"> National Health Ministry</a> for the latest information and guidelines.</h3>	
			</div>
		</div>
	</div>	
</div>

       <!-- ----------------------------------------Update Parts starts ---------------------------------------- -->
<section class="cov_update" style="background-color: #FDF5E6; margin-top: 35px">
		<div class="pt-10" >
	    	<h3 class="text-center text-info font-weight-bold ">Covid-19 Updates India Live</h3><br>
	    </div>


	<div class="table-responsive" >
		
		<table class="table text-center" >

			<?php

				$data = file_get_contents('https://api.covid19india.org/data.json');
				$corlive = json_decode($data,true);

				// echo "<pre>";

				// print_r($corlive);

				// echo "</pre>";

				// echo;

				// echo $corlive ['statewise'] [0] ['confirmed'] ;
				// echo $corlive ['statewise'] [0] ['active'] ;
				// echo $corlive ['statewise'] [0] ['recovered'] ;
				// echo $corlive ['statewise'] [0] ['deaths'] ;

			?>

		    <tr >
	     		<td class=" count text-danger " style="font-size: 35px;"> <?php echo $corlive ['statewise'] [0] ['confirmed'] ?> </td></h2>
	     		<td class="count text-primary" style="font-size: 35px"> <?php echo $corlive ['statewise'] [0] ['active']    ?> </td>
	     		<td class="count text-success" style="font-size: 35px"> <?php echo $corlive ['statewise'] [0] ['recovered'] ?> </td>
	     		<td class="count text-secondary" style="font-size: 35px"> <?php echo $corlive ['statewise'] [0] ['deaths']    ?> </td>

	     	</tr>

		    <tfoot>
		      <tr>
		        <th class="text-danger ">CONFIRMED</th>
		        <th class="text-primary">ACTIVE</th>
		        <th class="text-success">RECOVERED</th>
		        <th class="text-secondary"> DEATHS</th>
		      </tr>
		    </tfoot>
		</table>
	</div>


	<!-- ----------------------------------------Update Parts ends ---------------------------------------- -->




	       <!-- ----------------------------------------Update Parts starts ---------------------------------------- -->

		<div style="margin-top: 72px;" >
	    	<h3 class="text-center text-danger font-weight-bold">Covid-19 Updates World Live</h3><br>
	    </div>


	<div class="table-responsive" >
		
		<table class="table text-center" >

			<?php

				$data = file_get_contents('https://api.covid19api.com/summary');
				$worldlive = json_decode($data,true);

				// echo "<pre>";

				// print_r($worldlive);

				// echo "</pre>";

			?>

		    <tr >
	     		<td class=" count text-danger " style="font-size: 35px;"> <?php echo $worldlive ['Global'] ['TotalConfirmed'] ?> </td></h2>
	     		<td class="count text-primary" style="font-size: 35px"> <?php echo $worldlive ['Global'] ['TotalRecovered']    ?> </td>
	     		<td class="count text-success" style="font-size: 35px"> <?php echo $worldlive ['Global'] ['NewRecovered'] ?> </td>
	     		<td class="count text-secondary" style="font-size: 35px"> <?php echo $worldlive ['Global'] ['TotalDeaths']    ?> </td>

	     	</tr>

		    <tfoot>
		      <tr>
		        <th class="text-danger ">CONFIRMED</th>
		        <th class="text-primary">TOTAL RECOVERED</th>
		        <th class="text-success">NEW RECOVERED</th>
		        <th class="text-secondary"> DEATHS</th>
		      </tr>
		    </tfoot>
		</table>
	</div>


	<!-- ----------------------------------------Update Parts ends ---------------------------------------- -->





<!-- ----------------------------------------footer page  starts---------------------------------------- -->
<footer style=" background-color: #2c2c54 ">
<div class="container-fluid text-white ">     
  <div class="row">
    <div class="col-sm-3 offset-md-1">
      <h3> Contact </h3>
				<p>Address:</p>
				Kolkata, West Bengal
				<p>Email: suraj.gupta.0214@gmail.com</p>
				<p>Phone No: 6290569471 </p>
    </div>
    <div class="col-sm-4 offset-md-1">
     
		<h3>Links</h3>
			<ul>
				<li><a href="Statewise_Case.php"> Statewise Cases</a> </li>
			</ul>
		
			<ul>
				<li><a href="symptoms.php"> Symptoms</a> </li>
			</ul>
			<ul>
				<li><a href="prevention.php"> Prevention</a> </li>
			</ul>
			<ul>
				<li><a href="scan.php"> Scan_Risk</a> </li>
			</ul>
			<ul>
				<li> <a href="contact.php">Contact</a></li>
			</ul>
		
    </div>
    <div class="col-sm-3" >
       <h3> Follow Me On </h3>
       <div class="row">
	        <div class="col-sm-6 col-lg-6 col-6">
	       		<div>
	       			<a href="https://www.linkedin.com/in/suraj-gupta-583b05174/" target="blank"><i class="fa fa-2x fa-linkedin" aria-hidden ="true" style="color: #0097e6; padding-left: 50px;"> </i><br>
	       			<p class="social">Linkedin</p></a>
	       		</div>
	       	</div>
	       	<div class="col-sm-6 col-lg-6 col-6">
	       		<div>
	       			<a href="https://github.com/SURAJGUPTA0214" target="blank1"><i class=" fa fa-2x fa-github" aria-hidden ="true"  style="padding-left: 50px"> </i> <br>
	       			<p class="social">Github</p></a>
	       		</div>	
	        </div>
        </div>
        <div class="row">
	        <div class="col-sm-6 col-lg-6 col-6">
	       		<div>
	       			<a href="https://www.facebook.com/profile.php?id=100006490002293" target="blank2"><i class=" fa fa-2x fa-facebook" target="blank" aria-hidden ="true"style="color: #3B5998; padding-left: 50px"> </i> <br>
	       			<p class="social">Facebook</p></a>
	       		</div>
	       	</div>
	       	<div class="col-sm-6 col-lg-6 col-6">
	       		<div>
	       			<a href="https://www.instagram.com/suraj.gupta.0214" target="blank3"><i class=" fa fa-2x fa-instagram" aria-hidden ="true"style="color: #bb0000; padding-left: 50px"> </i><br>
	       			<p class="social">Instagram</p></a>
	       		</div>
	        </div>
        </div>    
    </div>
  </div>
</div>
</footer>
<!-- ----------------------------------------footer page ends---------------------------------------- -->


 <!--  --------- delay update count starts ------ -->
<script type="text/javascript">
	$('.count').counterUp({ delay:10, time:2500})
</script>
<!--  --------- delay update count ends ------ -->



<script type="text/javascript">
	function validation(){
		var age = document.getElementById('age').value;
		if(age== "")
		{
			document.getElementById('printage').innerHTML="Please fill age";
			return false;
		}
		if(age>=120) 
		{
			document.getElementById('printage').innerHTML="Please fill valid age";
			return false;
		}
	} 

</script>

<script>
	$(document).ready(function(){
		&('#btn').click(function(){
			$('#result').hide();
		});
	});
</script>

<script type="text/javascript">
	function myfun() {

		var x = document.getElementById("temperature").value;
		var y = document.getElementById("symptoms").value;
		var z = document.getElementById("travel").value;

		const p = parseInt(x) + parseInt(y) + parseInt(z);

		document.getElementById("printresult").innerHTML = p;
    document.getElementById("instruction").innerHTML = "Note this not true if you have any doubt contact doctor"

	}
</script><script type="text/javascript">
	function myfun() {

		var x = document.getElementById("temperature").value;
		var y = document.getElementById("symptoms").value;
		var z = document.getElementById("travel").value;

		const p = parseInt(x) + parseInt(y) + parseInt(z);

		document.getElementById("printresult").innerHTML = p;
    document.getElementById("instruction").innerHTML = "Note this not true if you have any doubt contact doctor"

	}
</script>
	
</body>

</html>





		