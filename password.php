
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<div class="container">
        <?php if($_POST) include 'aksi.php';?>
			<div class="main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Ubah Password</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-center">
					<form class="form-horizontal" method="post" action="?m=password&act=password_ubah">

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="pass1" placeholder="Password Lama"/>
                </div>
							</div>
						</div>

            <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="pass2" placeholder="Password Baru"/>
                </div>
              </div>
            </div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="pass3" id="inputPassword"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>


						<div class="form-group ">
					<button class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span> Simpan</button>
						</div>

					</form>
				</div>
			</div>
		</div>
