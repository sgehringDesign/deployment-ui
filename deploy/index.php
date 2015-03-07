<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Deploy 2: Select Files </title>
  <?php include $_SERVER['DOCUMENT_ROOT']."/assets/templates/head.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/assets/templates/header.php"; ?>
<main id="main" class="container-fluid">
	<div class="screen-wrapper">  	
		<nav>
			<p>
				<a class="btn btn-default" href="/deploy/deploy-1.php" role="button">New Deployment</a>
			</p>
		</nav>
		<div class="table-responsive grid-file-wrapper">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
			  <thead>
			    <tr>
			      <th>Date</th>
			      <th>Deployment</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>01/20/2015</td>
			      <td>Deployed Content Fix to Solutions Section</td>
			    </tr>
			    <tr>
			      <td>01/15/2015</td>
			      <td>Deployed Content Fix to Release 2015 Product Content</td>
			    </tr>
			    <tr>
			      <td>12/25/2014</td>
			      <td>Deployed Christmas Campaign</td>
			    </tr>
			    <tr>
			      <td>12/20/2014</td>
			      <td>Deployed Content Fix to Solutions Section</td>
			    </tr>
			    <tr>
			      <td>12/15/2014</td>
			      <td>Deployed Content Fix to Release 2015 Product Content</td>
			    </tr>
			    <tr>
			      <td>12/12/2014</td>
			      <td>Deployed Christmas Campaign</td>
			    </tr>
			    <tr>
			      <td>12/09/2014</td>
			      <td>Deployed Content Fix to Solutions Section</td>
			    </tr>
			    <tr>
			      <td>12/05/2014</td>
			      <td>Deployed Content Fix to Release 2015 Product Content</td>
			    </tr>
			    <tr>
			      <td>12/01/2014</td>
			      <td>Deployed Christmas Campaign</td>
			    </tr>
			  </tbody>
			</table>
		</div>
		<nav>
		  <ul class="pagination">
		    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
		    <li><a href="?page=1">1</a></li>
		    <li><a href="?page=2">2</a></li>
		    <li><a href="?page=3">3</a></li>
		    <li><a href="?page=4">4</a></li>
		    <li><a href="?page=5">5</a></li>
		    <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
		  </ul>
		</nav>
  </div>	
</main>	
<?php include $_SERVER['DOCUMENT_ROOT']."/lib/footer.php"; ?>
</body>
</html>