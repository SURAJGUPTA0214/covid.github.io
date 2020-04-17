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


<section class="container-fluid Corona_update">
	<div class="my-5">
		<h2 class="text-center text-dark">COVID-19 LIVE UPDATES </h2>
		
	</div>
	<div class="table-responsive">
		<table class="table table-boardered table-striped">
			<tr>
				<th > NAME OF STATE </th>
				<th>CONFIRMED</th>
				<th>ACTIVE</th>
				<th>RECOVERED</th>
				<th>DEATHS</th>
			</tr>

<?php

	$data = file_get_contents('https://api.covid19india.org/data.json');
	$corlive = json_decode($data,true);

     
     $statecount = count( $corlive['statewise']);


     $i=1;
     while ( $i < $statecount) {
 
     	?>
     	<tr>
     		<td> <?php echo $corlive['statewise'][$i]['state'] ?> </td>
     		<td> <?php echo $corlive['statewise'][$i]['confirmed'] ?> </td>
     		<td> <?php echo $corlive['statewise'][$i]['active'] ?> </td>
     		<td> <?php echo $corlive['statewise'][$i]['recovered'] ?> </td>
     		<td> <?php echo $corlive['statewise'][$i]['deaths'] ?> </td>
     	</tr>

     	
     	<?php
     	
     	$i++;
     }

?>	
		</table>
		
	</div>
</section>


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

</body>
</html>