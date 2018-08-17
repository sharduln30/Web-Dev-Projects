

<!doctype html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn538x4qQa1oWXA+058RXPxPg6fyiw4vTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	    <style>
		
			body {
				
				margin:50px;
				margin-bottom:25%;
			
			}
			#preference {
				
				margin-right:50%;
				
				
		
		</style>

    <title>Feedback Form</title>
  </head>

  
 <body>
    <h1><center>Manipal University Jaipur</center></h1>

<h1><center>Student Feedback Form for the Academic Year 2017-18<center></h1><br>

<p>Dear Students,</p>

<p>The questionnaire you will fill is going to help administrators, faculty members, student leaders to improve the conditions that will help to contribute to your learning and development and those who will come after you. If your rating is below 3 please write specific reason in comment box.</p>


<?php

 include_once("connection.php");
   if(isset($_POST['submit'])) {      

			$program = $_POST['program'];
			$department = $_POST['department'];
			$semester = $_POST['semester'];
			$a1 = $_POST['a1'];
			$a2 = $_POST['a2'];
			$a3 = $_POST['a3'];
			$b3 = $_POST['b3'];
			$c3 = $_POST['c3'];
			$d3 = $_POST['d3'];
			$e3 = $_POST['e3'];
			$f3 = $_POST['f3'];
			$g3 = $_POST['g3'];
			$h3 = $_POST['h3'];
			$a4 = $_POST['a4'];
			$b4 = $_POST['b4'];
			$c4 = $_POST['c4'];
			$d4 = $_POST['d4'];
			$e4 = $_POST['e4'];
			$f4 = $_POST['f4'];
			$g4 = $_POST['g4'];
			$h4 = $_POST['h4'];
			$i4 = $_POST['i4'];
			$j4 = $_POST['j4'];
			$k4 = $_POST['k4'];
			$l4 = $_POST['l4'];
			$m4 = $_POST['m4'];
			$n4 = $_POST['n4'];
			$o4 = $_POST['o4'];
			$p4 = $_POST['p4'];
			$q4 = $_POST['q4'];
			$r4 = $_POST['r4'];
			$s4 = $_POST['s4'];
			$t4 = $_POST['t4'];
			$u4 = $_POST['u4'];
			$v4 = $_POST['v4'];
			$w4 = $_POST['w4'];
			$x4 = $_POST['x4'];
			
           $result = mysqli_query($mysqli,"INSERT INTO `users`(`program`, `department`, `semester`, `1`, `2`, `3a`, `3b`, `3c`, `3d`, `3e`, `3f`, `g3`, `3h`, `4a`, `4b`, `4c`, `4d`, `4e`, `4f`, `4g`, `4h`, `4i`, `4j`, `4k`, `4l`, `4m`, `4n`, `4o`, `4p`, `4q`, `4r`, `4s`, `4t`, `4u`, `4v`, `4w`, `4x`) VALUES ('$program', '$department','$semester','$a1','$a2','$a3','$b3','$c3','$d3','$e3','$f3','$g3','$h3','$a4','$b4','$c4','$d4','$e4','$f4','$g4','$h4','$i4','$j4','$k4','$l4','$m4','$n4','$o4','$p4','$q4','$r4','$s4','$t4','$u4','$v4','$w4','$x4')");


		    if($query){
            
			header("Location: redirect.php");
			
         }else{
			 
            echo "Data not saved";
         }

		   
                
        
        
    }

