<?php
 session_start();
 if(!isset($_SESSION['email'])){
 	header('location:index.php');
 }

  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		body{
  			background-image: url("img/g2.jpg");
  			background-repeat: no-repeat;
  		}
  		#table{
  			background-color: #C7E1D0		;
  			margin-top: 2%;
  		}
  		#table1{
  			background-color:#F0F5F1		;	
  		}
  		#button1{
  			 left: 500px; 
  			 position: relative;
  			 background-color:  #5DC983	;
  		}
  		.result_container>.row
  		{
  			    border-radius: 50%;
  		}
  		.result_container>.row>.column>.result>ul>li
  		{
  			margin-top: 2%;
  			margin-right: 2%; 
  			display: inline-block;
  			padding: 20px;
  			background-image: url("img/p1.jpg");	
  			background-repeat: no-repeat;
  			 border-radius: 25%;
  
  		}
  		.result_container>.row>.column>.result>ul>li>span
  		{
  			margin-left: 5%;
  			width:300px;
  			display:block;
  			border-radius: 50%;

  			padding: 20px;
  			


  		}

  		.result_container>.row>.column>.result>ul>li>button
  		{
  		
  			background-color: #5c85d6;
  		}
  		#t5{
  			font-size: 30px;
  			color: white; 
  		}
  		
  		/*#p1{
  				width: 100px;	
		

  		}*/
  	</style>
  	<script type="text/javascript">
  		var emailofbuyer="";
		var sellersfromserver="";
		var unorderedlist="";
		var ftable="";
		var thead="";
		var colrow="";
		var sellers_fruits_from_server="";
  		$(document).ready(function(){
  			
			infofsellers();
		    $(document).on("click","#shop",function(){
		    	console.log($(this).attr("name"));
		    	 $("ul").remove();
		    	 $.post("get_fruit_information.php",
				    {"email":sellersfromserver[$(this).attr("name")].semail},
				    function(data,status){
				    	console.log(data);
				    	sellers_fruits_from_server=JSON.parse(data);
				    	drawthetable(sellers_fruits_from_server);
				    }
		    	);

		    });
  		});
  		function infofsellers()
  		{
  			$("table").remove();
  			$("ul").remove();
  			$.post("getSellersInfo.php",
				    {"email":""},
				    function(data,status){
				    	console.log(data);
				    	sellersfromserver=JSON.parse(data);
				    	drawbox(sellersfromserver);
				    }
		    );
  		}
  		function drawbox(sellersFES)
  		{

  			unorderedlist = $("<ul  class='list-group'/>");
  			$("#result").append(unorderedlist);
  			for(var i=0;i<sellersFES.length;i++)
  			{
  				drawboxitems(sellersFES[i],i);
  			}
  		}
  		function drawboxitems(sellers,index)
  		{
  			

  			unorderedlist.append($("<li class='list-group-item'><span>"+sellers.sname+"</span><span>"+sellers.semail+"</span><span>"+sellers.shopname+"</span><button class='btn btn-default' type='button' id='shop' name='"+index+"'>shop</button></li>"));
  		}
  		function drawthetable(fruitsQPF){
			//console.log(fruits.length);
			ftable= $("<table class='table table-striped' id='table'/>");
			thead=$("<thead/>");
			colrow=$("<tr >");
			thead.append(colrow);
			colrow.append("<th>FruitName</th>");
			colrow.append("<th>Quantity</th>");
			colrow.append("<th>Price</th>");
			ftable.append(thead);
			$("#result").append(ftable);
			for (var i = 0; i < fruitsQPF.length; i++) {
        			drawtablerow(fruitsQPF[i],i);
    		}
		}
		function drawtablerow(fruit,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr id='table1'/>");
				var tbody=$("<tbody id='table1'/>");
				  ftable.append(tbody);
			    tbody.append(row); 
			    //row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete.png' width='10' height='10'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    //row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
		}       
  	      ;
  	</script>
</head>
<body >


	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
  <a class="navbar-brand" href="#"><?php 
			echo $_SESSION['email'];


		?></a>
		
   <div class="collapse navbar-collapse" id="navbarText">
    
    <span class="nav navbar-nav navbar-right"   >
    	    <a id="t5" href="index.php?logout='1' ">logout&nbsp;&nbsp;</a>
    </span>
  </div>
</div>
</nav>
	
	

<div class="container result_container" >
		<div class="row"  >
			<div class="column" >
				<button type="button" class="btn btn-default" id="button1" onclick="infofsellers()">DashBoard Home</button>
				<div class="result" id="result">
						
				</div>
			</div>
			
		</div>
</div>


	

	
	
</body>
</html>