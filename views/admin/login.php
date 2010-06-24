<h2><img src="images/icons/user_32.png" alt="Login" />Login</h2>

<div id="login">
	
	<div class="content-box">
		<div class="content-box-header">
			<h3>Login</h3>
		</div>
	
		<div class="content-box-content">
		
			<div class="notification information">Just click login to go forward.</div>
		
			<form action="guestbook.php?url=admin/dologin" method="post">
				<p>
					<label>Username</label>
					<input name="username" id="username" type="text" />
				</p>
		
				<p>
					<label>Password</label>
					<input name="password" id="password" type="password" />
				</p>
		
				<input type="submit" value="Login" />
			</form>
		</div>
	</div><!-- end .content-box -->
</div><!-- end #login -->