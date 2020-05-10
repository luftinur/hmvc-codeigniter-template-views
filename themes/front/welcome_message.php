
<div id="container">
	
	<h1 style="display: flex; align-items: center; justify-content: space-between;"><span>Welcome to CodeIgniter! With Theme Helper</span> <a href="<?php echo base_url().'admin'; ?>"><strong>Go To Admin Theme ></strong></a></h1>

	<div id="body">
	
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<s><code>application/views/welcome_message.php</code></s>

		<p>Using <b>Theme Helper</b> Move To:</p>
		<code><?php echo Theme::templatePath(); ?>/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
