<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latest Deployments</title>
  <?php include $_SERVER['DOCUMENT_ROOT']."/lib/head.php"; ?>
</head>
<body>
	<div class="container-fluid">
	  <?php include $_SERVER['DOCUMENT_ROOT']."/lib/header.php"; ?>
	  <?php include $_SERVER['DOCUMENT_ROOT']."/lib/breadcrumb-deployment.php"; ?>
	  <div class="screen-wrapper">  	
	  	<div class="table-responsive grid-file-wrapper">
		  	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
		  		<thead>
						<tr>
		  				<th class="text-center"><input type="checkbox" /></th>
							<th>Deployment</th>
							<th>Date</th>
						</tr>
		  		</thead>
		  		<tbody>
		  			<tr>
		  				<td class="text-center"><input type="checkbox" /></td>
		  				<td>Deployed Content Fix to Solutions Section</td>
		  				<td>01/20/2015</td>
						</tr>
		  			<tr>
		  				<td class="text-center"><input type="checkbox" /></td>
		  				<td>Deployed Content Fix to Release 2015 Product Content</td>
		  				<td>01/15/2015</td>
						</tr>
		  			<tr>
		  				<td class="text-center"><input type="checkbox" /></td>
		  				<td>Deployed Christmas Campaign</td>
		  				<td>12/25/2014</td>
						</tr>
		  		</tbody>
		  	</table>
	  	</div>	
	  </div>	
	  <?php include $_SERVER['DOCUMENT_ROOT']."/lib/footer.php"; ?>
</body>
</html>