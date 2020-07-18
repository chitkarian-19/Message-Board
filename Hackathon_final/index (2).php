<!DOCTYPE html>
<html lang="en">
<head>
  <title>Amazon.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
     /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .center{
	    position:absolute;
		left:50%;
		top:50%;
		transfrom:translate(-50%,-50%);
		font-weight:Bold;
		color:Black;
		font-size:50px;
	}
	.img{
	  width:100px;
	  height:80px;
	  margin:2px;
	}
	
	.img{
	  width:100px;
	  height:80px;
	  margin:20px;
	  cursor:grab;
	}
	.main-img{
	  width:10px;
	  height:20px;
	  
	}
	.checked{
   color:orange;
  }
  ul.a {
  list-style: none; /* Remove HTML bullets */
  padding: 0;
  margin: 0;
}

    li.b { 
  padding-left: 16px; 
     }

  li.b::before {
  content: "•"; /* Insert content that looks like bullets */
  padding-right: 8px;
  color: gray; /* Or a color you prefer */
}
   .s{
	   background-color:black;
	}
	.k{
	   background-color:#4CAF50;
	   border-radius:7px;
	   color:white;
	   font-weight:Bold;
	   font-size:24px;
	}
	.t{
	 font-weight:Bold;
	   font-size:24px;
	}
	.list-group{
	   width:300px;
	}
	.btn-s{
	background-color:black;
	}
	.btn-info{
	background-color:black;
	}
	
  </style>
  <script>
   
  </script>
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
		   var code;
function createCaptcha() {
  //clear the contents of captcha div first 
  document.getElementById('captcha').innerHTML = "";
  var charsArray =
  "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 100;
  canv.height = 50;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
function validateCaptcha() {
  event.preventDefault();
  debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
   
    flag=1;
    
  }else{
    alert("Invalid Captcha. try Again");
    createCaptcha();
  }
}
		 </script>
  <style>
    #submit{
      display:none;
       }
  </style>

<script>
var number = /([0-9])/;
var alphabets = /([a-z])/;
var upper=/([A-Z])/;
var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
$(document).ready(function(){
$("#pwd").keyup(function(){

if($('#pwd').val().length>4 && $('#pwd').val().length<8)
$("#a").width("40%").css("background-color","red");
if($('#pwd').val().length>=8)
$("#a").width("50%").css("background-color","orange");
if($('#pwd').val().match(number) && $('#pwd').val().length>=8)
$("#a").width("60%").css("background-color","blue");
if($('#pwd').val().match(alphabets) && $('#pwd').val().length>=8)
$("#a").width("60%").css("background-color","blue");
if($('#pwd').val().match(upper) && $('#pwd').val().length>=8)
$("#a").width("60%").css("background-color","blue");
if($('#pwd').val().match(number) && $('#pwd').val().match(alphabets) &&  $('#pwd').val().length>=8)
$("#a").width("70%").css("background-color","lightblue");
if($('#pwd').val().match(number) && $('#pwd').val().match(alphabets) &&  $('#pwd').val().length>=8 && $('#pwd').val().match(upper))
$("#a").width("80%").css("background-color","lightgreen");
if($('#pwd').val().match(number) && $('#pwd').val().match(alphabets) && $('#pwd').val().match(special_characters)&&$('#pwd').val().length>=8)
$("#a").width("100%").css("background-color","green");
});
});
</script>


<script>
var flag=0;
$("document").ready(function(){

$("button").click(function(){

if(flag==1)
{

$("#submit").show();
}
else
{
$("#submit").hide();


}
});
});




</script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="createCaptcha()" >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#section4">About</a></li>
        
        <li><a href="#section3">Contact</a></li>
		<li>
		<div class="dropdown">
    
      
   </div>
     
</li>
		
         <li><button type="button" class="btn btn-danger" style="margin-left:60px;margin-top:10px;" data-target="#id01" data-toggle="modal" >Signup Alumni</button>
		      
                <div id="id01" class="modal fade"  role="dialog" >
                <div class="modal-dialog" >
                  <!-- Modal content-->
                <div class="modal-content" style="width:800px;height:800px;">
                      <div class="modal-header " style="background-color:#4CAF50;" >
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h3 class="modal-title text-center" style="font-weight:Bold;">Registration Alumni</h4>
                </div>
                <div class="modal-body ">
				    <div  style="margin:10px;">
                          
				         <form action="registration_alumni.php" method="post" >
                         <div class="row">
                                
                                             </div>
                                            <div class="row">
                                                    <div class="col-25"><label>First Name:<font color="red">*</font></label></div>
                                                    <div class="col-75">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="name" type="text" class="form-control" name="name" >
    </div>
