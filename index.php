<?php require("script.php")?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Prebuilt Layout</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">

  </head>
  <body style="background-color: aqua">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><a class="navbar-brand" href="#">ELDYSA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
             </li>
             
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
       </div>
    </nav>

    <div class="jumbotron jumbotron-fluid text-center">
      <h1 class="display-4">Digital Exodus</h1>
      <p class="lead">Responsibility saves lives !!</p>
      <hr class="my-4">
      <p>Do not forget to click to your name before you go out and after your arrival to Compound.</p>
     
    </div>
    <div class="container">
      
       <div class="row">
          <div class="col-md-6 text-center" id="left">
             <div class="card">
				 
				 <script>
						var container = document.getElementById("left");
					 	for (let i = 1; i < 49; i++) {
							
							const idThis=i;
							
							const dDiv = document.createElement('div');
							dDiv.id=idThis;
							dDiv.class="card-body";
							dDiv.style="background: yellow";
							
							
							const hH3 = document.createElement('h3');
							hH3.innerHTML='No'+idThis;
							
							const p1 = document.createElement('p');
							p1.innerHTML="GREEN --&gt; YOU ARE INSIDE";
							
							const p2 = document.createElement('p');
							p2.innerHTML="RED --&gt; YOU ARE OUTSIDE";
							
							const b = document.createElement('button');
							
							
							b.innerHTML="Change Situation";
							b.class="btn btn-info btn-md";
							b.onclick=function(){
								
								b.action="";
								b.method="POST";
								
								if(document.getElementById(idThis).style.background == "green"){
								
									document.getElementById(idThis).style.background = "red";
								}
								else {
									document.getElementById(idThis).style.background = "green";
								}
								b.type="submit";							
								};
							
							var bl = document.createElement('hr');
							bl.style.border='solid';
							bl.style.color='rgba(0,0,0,0.5)';
							
							dDiv.appendChild(hH3);
							dDiv.appendChild(p1);
							dDiv.appendChild(p2);
							dDiv.appendChild(b);
							dDiv.appendChild(bl);
							
							container.appendChild(dDiv);
							
						}
						
					</script>
				 
                  
				
					<script>
					  function changeSituation(idx){
						  
					  }
				  </script>
				</div>
				 
             </div>
          
          <div class="text-center col-md-6" id="right">
             <div class="card">
                <script>
				 var container2 = document.getElementById("right");
					 	for (let j = 49; j < 96; j++) {
							
							const idThis2=j;
							
							const dDiv2 = document.createElement('div');
							dDiv2.id=idThis2;
							dDiv2.class="card-body";
							dDiv2.style="background: yellow";
							
							const hH3 = document.createElement('h3');
							hH3.innerHTML='No'+idThis2;
							
							const p3 = document.createElement('p');
							p3.innerHTML="GREEN --&gt; YOU ARE INSIDE";
							
							const p4 = document.createElement('p');
							p4.innerHTML="RED --&gt; YOU ARE OUTSIDE";
							
							const b = document.createElement('button');
							
							
							b.innerHTML="Change Situation";
							b.class="btn btn-info btn-md";
							b.onclick=function(){
								if(document.getElementById(idThis2).style.background == "green"){
									document.getElementById(idThis2).style.background = "red";
								}
								else {
									document.getElementById(idThis2).style.background = "green";
								}
								
								};
							
							
							var bl = document.createElement('hr');
							bl.style.border='solid';
							bl.style.color='rgba(0,0,0,0.5)';
							
							dDiv2.appendChild(hH3);
							dDiv2.appendChild(p3);
							dDiv2.appendChild(p4);
							dDiv2.appendChild(b);
							dDiv2.appendChild(bl);
							
							container2.appendChild(dDiv2);
							
						}
						
					</script>
				 </script>
             </div>
          </div>
       </div>
       <br>
       <hr>
       <div class="row">
          <div class="text-center col-lg-6 offset-lg-3">
            <h4>Thanks in advnace</h4>
            <p>ELDYSA/IT &copy; 2022 &middot; All Rights Reserved</p>
          </div>
       </div>
    </div>
	  
	  
   
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>
