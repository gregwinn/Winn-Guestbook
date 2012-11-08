<div class="row">
	<div class="span12">
		<h2>Edit Message</h2>
		<p>Clicking "save" will update the post on your site instantly.</p>
		<?php while($post = mysql_fetch_array($posts['data'])) {?>
			<form class="form-horizontal" action="guestbook.php?url=gbook/updatepost" method="post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="inputName">Name:</label>
						<div class="controls">
							<input type="text" name="name" class="span5" id="inputName" value="<?php echo $post["name"];?>" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputEmail">Email:</label>
						<div class="controls">
							<input type="text" name="email" class="span5" id="inputEmail" value="<?php echo $post["email"];?>" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="inputMessage">Message:</label>
						<div class="controls">
							<textarea class="span5" name="message" id="inputMessage" rows="10"><?php echo $post["message"];?></textarea>
						</div>
					</div>

					<div class="control-group">
						
						<div class="controls">
							<input type="hidden" name="id" value="<?php echo $post['id'];?>" />
							<input type="submit" text="Save" class="btn btn-primary" />
						</div>
					</div>

				</fieldset>
			</form>
		<?php } ?>
	</div>
</div>