<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter - With Theme Helper</title>
    <link rel="stylesheet" href="<?php echo Theme::templateUrl('admin').'/css/welcome.css' ;?>" />
	
</head>
<body>
    <?php echo $this->load->view($viewName); ?>
</body>
</html>