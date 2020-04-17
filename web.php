<!DOCTYPE html>
<html>
<head>
  <title>Scan Your Self</title>
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
        <a class="nav-link" href="#">Cure<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

           <!-- ----------------------------------------nav ends ---------------------------------------- -->


<div class="container-fluid" style="background-color: #d5f4e6" >
<h3 class="text-center"> Scan Your COVID </h3>
<div class="form-group">
              <label>Select Your Age : </label>
              <input type="number" name="" class="form-control" placeholder="Enter Your Age" id="age" >
              <span id="printage" class="text-danger font-weight-bold"></span>
            </div>

            <label>Select Your Gender : </label>
              <select class="form-control" id="gender"> 
                <option value="0" disabled selected> Select Your Gender </option> 
                <option value=" "> Male </option> 
                <option value=" ">Female</option> 
                <option value=" ">Other</option> 
              </select>
            <label> Are you experiencing any of the symptoms below ? </label>
            <select class="form-control" id="my">
              <option value="0" disabled selected> Select Symptom </option>
              <option value="20"> Dry Cough and Sore Throat </option> 
              <option value="10"> weakness </option>
              <option value="1"> None of these </option>
            </select>
            <label>Select Your Body Temperature : </label>
              <select class="form-control" id="mya" > 
                <option value="0" disabled selected> Select Temperature </option>
                <option value="1"> Normal (96 F - 98.6 F) </option> 
                <option value="15">Fever (98.6 F - 102 F)</option>
                <option value="25">High Fever ( > 102 F)</option>
                <option value="2">Don't Know</option> 
            </select>

            <label> Select Your Travel History : </label>
              <select name="travel_history" class="form-control" id="myb" > 
                <option value="0" disabled selected> Select Travel </option>
                <option value="1"> No Travel History </option> 
                <option value="0"> No Contact with anyone with symptoms</option>
                <option value="20"> Travel or metting in affected geogriphical area in last 14 days </option>
                <option value="30"> closed contact with confirmed COVID in last 14 days </option>
            </select>




<button class="btn btn-success btn-lg btn-block" style="margin-top: 30px;" onclick="myFunction()">Click Here To Get Result</button>

<p id="demo" class="text-danger font-weight-bold text-center"></p>

<script>
function myFunction() {
  var x = document.getElementById("my").value;
  
  var y = document.getElementById("mya").value;

  var z = document.getElementById("myb").value;
    
  var s = parseInt(x)+parseInt(y) + parseInt(z);
  document.getElementById("demo").innerHTML = s + " % Chances You Have" + "<br>" +" Note : ** This one is not official created for project only **";
}
</script>

</body>
</html>
