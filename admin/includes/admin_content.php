<?php require_once('init.php'); ?>
<div class="container-fluid">
	<!-- Page heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Admin
				<small> SubHeading </small>
			</h1>

			<?php

//			$user = new User();
//
//			$user->username = "NamanRajBaid";
//			$user->password = "12345";
//			$user->first_name = "Naman";
//			$user->last_name = "Baid";
//
//			$user->create()

			$user = User::find_user_by_id(6);
//			$user->last_name = "Raj";
//			$user->update();

			$user->delete();


			?>


			<ol class="breadcrumb">
				<li>
					<i class="fa fa-dashboard"></i> <a href="index.html"> Dashboard </a>
				</li>
				<li class="active">
					<i class="fa fa-file"></i> Blank Page
				</li>
			</ol>
		</div>
	</div>
</div>
