<html>
<body>
	<h1>Activate account for <?php echo $identity;?></h1>
	<p>Please click this link to <?php echo anchor('admin/auth/activate_account/'. $user_id .'/'. $activation_token, 'Activate Your Account');?>.</p>
</body>
</html>