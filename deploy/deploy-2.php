<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Deploy 2: Select Files </title>
  <?php include $_SERVER['DOCUMENT_ROOT']."/lib/head.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/lib/header.php"; ?>
<main id="main" class="container-fluid">
	<?php include $_SERVER['DOCUMENT_ROOT']."/lib/breadcrumb-deployment.php"; ?>
	<div class="screen-wrapper">
		<div class="table-responsive grid-file-wrapper">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
			  <thead>
			    <tr>
			      <th class="text-center"><input type="checkbox" /></th>
			      <th>Date</th>
			      <th>Deployment</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>Products</td>
			      <td>01/20/2015</td>
			    </tr>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>Product 1</td>
			      <td>01/15/2015</td>
			    </tr>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>Product 2</td>
			      <td>12/25/2014</td>
			    </tr>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>Product 3</td>
			      <td>12/20/2014</td>
			    </tr>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>Company</td>
			      <td>12/15/2014</td>
			    </tr>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>Press</td>
			      <td>12/12/2014</td>
			    </tr>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>Events</td>
			      <td>12/09/2014</td>
			    </tr>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>White Papers</td>
			      <td>12/05/2014</td>
			    </tr>
			    <tr>
			      <td class="text-center"><input type="checkbox" /></td>
			      <td>Data Sheets</td>
			      <td>12/01/2014</td>
			    </tr>
			  </tbody>
			</table>
		</div>
		<div class="btn-group">
			<a class="btn btn-default" href="/deploy/deploy-3.php" role="button"> Deploy <i class="glyphicon glyphicon-chevron-right"></i></a>
		</div>	
	</div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT']."/lib/footer.php"; ?>
</body>
</html>