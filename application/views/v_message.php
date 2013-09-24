<?php
	$this->load->view('inc/header');
	$msg = (isset($msg)) ? $msg : 'No data to show';
?>
<br><br>

<div class="jumbotron">
	<div class="container">
	<h1><?php echo($msg); ?></h1>
	</div>
</div>


<?php
	$this->load->view('inc/footer');
?>