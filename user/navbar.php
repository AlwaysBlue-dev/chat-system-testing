<style>
	.navbar {
		background-color: rgba(255, 217, 0, 0.568);
	}

	.title {
		color: lightblue;
		font-size: x-large;
		float: right;
		margin-right: 30px;
	}
</style>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://www.sourcecodester.com/user/224918/track"></a>
		</div>

		<ul class="nav navbar-nav">
			<li><a href="index.php"><span><img src="./images/favicon.png" alt="logo" width="25"></span><span class="title">Raptor Gambling</span> </a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Update Photo</a></li>
					<li class="divider"></li>
					<li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>