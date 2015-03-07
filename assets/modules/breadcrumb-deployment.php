<?php
	
	// Prototype PHP to simulate breadcrumb behavior
	// -- Will need to be consolidated and organized.
	$pageName = basename($_SERVER['PHP_SELF']);	
	
	function getstate($page, $link) {
		if($page == $link) {
			return "active";
		}		
	}
	
?> 
<div class="breadcrumb-wrapper">
	<ol class="breadcrumb">
		<li class="<?php echo getstate($pageName, 'index.php');    ?>" ><a href="/deploy/" ><strong>Deploy</strong></a></li>
		<li class="<?php echo getstate($pageName, 'deploy-1.php'); ?>" ><a href="/deploy/deploy-1.php" ><strong>Step 1:</strong> Name Deployment</a></li>
		<li class="<?php echo getstate($pageName, 'deploy-2.php'); ?>" ><a href="/deploy/deploy-2.php" ><strong>Step 2:</strong> Select Files</a></li>
		<li class="<?php echo getstate($pageName, 'deploy-3.php'); ?>" ><a href="/deploy/deploy-3.php" ><strong>Step 3:</strong> Deploy </a></li>
	</ol>
</div>