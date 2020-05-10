<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Admin Theme - With Theme Helper</title>
    <link rel="stylesheet" href="<?php echo Theme::templateUrl().'/css/welcome.css' ;?>" />
	
    <?php 
        if(isset($links_header) && !empty($links_header)){
            foreach ($links_header as $linkhead) {
                echo $linkhead;
            }
        } 
    ?>	
</head>
<body>

    <ul class="nav">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="/hmvc">HMVC Page</a></li>
        <li><a href="/admin">Admin Page</a></li>
    </ul>

    <?php echo $this->load->view($viewName); ?>
    <div style="display: block; text-align: center;">
        <a href="https://github.com/luftinur/hmvc-codeigniter-template-views">View on Github</a>
    </div>
    <br>
    <div style="display: block; text-align: center;">
        Copyright &copy; <?php echo Date("Y"); ?>
        <a href="https://www.kodingspace.com">KodingSpace</a> - All Right Reserved
    </div>

    <?php 
        if(isset($links_footer) && !empty($links_footer)){
            foreach ($links_footer as $footLink) {
                echo $footLink;
            }
        } 
    ?>	

   
</body>
</html>