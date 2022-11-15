<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container-fluid">
	  <ul id="clothingnav1" class="nav nav-tabs" role="tablist">
	    <li class="nav-item"> <a class="nav-link active" href="#home1" id="hometab1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><b>Daftar Transaksi</b></a> </li>
	    <li class="nav-item"> <a class="nav-link" href="#paneTwo1" role="tab" id="hatstab1" data-toggle="tab" aria-controls="hats"><b>Form Input</b></a> </li>
  </ul>
	  <!-- Content Panel -->
	  <div id="clothingnavcontent1" class="tab-content">
	    <div role="tabpanel" class="tab-pane fade show active" id="home1" aria-labelledby="hometab1" >
	    <br>
			<?php 
			require('../charlie/list.php') ;
			?>
			  
        </div>
	    <div role="tabpanel" class="tab-pane fade" id="paneTwo1" aria-labelledby="hatstab1">
	    
		<br>
		<?php
		require('../charlie/form.php') ;
		?>
        
	   
  </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>