</div>
                                            </div>
                                             <div class="row">
                                                    <div class="col-25"> <label> Last Name:<font color="red">*</font></label></div>
                                                    <div class="col-75">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="name" type="text" class="form-control" name="name" >
    </div></div>
                                            </div>

								<div class="row">
                                        <div class="col-25"><label>Contact:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="text"  name="contact" value="" placeholder="eg - Google" class="form-control border-input" pattern="[0-9]{10}" required></div>
                                </div>
								<div class="row">
                                        <div class="col-25"><label>E-mail:<font color="red">*</font></label></div>
                                        <div class="col-75">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div></div>
                                </div>
								<div class="row">
                                        <div class="col-25"><label>Aadhar Details:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="text"  name="aadhar_num" value="" placeholder="eg - Google" class="form-control border-input"  pattern="[0-9]{12}" title="enter 12 digit no." required></div>
                                </div>
                                   <div class="row">
                                        <div class="col-25"><label>Password:<font color="red">*</font></label></div>
                                        <div class="col-75">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input type="password" class="form-control" minlength="8" id="pwd">
</div>
<br>
 
 <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%" id="a">
     
    </div></div>
                                    </div>
                                                                       
      
       
       
  
 
                                          <div id="captcha">
                                                 </div>
                                            <input type="text" placeholder="Captcha" id="cpatchaTextBox" required/>
                                             <button type="submit" class="btn btn-success" onclick="validateCaptcha()">Submit</button>
                                         
         
                                                    
				<center><input type="submit" id="submit"  value="SUBMIT" class="registerbtn btn btn-success" required ></input></center>
                        </div>
                  </form>
              
           
				 
				</div>
        </div>
    </div>
    </div>

			 </li>
        <li><button type="button" class="btn btn-danger" style="margin-left:60px;margin-top:10px;" data-target="#id02" data-toggle="modal" >Signup Student</button>
          
                <div id="id02" class="modal fade"  role="dialog" >
                <div class="modal-dialog" >
                  <!-- Modal content-->
                <div class="modal-content" style="width:800px;height:800px;">
                      <div class="modal-header " style="background-color:#4CAF50;" >
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h3 class="modal-title text-center" style="font-weight:Bold;">Registration Student</h4>
                </div>
                <div class="modal-body ">
            <div  style="margin:10px;">
                           <div class="row">
                  
               </div>
                 <form action="registration_student.php" method="post" >
                         <div class="row">
                                <div class="col-25"> <label>Mr/Ms/Mrs:</label></div>
                                                         <div class="col-md-2">
                                                         <select name="gender"  class="form-control border-input"> 
                                                          <option value="Mrs">Mr</option>
                                                          <option value="Ms">Ms</option>
                                                          <option value="Mrs">Mrs</option>
                                                          <option value="others">others</option>
                                                        </select> 
                                                     </div>
                                             </div>
                                            <div class="row">
                                                    <div class="col-25"><label>First Name:<font color="red">*</font></label></div>
                                                    <div class="col-75"><input type="text"  name="firstname" value="" placeholder="eg - Johnny" class="form-control border-input" required></div>
                                            </div>
                                             <div class="row">
                                                    <div class="col-25"> <label> Last Name:<font color="red">*</font></label></div>
                                                    <div class="col-75"><input type="text"  name="lastname" value="" placeholder="eg - Bonzella" class="form-control border-input"  required> </div>
                                            </div>

                <div class="row">
                                        <div class="col-25"><label>Contact:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="text"  name="contact" value="" placeholder="eg - Google" class="form-control border-input" required></div>
                                </div>
                <div class="row">
                                        <div class="col-25"><label>E-mail:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="text"  name="mail" value="" placeholder="eg - Google" class="form-control border-input" required></div>
                                </div>
                <div class="row">
                                        <div class="col-25"><label>Aadhar Details:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="text"  name="aadhar_num" value="" placeholder="eg - Google" class="form-control border-input" required></div>
                                </div>
                                   <div class="row">
                                        <div class="col-25"><label>Password:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="password"  name="password" value="" placeholder="eg - Google" class="form-control border-input" required></div>
                                    </div>
                                                                       
      
       
       
  
 
                                          <div id="captcha">
                                                 </div>
                                            <input type="text" placeholder="Captcha" id="cpatchaTextBox" required/>
                                             <button type="submit" class="btn btn-success" onclick="validateCaptcha()">Submit</button>
                                         
         
                                                    
        <center><input type="submit"  value="SUBMIT" class="registerbtn btn btn-success" required ></input></center>
                        </div>
                  </form>
             
         
        </div>
        </div>
    </div>
    </div>

       </li>
        <li><button type="button" class="btn btn-success" style="margin-left:40px;margin-top:10px;" data-target="#id03" data-toggle="modal" >Login Student</button>
         
                <div id="id03" class="modal fade"  role="dialog" >
                <div class="modal-dialog" >
                  <!-- Modal content-->
                <div class="modal-content" style="width:500px;height:500px;">
                      <div class="modal-header " style="background-color:#4CAF50;" >
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h3 class="modal-title text-center" style="font-weight:Bold;">Login Page</h4>
                </div>
                <div class="modal-body ">
            <div id='id01' style="margin:10px;">
                           <div class="row">
                
               </div>
                 <form action="validation_student.php" method="post">
                         
                                            
                  <div class="row">
                                                    <div class="col-25"><label>First Name:<font color="red">*</font></label></div>
                                                    <div class="col-75"><input type="text"  name="firstname" value="" placeholder="eg - Johnny" class="form-control border-input" required></div>
                                            </div>
                
                <div class="row">
                                        <div class="col-25"><label>E-mail:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="text"  name="mail" value="" placeholder="eg - Google" class="form-control border-input" required></div>
                                </div>
                
                                   <div class="row">
                                        <div class="col-25"><label>Password:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="password"  name="password" value="" placeholder="eg - Google" class="form-control border-input" required></div>
                                </div>         
                                      <br>
                                         
                                                    
        <center><input type="submit"  value="SUBMIT" class="registerbtn btn btn-success" required ></input></center>
                        </div>
                  </form>
              <script>
          function myF()
        {
         alert("Feedback Successful for startup form!");
        }
                    function newrow(id){
                            var row= id.parentNode; 
                               var box=document.getElementById("box");
                           var dnew=row.cloneNode(true);
                           box.appendChild(dnew);
                             var deletelist= box.getElementsByClassName("button-delete");
                           var display="none";
                           if(deletelist.length>1){
                               display="";}
                           for(i=0;i<deletelist.length;i++){
                               deletelist[i].style.display= display; 
                           }
                           }
                           
                       
                           function deleterow(id){
                               var row= id.parentNode; 
                               var box=document.getElementById("box");
                               box.removeChild(row);
                               var deletelist= box.getElementsByClassName("button-delete");
                               if(deletelist.length<2){
                                   deletelist[0].style.display="none"; } 
                           }
                       
                           function m1()
    {
        document.getElementById('id01').style.display='block';
    }
                       
                       </script>
            <script>
                    function myFunction1()
                    {
                    var x = document.getElementById("mySelect1").value;
                    document.getElementById("demo1").value = x;
                    }
                    </script>
