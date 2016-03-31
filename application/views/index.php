			<!-- <div id="welcome_image"></div> --> <!-- featured image -->
			<div class="content">


				<!-- modal practice -->
				<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static"><!-- can add fade into class -->
	  			<div class="modal-dialog">
	      		<div class="modal-content">
	      			<!-- Header-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title" id="myModalLabel">Free Report!</h4>
							</div>
							<!-- Body -->
							<div class="modal-body">
		     				<p>
		     					Sign up to instantly receive your FREE copy of How To Avoid Land Scams in Arizona.  It is full of GREAT information on what you need to know as an investor to avoid falling into the scams that have been plauging pepole for decades.
		     				</p>
		     				<form role="form" action="free_report_signup" method="post">
		     					<fieldset class="form-group">
								    <label for="name">Name</label>
								    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
								  </fieldset>
								  <fieldset class="form-group">	
								  	<label for="email">Email address</label>							    
<?php 	if(!empty($errors)) { ?>
<div class="alert alert-danger" role="alert">
								<span class="sr-only">Error:</span>
		<?php 		echo $errors ?>
							</div>
<?php		} ?>
										
								    <input type="email" class="form-control" id="email" name="email" placeholder="you@yourdomain.com">
								    <small class="text-muted">We'll never share your email with anyone else.</small>
								  </fieldset>
								  <button type="submit" class="btn btn-primary">Sign Me Up!</button>
								</form>
							</div>
							<!-- Footer -->
							<div class="modal-footer">
							</div>
		        </div>
		    	</div>
				</div>
				<!-- End Practice Zone -->

				<div class="jumbotron">		
					<p>Welcome To Arizona Investment Property</p>
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
							<div class="form-group row">
								<div class="col-sm-10">
								<input class="email form_control" type="text" name="email" placeholder="yourname@yourdomain.com">
							</div>
							<button type="submit" class="btn btn-primary">Sign Me Up!</button>
<!-- 							<input type="submit" value="Sign Me Up!">
 -->						</form>
				</div>
				<p>Coming Soon!</p>
			</div>
		</div><!-- closing container -->
	</body>
</html>