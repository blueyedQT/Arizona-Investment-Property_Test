			<div id="welcome_image"></div><!-- featured image -->
			<div class="content">
<?php 	if(!empty($message)) { ?>
				<div class="alert alert-success" role="success">
					<span class="sr-only">Message:</span>
<?php 		echo $message ?>
				</div>
<?php 	} ?>
				<form role="form" action="free_report_signup" method="post">
<?php 	if(!empty($errors)) { ?>
					<div class="alert alert-danger" role="alert">
						<span class="sr-only">Error:</span>
<?php 		echo $errors ?>
					</div>
<?php		} ?>
					<input class="form_control" type="text" name="email" placeholder="yourname@yourdomain.com">
					<input type="submit" value="Sign Me Up!">
				</form>
				<div class="jumbotron">		
				<p>Welcome To Arizona Investment Property</p>
			</div>
				<p>Coming Soon!</p>
			</div>
		</div><!-- closing container -->
	</body>
</html>