<!DOCTYPE html>
<html>
<title>User Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
   function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
  }
 </script>
 <script>
   var c;
    var x;
    var y;
    var r;
    var count=0;
    $(document).ready(function(){
      //alert("Please Click on the reply button to reply to the comment as well as to see the replies");
      $(document).on("click",'.commentbtn',function(){
        x=$(this).parent().prev().children().first().next().val();
        y=$(this).parent().prev().children().first().val();
        //var d = new Date();
//var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
        if(x==''||x==null||y==''||y==null)
        {
         alert("Please fill all details first");
        }
         else
         {
          c="<div class='media'>"+"<div class='media-left'>"+"<img src='user1.jpg' class='media-object img-circle' style='height:100px;width:100px;'>"+"</div>"+"<div class='media-body'>"+"<h4 class='media-heading'>"+y+"</h4>"+"<p>"+x+"</p>"+"<button class='btn btn-success replybtn' style='float:right;'>Reply</button>"+"<p>"+"<span class='glyphicon glyphicon-thumbs-up lcount'> "+0+"</span>       "+"      <span class='glyphicon glyphicon-comment ccount'> "+0+"</span>"+"</p>"+"</div>"+"<div class='slider'>"+"<div class='media'>"+"<div class='media-left'>"
    +"<img src='user1.jpg' class='media-object img-circle' style='height:100px;width:100px;'>"
    +"</div>"+"<div class='media-body'>"+
  "<input type='text' class='form-control replyusername' placeholder='Enter your Name here'>"+
      "<textarea rows='4' cols='60' class='form-control replybox' style='resize:none;'  placeholder='Add your comments here'></textarea>"+"</div>"+
    "<div class='media-right'>"+
      "<button type='button' class='btn btn-success commentbtn'>Post</button>"+
    "</div>"+
    "<br><br></div>"+"</div>"+"</div>";
          $(this).parent().parent().parent().append(c);
          c="";
          $(this).parent().prev().children().first().next().val("");
          $(this).parent().prev().children().first().val("");
          $(".slider").hide("slow");
          if(count>0)
          $(this).parent().parent().parent().prev().children("p").children("span").next().text(parseInt($(this).parent().parent().parent().prev().children("p").children("span").next().text())+1);
        count+=1;
         }
      });
      $(document).on("click",'.replybtn',function(){
      $(this).parent().next().slideToggle("slow");
      });
      $(document).on("click",'.lcount',function(){
      $(this).text(parseInt($(this).text())+1);
      });
      
    });
 </script>
<style>
html,body,h1,h2,h3,h4,h5,h6,a,p{font-family: "Roboto", sans-serif}
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('/w3images/profile_girl.jpg');
  min-height: 100%;
}
.media-object{
      width:140px;height:145px;
    }
   .slider
   {
    padding:10px;
    
   }
   .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
 }
   body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color:black;
  }

  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  #pc
  {
    height:278px;
  }
  #read
  {
    height:278px;
  }
  .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color:gray;
  padding: 14px 16px;
  background-color: inherit;
  font-family:verdana;
  margin: 0;
}

.

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown:hover .dropbtn {
  background-color:#ddd;
}
</style>
</head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="User.jpeg" style="width:100%;height:500px;" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Sam Robin</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Web Devloper</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Haryana,India</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>abc925@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>4898990998</p>
          <hr>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
         
          <p>Web Devlopment</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Coding</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p></p>
          
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Punjabi</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p></p>
          
          <br>
        </div>
      </div><br>

   
    </div>
    <!--Right Column-->
     <div class="w3-twothird">
      <p style="font-size:100px;font-family:Roboto;">Sam Robin</p>
       <div class="btn-group ">
    <div class="btn-group">
 <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Home</button>
        <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
           <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="User.jpeg" style="width:100%;height:500px;" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Sam Robin</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Web Devloper</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Haryana,India</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>abc925@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>4898990998</p>
          <hr>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
         
          <p>Web Devlopment</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Coding</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p></p>
          
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Punjabi</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p></p>
          
          <br>
        </div>
      </div><br>
    </div>
      
     </div>
 
  
 <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">Professional</button>
 <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Bio-Data</h2>
      </header>
      <div class="w3-container">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer / TCS</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2024 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Developer / Wipro</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2021 - Dec 2024</h6>
          <p>Working as a Consultant,from the last 3 years ,had a nice experience while ineracting with different peoples</p><hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front-End Designer / Infosys</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2019- Mar 2020</h6>
          <p>Working as a developer,from the last 2 years having a very awesome experience</p><br>
        </div>
      </div>
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>S.T Vivekanand School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>CBSE Board :10 CGPA (10 th class),2016</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>GMSSS ,Chandigarh</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2016-2018</h6>
          <p>CBSE Board :80.6% (12 th class),2018</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Chitkara School Of Engineerng and Tecnology</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2018 - 2022</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>


      </div>
      
    </div>

 <button onclick="topFunction()" class="w3-button w3-black">Social</button>
    <script>
	   function topFunction() {
               document.body.scrollTop = 295;
             document.documentElement.scrollTop = 295;
                  }
	 </script>
	 
    
	    
 

       <div class="rows w3-card-4" style="margin-top:100px;">
          
          <div class="col-sm-12 a">
   <div class="media" class="commentdiv">
    <div class="media-left">
      <img src="user1.jpg" class="media-object img-circle">
    </div>
    <div class="media-body">
      <input type="text" class="form-control" placeholder="Enter your Name here" >
      <textarea rows="4" cols="100" class="form-control" style="resize:none;"  placeholder="Add your comments here"></textarea>
    </div>
    <div class="media-right">
      <button type="button" class="btn btn-success commentbtn" >Post</button>
    </div>
    <br>
    <br>
  </div>
</div>
	  
         
    </div>
	  
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  
</footer>
</body>
</html>