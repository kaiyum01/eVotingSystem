<?php
include("admin_session.php");
?>
<nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation"style="margin:0;">
		<div class="container">
				<div class="navbar-header " >
			<a class="navbar-brand" href="admin.php"><div style="float:left;font-size:60px;margin-top:-8px;">e</div>Voting System</a>
			<!--<a class="navbar-brand" href="admin.php"><img src="img/DIU-Logo.pngkk.png" class="img-responsive" style="margin-top:-6px;"></a>
			<a class="navbar-brand" href="admin.php">Election Commision<!--<img src="img/l.png" class="img-responsive"></a>-->
			

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
					<li><a target="_blank" href="index.php"><span class="glyphicon glyphicon-home" > </span></a></li>
					<li><a target="_blank" href="backup_db.php"><span class="glyphicon glyphicon-download" > </span> Database Backup</a></li>
					
						
						<!--<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Edit<b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Voter</a></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Candidate</a></li>
								</ul>
						</li>-->
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-exclamation-sign" > </span> Pending List<b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="new_voter_pending_list.php"><span class="glyphicon glyphicon-user" > </span> Voter Pending</a></li>
									<li><a href="new_candidate_pending_list.php"><span class="glyphicon glyphicon-user" > </span> Candidate Pending</a></li>
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-ok-sign" > </span> Confirm List<b class="caret"></b></a>
								<ul class="dropdown-menu">						
									<li><a href="new_voter_confirm_list.php"><span class="glyphicon glyphicon-user" > </span> Voter Confirm</a></li>
									<li><a href="new_candidate_confirm_list.php"><span class="glyphicon glyphicon-user" > </span> Candidate Confirm</a></li>
								</ul>
						</li>

						<li><a href="create_admin.php"><span class="glyphicon glyphicon-edit" > </span> Create Admin </a></li>

						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user" > </span> Admin: <b style="color:#009999;"><?php echo $login_session; ?></b><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#"><span class="glyphicon glyphicon-cog" > </span> Profile Setting</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-edit" > </span> Change Candidate Password</a></li>						
									<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" > </span> Logout</a></li>
								</ul>
						</li>

										
				</ul>
							</div>
			</div>
		</div>
		
</nav>
	