<body class="gray-bg">

	<div class="loginColumns animated fadeInDown">
		<div class="row">

			<div class="col-md-6">
				<h2 class="font-bold">Welcome to IN+</h2>

				<p>
					Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
				</p>

				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</p>

				<p>
					When an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</p>

				<p>
					<small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
				</p>

			</div>
			<div class="col-md-6">
				<div class="ibox-content">
					<form class="m-t" role="form" id='loginForm' method="post" action="/login/check{url}">
						<div class="form-group">
							<input type="email" data-requestFocus name="email" class="form-control" placeholder="Email" required="">
						</div>
						<div class="form-group">
							Try our password less password <br>
							<div class="label hidden" id="pin_less">You will receive a call from our end,<br> please confirm this pin: </div>
							<input type="hidden" name="password" id="password_less" class="form-control" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary block full-width m-b">Login</button>

						<a href="/login/forgot">
							<small>Forgot password?</small>
						</a>
					</form>
					<p class="m-t">
						<small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
					</p>
				</div>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-md-6">
				Copyright Example Company
			</div>
			<div class="col-md-6 text-right">
			   <small>© 2014-2015</small>
			</div>
		</div>
	</div>

</body>