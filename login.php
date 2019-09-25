
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<div class="container">
        <?php if($_POST) include 'aksi.php';?>
			<div class="main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Login</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="?m=login">

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="user" id="username"  placeholder="Enter your Username"/>
                </div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="pass" id="inputPassword"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>


						<div class="form-group ">
					<button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>
						</div>

					</form>
				</div>
			</div>
		</div>
