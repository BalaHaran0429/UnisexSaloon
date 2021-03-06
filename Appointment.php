<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="webthemez">
        <title>Saloon & Spa</title>
        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet"> 
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet"> 
 
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico"> 
    </head>
<body>
<div id="wrapper">
	<!-- start header -->
    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html" style="margin-top: 0px;">Saloon & Spa <br><br>&nbsp;&nbsp;&nbsp; unisex</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="index.html">Home</a></li>  
                        <li class="scroll active"><a href="index.html">Contact</a></li>  
                                              
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
	<body class="container-fluid">
	
	
			<br><br><br>

            <form class="container" id="contactForm" style="margin-left: 300px;">
                <h1 style="text-align: center; color: green; margin-left: -300px; padding: 50px 50px;">Book An Appointment</h1>
                <div class="col-md-8" style="margin-left: 0px;">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">
                                    Your Name
                                </label>
                                
                                <input type="text" class="form-control"
                                id="name" placeholder="Enter your name">
                            </div>
            
                            <div class="form-group">
                                <label for="exampleFormControlInput1">
                                     Contact No
                                </label>
                                
                                <input type="text" class="form-control"
                                id="num" placeholder="contact no">
                            </div>
                            <div class="form-group">
                                <label for="gender">
                                     Gender : 
                                </label>
                                <input type="text" class="form-control"
                                id="gender" placeholder="Your Gender">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><label>Male</i></label></li>
                                            <li><label>Female</label></li>
                                            <li><label>Other</label></li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            <div class="form-group">
                                <label for="msg">
                                     Category You want : 
                                </label>
                                <input type="text" class="form-control"
                                id="Category" placeholder="Category Seperated by Commas">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><label>Hair Cut</label></li>
                                            <li><label>Manicure</label></li>
                                            <li><label>Bleach</label></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><label>Facial</label></li>
                                            <li><label>Hair Spa</label></li>
                                            <li><label>Coloring</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">
                                      Appointment Date
                                    </label>
                                    
                                    <input type="text" class="form-control"
                                    id="date" placeholder="DD/MM/YY">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">
                                        Appointment Time
                                        <p style="font-size: 12px;">(working hours 10am to 10pm)</p>
                                    </label>
                                    
                                    <input type="text" class="form-control"
                                    id="time" placeholder="@6:30 am/pm">
                                </div>
                             
                            </div>
                           
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" style="margin-left:15px; margin-top:10px;" value="need a response">
<!--                         
                        <button type="submit" class="btn btn-primary"
                            style="margin-left: 15px; margin-top: 10px">
                            Submit
                        </button> -->

                    </div>
                </div>
                
                
            </form>
        
            <script src=
        "https://www.gstatic.com/firebasejs/3.7.4/firebase.js">
            </script>
            
            <script>
        var firebaseConfig = {
            apiKey: "AIzaSyCRXUxqbQ573tB-rNuEYR16RZRzFB3Hybs",
    authDomain: "unisex-spa-fc4d8.firebaseapp.com",
    databaseURL: "https://unisex-spa-fc4d8-default-rtdb.firebaseio.com",
    projectId: "unisex-spa-fc4d8",
    storageBucket: "unisex-spa-fc4d8.appspot.com",
    messagingSenderId: "562222680778",
    appId: "1:562222680778:web:057460f68239abd2440233",
    measurementId: "G-1RY3CZ3XD2"
          };
                firebase.initializeApp(firebaseConfig);
        
                var messagesRef = firebase.database()
                    .ref('Booking');
        
                
                document.getElementById('contactForm')
                    .addEventListener('submit', submitForm);
        
                function submitForm(e) {
                    e.preventDefault();
        
                    // Get values
                    var name = getInputVal('name');
                    var num = getInputVal('num');
                    var gender = getInputVal('gender');
                    var Category = getInputVal('Category');
                    var date = getInputVal('date');
                    var time = getInputVal('time');
                  
            
            
                    
                    saveMessage(name, num,gender,Category,date,time);
                    document.getElementById('contactForm').reset();
                }
        
                // Function to get get form values
                function getInputVal(id) {
                    return document.getElementById(id).value;
                }
        
                // Save message to firebase
                function saveMessage(name, num,gender,Category,date,time) {
                
        
                    var newMessageRef = messagesRef.push();
                    newMessageRef.set({
                        name: name,
                        num: num,
                        gender:gender,
                        Category: Category,
                        date:date,
                        time:time,
                        
                    });
                }
            </script>
	<script>
	
	</script>
</body>

	
	
	<br><br><br>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    All rights reserved by Saloon & Spa 2021 <a target="_blank" href="#" title="Free Bootstrap Themes and HTML Templates"></a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
</div>




<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>