<?php require("script.php")?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eldysalna</title>

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
                <a class="nav-link" href="contactUs.html">Contact</a>
             </li>
             
          </ul>
</div>
    </nav>

    <div class="jumbotron jumbotron-fluid text-center">
      <h1 class="display-4">Digital Exodus</h1>
      <p class="lead">Responsibility saves lives !!</p>
      <hr class="my-4">
      <p>Do not forget to click to your name before you go out and after your arrival to Compound.</p>
			<p>GREEN --&gt; YOU ARE INSIDE. Total:<strong id="inside"></strong></p>
			<p>BLUE --&gt; YOU ARE AT WORK. Total:<strong id="atWork"></strong></p>
			<p>RED --&gt; YOU ARE OUTSIDE. Total:<strong id="outside"></strong></p>
   <script>
	   function measure(items){
		   		console.log(77);
		   document.getElementById('inside').innerHTML= (items.filter(item => item.status=='in')).length;
		   document.getElementById('atWork').innerHTML= (items.filter(item => item.status=='work')).length;
  		   document.getElementById('outside').innerHTML= (items.filter(item => item.status=='out')).length

	   }
	   
	   </script>
	   
		
		
    </div>
    <div class="container">
      
       <div class="row">
          <div class="col-md-4 text-center" id="left">
             <div class="card">
						 </div>
					</div>
					<div class="text-center col-md-4" id="middle">
             <div class="card">
             </div>
          </div>
          <div class="text-center col-md-4" id="right">
             <div class="card">
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
	<script>
					 	var items = <?php readJson() ?>;
						console.log(JSON.stringify(items));
						console.log(items);
						var containerLeft = document.getElementById("left");
						var containerMiddle = document.getElementById("middle");
						var containerRight = document.getElementById("right");
						var lastAppend = "right";
						items.forEach((item) => {			
							const dDiv = document.createElement('div');
							dDiv.id=item.id;
							dDiv.class="card-body";
							dDiv.style="background: yellow";
							
							const p1 = document.createElement('p');

							if(item.status === "out"){
								dDiv.style="background: red";
								p1.innerHTML=`YOU ARE OUTSIDE <br> Last update: ${item.lastChange}`;
							
							}
							else if (item.status === "in") {
								dDiv.style="background: green";
								p1.innerHTML=`YOU ARE INSIDE <br> Last update: ${item.lastChange}`;
							
							}
							else if (item.status === "work") {
								dDiv.style="background: blue";
								p1.innerHTML=`YOU ARE AT WORK <br> Last update: ${item.lastChange}`;
							
							} else {
								dDiv.style="background: yellow";
								p1.innerHTML="Not identified.";
							}
							const hH3 = document.createElement('h3');
							hH3.innerHTML=item.id;
							
							const b = document.createElement('button');
							b.innerHTML="Change State";
							b.class="btn btn-info btn-md";
							b.type="submit";
							b.onclick=function(){

								const statuses = ["out", "in", "work"];
								const currentIndex = statuses.indexOf(item.status);
								const nextIndex = (currentIndex + 1) % statuses.length;
								item.status = statuses[nextIndex];
								item.lastChange = (new Date()).toLocaleString();
								if(item.status === "out"){
									document.getElementById(item.id).style.background = "red";
									document.getElementById(item.id).getElementsByTagName('p')[0].innerHTML =`YOU ARE OUTSIDE <br> Last update: ${item.lastChange}`;
								}
								else if (item.status === "in") {
									document.getElementById(item.id).style.background = "green";
									document.getElementById(item.id).getElementsByTagName('p')[0].innerHTML =`YOU ARE INSIDE <br> Last update: ${item.lastChange}`;
								}
								else if (item.status === "work") {
									document.getElementById(item.id).style.background = "blue";
									document.getElementById(item.id).getElementsByTagName('p')[0].innerHTML =`YOU ARE AT WORK <br> Last update: ${item.lastChange}`;
								}	
								sendData(items);
								measure(items);
								
							};
							
							var bl = document.createElement('hr');
							bl.style.border='solid';
							bl.style.color='rgba(0,0,0,0.5)';
							
							dDiv.appendChild(hH3);
							dDiv.appendChild(p1);
							dDiv.appendChild(b);
							dDiv.appendChild(bl);
							const tempindex = items.indexOf(item);
							if (tempindex<=Math.round((items.length/3)+1))
							{
								
								containerLeft.appendChild(dDiv);
								lastAppend = "left";
							} else if (tempindex<=Math.round((items.length/3)+1)*2) {
								containerMiddle.appendChild(dDiv);
								lastAppend = "middle";
							}	else if (tempindex<=items.length) {
								containerRight.appendChild(dDiv);
								lastAppend = "right";
							}
								
							
						});
		measure(items);
						function sendData(items){
							var xhr = new XMLHttpRequest();
							xhr.open('POST', 'script.php', true);
							xhr.onload = function () {
								if(xhr.status !== 200){
									// Server does not return HTTP 200 (OK) response.
									// Whatever you wanted to do when server responded with another code than 200 (OK)
									return; // return is important because the code below is NOT executed if the response is other than HTTP 200 (OK)
								}
								// Whatever you wanted to do when server responded with HTTP 200 (OK)
								// I've added a DIV with id of testdiv to show the result there
								console.log(this.responseText);
							};
							var data = {items: 'fdfasd'};
							xhr.send(JSON.stringify(items));
							
						}

					</script>
</html>