?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF9h3XpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0bq4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejhu402d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<form method="post">
	
	<div id="preference">
	
   <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Program</label>
   <div class="form-group">
    <select class="custom-select" name="program" required>
      <option value="1">Bachelor of Business Administration (BBA)</option>
      <option value="2">Bachelor of Business Administrations - (Hospitality & Tourism)</option>
      <option value="3">Bachelor of Commerce (B.Com)</option>
	  <option value="4">Bachelor of Commerce (B.Com-Hons)</option>
      <option value="5">Bachelor of Commerce (Hons) - Accounting)</option>
      <option value="6">Bachelor of Hotel Management (BHM)</option>
	   <option value="7">M.Com in Financial Analysis)</option>
      <option value="8">Master in Business Administration- Executive MBA</option>
      <option value="9">Master of Business Admistration (MBA)</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
  

   <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Department</label>
   <div class="form-group">
    <select class="custom-select" name="department" required>
      <option value="1">Department of Business Administration</option>
      <option value="2"> Department of Hotel Management</option>
      <option value="3">Department of Management</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
  
	
	 <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Semester</label>
   <div class="form-group">
    <select class="custom-select"  name="semester" required>
      <option value="1">I</option>
      <option value="2">II</option>
      <option value="3">III</option>
	  <option value="4">IV</option>
      <option value="5">V</option>
      <option value="6">VI</option>
	  <option value="7">VII</option>
      <option value="8">VIII</option>
      
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
  
  </div>
 <div>

