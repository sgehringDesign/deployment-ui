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
	<div class="row">
		<div class="screen-wrapper col-xs-12">
			<?php include $_SERVER['DOCUMENT_ROOT']."/assets/modules/breadcrumb-deployment.php"; ?>
		</div>
	</div>
	<div class="row">
		<div class="screen-wrapper col-xs-6">
			<div class="div-file-browser">
				<?php include $_SERVER['DOCUMENT_ROOT']."/assets/modules/file-browser-ul.php"; ?> 
			</div>
			<div class="btn-group">
				<button id="btn-move-selected" class="btn btn-default" role="button">Move Selected Files&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"></i></button>
			</div>	
		</div>
		<div class="screen-wrapper col-xs-6">
			<div class="div-file-browser" id="selected-files">
				<ul class="ul-file-browser">
				
				</ul>
			</div>
		</div>
	</div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT']."/assets/templates/footer.php"; ?>
</body>
</html>