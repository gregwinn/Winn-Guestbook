<div class="row">
	<?php if($newposts){ ?>

		<div class="span12">
			<h4>New Posts! (<?php echo $newposts['datacount']; ?>)</h4>
		</div>


		<?php while($newpostrow = mysql_fetch_array($newposts['data'])){ ?>

			<div class="span12">
				<h4><?php echo $newpostrow['name']; ?></h4>
				<p><small>Posted at: <?php echo date("D, M jS Y", strtotime($newpostrow['created_at'])) ;?> | Email: <?php echo $newpostrow['email']; ?></small></p>
				<p><?php echo substr($newpostrow['message'], 0, 200); ?>...</p>
				<div>
					<a class="btn" href="?url=admin/edit/<?php echo $newpostrow['id'];?>"><i class="icon-pencil"></i> Edit</a>
					<a class="btn btn-success" href="?url=admin/approvepost_get/<?php echo $newpostrow['id'];?>"><i class="icon-thumbs-up icon-white"></i> Approve</a>
				</div>
				<hr />
			</div>
		<?php } ?>

	<?php }else{?>
		<div class="content-box-header">
			<h3>No new posts :(</h3>
		</div>

		<div class="content-box-content">
			<p>Sorry, no new posts at this time.</p>
		</div>
	<?php } ?>
</div>