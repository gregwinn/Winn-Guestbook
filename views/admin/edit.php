<?php while($post = mysql_fetch_array($posts['data'])) {?>
	<?php echo $post["name"];?>
<?php } ?>