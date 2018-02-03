<?php
include("admin_session.php");
?>
<nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation"style="margin:0;">
		<div class="container">
				<div class="navbar-header " >
			<a class="navbar-brand" href="admin.php"><img src="img/DIU-Logo.pngkk.png" class="img-responsive" style="margin-top:-6px;"></a>
			<a class="navbar-brand" href="admin.php">Election Commision<!--<img src="img/l.png" class="img-responsive">--></a>
			

	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-icca-navbar-collapse-1">
		<span class="sr-only">toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
				</div>
			<div class="collapse navbar-collapse" id="bs-icca-navbar-collapse-1">
							<div>
				<ul class=" nav navbar-nav navbar-right">
					
					<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Message<b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Send messge to Voter</a></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Send messge to Candidate</a></li>
								</ul>
						</li>
						
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Edit<b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Voter</a></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Candidate</a></li>
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pending<b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="new_voter_pending_list.php"><span class="glyphicon glyphicon-user" > </span> Voter Pending</a></li>
									<li><a href="new_candidate_pending_list.php"><span class="glyphicon glyphicon-user" > </span> Candidate Pending</a></li>
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Complete List<b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Voter List</a></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Candidate List</a></li>
								</ul>
						</li>

						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Admin Setting<b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Profile Setting</a></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Change Password</a></li>
								</ul>
						</li>

						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Admin ID: <?php echo $login_session; ?><b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Logout</a></li>
								</ul>
						</li>

										
				</ul>
							</div>
			</div>
		</div>
		
</nav>
	