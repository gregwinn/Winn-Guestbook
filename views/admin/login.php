<h2><img src="images/icons/user_32.png" alt="Login" />Login</h2>

<div id="login">
	
	<div class="content-box">
		<div class="content-box-header">
			<h3>Login</h3>
		</div>
	
		<div class="content-box-content">
		    
		    <?php if(isset($_GET['error'])){ ?>
		        <div class="notification error">Login failed, try again.</div>
		    <?php }else{ ?>
			    <div class="notification information">Enter your username and password below.</div>
		    <?php } ?>
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