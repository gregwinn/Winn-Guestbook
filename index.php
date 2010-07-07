<form action="guestbook.php?url=gbook/newpost" method="post">
	<div>
		<label for="name">Name:</label>
		<input name="name" id="name" value="" />
	</div>
	
	<div>
		<label for="email">Email:</label>
		<input name="email" id="email" value="" />
	</div>
	
	<div>
		<label for="content">Message:</label>
		<textarea name="content" id="content"></textarea>
	</div>
	
	<input type="submit" value="Post" />
	
</form>