<script>
        function myFunction()
    {
        var x = document.getElementById("mySelect").value;
        document.getElementById("demo").value = x;
        }
        </script>

         
        </div>
        </div>
    </div>
    </div>

       </li>
                <li><button type="button" class="btn btn-success" style="margin-left:40px;margin-top:10px;" data-target="#id04" data-toggle="modal" >Login Alumni</button>
         
                <div id="id04" class="modal fade"  role="dialog" >
                <div class="modal-dialog" >
                  <!-- Modal content-->
                <div class="modal-content" style="width:800px;height:800px;">
                      <div class="modal-header " style="background-color:#4CAF50;" >
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h3 class="modal-title text-center" style="font-weight:Bold;">Login Page</h4>
                </div>
                <div class="modal-body ">
            <div style="margin:10px;">
                           <div class="row">
                  
               </div>
                 <form action="validation_alumni.php" method="post">
                         
                                            
                  <div class="row">
                                                    <div class="col-25"><label>First Name:<font color="red">*</font></label></div>
                                                    <div class="col-75"><input type="text"  name="firstname" value="" placeholder="eg - Johnny" class="form-control border-input" required></div>
                                            </div>
                
                <div class="row">
                                        <div class="col-25"><label>E-mail:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="text"  name="mail" value="" placeholder="eg - Google" class="form-control border-input" required></div>
                                </div>
                
                                   <div class="row">
                                        <div class="col-25"><label>Password:<font color="red">*</font></label></div>
                                        <div class="col-75"><input type="password"  name="password" value="" placeholder="eg - Google" class="form-control border-input" required></div>
                                </div>         
                                      
                                         
                                                    
        <center><input type="submit"  value="SUBMIT" class="registerbtn btn btn-success" required ></input></center>
                        </div>
                  </form>
              
        </div>
        </div>
    </div>
    </div>

       </li>
        
	  </ul>
      <ul class="nav navbar-nav navbar-right ">
	    
        <li >
                		 
				 <div class="dropdown ">
                <button class=" btn dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:black;background-opacity:0.9;">
                   </button>
                  <ul class="dropdown-menu list1 s list-group" >
                  
                  </ul>
                 </div>
			</li>
      </ul>

    </div>
	
  </div>
			  
	
