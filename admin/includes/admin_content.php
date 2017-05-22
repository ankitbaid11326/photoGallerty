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
//			$user->username = "shabnam";
//			$user->password = "2121";
//			$user->first_name = "shubham";
//			$user->last_name = "saggezza";
//			$user->create();

//			$user = new User();
//			$user->username = "Toshi";
//			$user->save();

//			$user =  User::find_user_by_id(7);
//			$user->username 	= "Toshi";
//			$user->password 	= "1111";
//			$user->first_name 	= "Toshendra";
//			$user->last_name 	= "Yadav";
//			$user->update();

			$users = User::find_all();


			foreach($users as $user){
				echo $user->username . "<br>";
			}

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