<form method="post">
    <div class="row">
        <div class="col-sm-6"><b>1. When you meet students who have taken a similar programme at other Universities do you feel that your programme is ?</b></div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q156" name="a1" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q157" name="a1" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q158" name="a1" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q159" name="a1" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q160" name="a1" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
       <div class="row">
        <div class="col-sm-6"><b>2. How do you rate the student-teacher relationship in the university as a whole?</b></div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q128" name="a2" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q129" name="a2" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q130" name="a2" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q131" name="a2" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q132" name="a2" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<p><b>3. Please give a rating of your program on the following :-</b></p>
	 <div class="row">
        <div class="col-sm-6">a.) Faculty effectiveness in terms of knowledge and content</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q228" name="a3" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q229" name="a3" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q230" name="a3" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q231" name="a3" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q232" name="a3" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">b.) Skill of linking subject to life experience & creating interest in the subject</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q328" name="b3" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q329" name="b3" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q330" name="b3" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q331" name="b3" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q332" name="b3" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">c.) Faculty teaching methodology and communication skills</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q428" name="c3" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q429" name="c3" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q430" name="c3" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q431" name="c3" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q432" name="c3" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">d.) Helps students in realizing their strengths and developmental needs</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q528" name="d3" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q529" name="d3" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q530" name="d3" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q531" name="d3" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q532" name="d3" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">e.) Communication of Information by department is in time</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q628" name="e3" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="629" name="e3" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q630" name="e3" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q631" name="e3" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q632" name="e3" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">f.) Student-teacher relationship in your department</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q728" name="f3" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q729" name="f3" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q730" name="f3" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q731" name="f3" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q732" name="f3" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">g.) Efforts are made by the institute/ teachers to inculcate soft skills, life skills and employability skills to make you ready for the world of work.</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q828" name="g3" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q829" name="g3" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q830" name="g3" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q831" name="g3" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q832" name="g3" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">h.) The institute takes active interest in promoting internship, student exchange, field visit opportunities for students.</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q928" name="h3" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q929" name="h3" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q930" name="h3" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q931" name="h3" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q932" name="h3" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	
	<p><b>4. Overall Rating of the Programme /Infrastructure/other facilities </b></p>
	<p><b>Teaching and Learning</b></p>
	 <div class="row">
        <div class="col-sm-6">a.) Academic content</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q248" name="a4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q249" name="a4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q250" name="a4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q251" name="a4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q252" name="a4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">b.) Effectiveness of faculty feedback system</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q1328" name="b4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1329" name="b4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1330" name="b4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1331" name="b4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q1332" name="b4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">c.) Fairness of evaluation</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q1428" name="c4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1429" name="c4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1430" name="c4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1431" name="c4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q1432" name="c4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">d.) Interaction with faculty</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q1528" name="d4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1529" name="d4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1530" name="d4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1531" name="d4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q1532" name="d4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">e.) Curriculum content</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q1628" name="e4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="1629" name="e4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1630" name="e4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1631" name="e4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q1632" name="e4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<p><b>Continuous assessment system</b></p>
	<div class="row">
        <div class="col-sm-6">f.) Understanding the course</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q1728" name="f4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1729" name="f4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1730" name="f4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1731" name="f4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q1732" name="f4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">g.) Early discovery of difficulties</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q1828" name="g4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1829" name="g4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1830" name="g4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1831" name="g4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q1832" name="g4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">h.) Discovering area of strength and weakness</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q1928" name="h4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1929" name="h4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1930" name="h4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q1931" name="h4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q1932" name="h4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	
	<div class="row">
        <div class="col-sm-6">i.) Continuous self- assessment</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q2248" name="i4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2249" name="i4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2250" name="i4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2251" name="i4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q252" name="i4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<p><b>Infrastructure</b></p>
	<div class="row">
        <div class="col-sm-6">j.) Infrastructure</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q2328" name="j4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2329" name="j4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2330" name="j4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2331" name="j4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q2332" name="j4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">k.) Library facilities (Books, journals, reading material)</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q2428" name="k4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2429" name="k4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2430" name="k4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2431" name="k4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q2432" name="k4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">l.) Computer Lab/Other Lab facilities</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q2528" name="l4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2529" name="l4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2530" name="l4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2531" name="l4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q2532" name="l4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<p><b>Support Facilities</b></p>
	<div class="row">
        <div class="col-sm-6">m.) Sports facilities</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q2628" name="m4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="2629" name="m4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2630" name="m4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2631" name="m4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q2632" name="m4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">n.) Hostel facilities(If applicable) </div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q2728" name="n4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2729" name="n4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2730" name="n4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2731" name="n4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q2732" name="n4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">o.) Wi-Fi and internet facility</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q2828" name="o4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2829" name="o4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2830" name="o4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2831" name="o4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q2832" name="o4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">p.) Cleanliness/Maintenance of premises</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q2928" name="p4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2929" name="p4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2930" name="p4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q2931" name="p4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q2932" name="p4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	
	<div class="row">
        <div class="col-sm-6">q.) Recreational /Canteen/Mess facilities</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q3248" name="q4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3249" name="q4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3250" name="q4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3251" name="q4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q3252" name="q4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">r.) Health care /Medical facility</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q3328" name="r4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3329" name="r4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3330" name="r4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3331" name="r4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q3332" name="r4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">s.) Participation in Extra-curricular activities of department/university</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q3428" name="s4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3429" name="s4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3430" name="s4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3431" name="s4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q3432" name="s4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">t.) Functioning of placement cell</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q3528" name="t4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3529" name="t4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3530" name="t4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3531" name="t4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q3532" name="t4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>

	<div class="row">
        <div class="col-sm-6">u.) Cleanliness of washroom</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q3628" name="u4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="3629" name="u4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3630" name="u4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3631" name="u4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q3632" name="u4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">v.) Learning from industrial trip/workshop/quest lectures </div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q3728" name="v4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3729" name="v4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3730" name="v4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3731" name="v4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q3732" name="v4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">w.) Support and assistance of administrative staff(Finance, Admission, AMS)</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q3828" name="w4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3829" name="w4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3830" name="w4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3831" name="w4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q3832" name="w4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-sm-6">x.) Complaint redressal committees of the university</div>
        <div class="col-sm-15">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" id="q3928" name="x4" value="1" /> very poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3929" name="x4" value="2" /> poor
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3930" name="x4" value="3" /> satisfactory
                </label> 
                <label class="btn btn-default">
                    <input type="radio" id="q3931" name="x4" value="4" /> good
                </label> 
                <label class="btn btn-default active">
                    <input type="radio" id="q3932" name="x4" checked="checked" value="5" /> Excellent
                </label>
            </div>
        </div>
    </div>
	
	<div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Any other suggestions</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
	
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	
</form>


  

  </div>
</form>
	
  </body>
</html>