</nav>
   
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img1.jpg" alt="Image">
         
        <img>		
      </div>
	  <div class="item">
        <img src="img9.jpg" alt="Image">
             <div class="center"></div>
      </div>
	 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  

  </br></br>

  <div class="container" >    
 <div class="media">
    <div class="media-left">
      <img src="imgashok.jpg" class="media-object" style="width:150px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><b>Ashok Chitkara</b><hr></h4>
<br>
      <p>With exemplary elegance and polished ideas, with high calibre and right balance of thoughts and beliefs, Dr Ashok K Chitkara is the face of potential youth and equitable education. A renowned Mathematician and a legendary Academician, Dr. Ashok K Chitkara is the Chancellor of Chitkara University, Punjab and Chitkara University, Himachal Pradesh. His perspective and farsightedness in the field of education has rendered future promising prospects in the fullness of time.</p>
    </div>
  </div>
       

<br>

<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="section3">
    <h2 class="w3-wide w3-center"><b>CONTACT</b><hr></h2>
   
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chandigarh, INDIA<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="btn btn-success w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  </div>
<div id="section4" class="jumbotron">

<center><h3><b>About</b><hr></h3></center>


</div>

<!-- Image of location/map -->
<img src="img3.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge" id="section4">
 <a href="https://www.facebook.com/ChitkaraU/"> <i class="fa fa-facebook-official w3-hover-opacity" style="color:blue;"></i></a>
  <a href="https://www.instagram.com/chitkarau/?hl=en"><i class="fa fa-instagram w3-hover-opacity" style="color:orange;"></i></a>
   
  
   <a href="https://twitter.com/ChitkaraU
"><i class="fa fa-twitter w3-hover-opacity" style="color:blue;"></i></a>
  <a href="https://in.linkedin.com/school/chitkara-university/"><i class="fa fa-linkedin w3-hover-opacity" style="color:DodgerBlue;"></i></a>
  
</footer>


</body>
</html>
 /*<?php
           include 'conn.php';
          /* $fname = $_POST['fname'];
           $Interview = $_POST['Interview'];
           $Crack = $_POST['Crack'];*/
             $q = "select * from student";

             $query =mysqli_query($con,$q);
          while($res = mysqli_fetch_array($query)) {
        
          ?>
          <tr class="text-center">
             <td><?php echo $res['id']; ?></td>
             <td><?php echo $res['fname']; ?></td>
             <td><?php echo $res['lname']; ?></td>
             <td><?php echo $res['password']; ?></td>
             <td><?php echo $res['email']; ?></td>
            
            <td><button class="btn btn-warning"><a href="delete.php?id=<?php echo $res['id']; ?>">delete</a></button></td>
          </tr> 
          <?php
              }
          ?>