<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Hi, <?php echo $this->session->userdata('username') ?></p>
<a href="<?php echo site_url('login/logout')?>"></a>
</body>
</html>