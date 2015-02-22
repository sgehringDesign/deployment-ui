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
		<form>
			<div class="form-group">
				<label for="deploymentName">Deployment Targets</label>
				<div class="form-inline">
					<select class="form-control">
						<option>Select a Server</option>
						<option>Development</option>
						<option>Staging</option>
						<option>Production</option>
						<option>Backup</option>
					</select>
					<span class="glyphicon glyphicon-chevron-right hidden-xs"></span>
					<span class="text-center visible-xs-block hidden-sm hidden-md hidden-lg">
						<span class="glyphicon glyphicon-chevron-down"></span>
					</span>
					<select class="form-control">
						<option>Select a Server</option>
						<option>Development</option>
						<option>Staging</option>
						<option>Production</option>
						<option>Backup</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="deploymentName">Deployment Name</label>
				<input type="text" class="form-control" id="deploymentName" placeholder="Enter Deployment">
			</div>
			<div class="form-group">
				<label for="deploymentName">Deployment Description</label>
				<textarea class="form-control" rows="3"></textarea>
			</div>
			<div class="btn-group">
				<a class="btn btn-default" href="/deploy/deploy-2.php" role="button">Select Files to Deploy <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</form>
	</div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT']."/lib/footer.php"; ?>
</body>
</html>