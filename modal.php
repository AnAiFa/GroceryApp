<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Sign Up</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="formSignUp">
			<div class="modal-body">
				<div class="form-label-group">
					<input type="text" id="inputFullName" name="fullname" class="form-control" placeholder="Full Name" required="">
					<label for="inputFullName">Full Name</label>
				</div>
				<div class="form-label-group">
					<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="">
					<label for="inputEmail">Email address</label>
				</div>
				<div class="form-label-group">
					<input type="number" id="inputContact" name="contact" class="form-control" placeholder="Contact No." required="">
					<label for="inputContact">Contact No.</label>
				</div>
				<div class="form-label-group">
					<input type="text" id="inputAddress" name="address" class="form-control" placeholder="Permanent Address" required="">
					<label for="inputAddress">Permanent Address</label>
				</div>
				<div class="form-label-group">
					<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
					<label for="inputPassword">Password</label>
				</div>
				<div class="form-label-group">
					<input type="password" id="inputConfirmPassword" name="confirmPassword" class="form-control" aria-describedby="validityPassword" placeholder="Confirm Password" required="">
					<label for="inputConfirmPassword">Confirm Password</label>
					<small id="validityPassword" class="form-text text-danger">&nbsp;&nbsp;&nbsp;&nbsp;</small>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
				<button type="submit" id="btnSignUp" class="btn btn-outline-primary">Sign Up</button>
			</div>
			</form>
		</div>
	</div>
</div>



<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-label-group">
						<input type="email" id="loginEmail" class="form-control" placeholder="Email address" required="">
						<label for="loginEmail">Email address</label>
					</div>
					<div class="form-label-group">
						<input type="password" id="loginPassword" class="form-control" placeholder="Password" required="">
						<label for="loginPassword">Password</label>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline-primary">Login</button>
			</div>
		</div>
	</div>
</div>