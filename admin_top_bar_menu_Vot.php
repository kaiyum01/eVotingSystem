<?php
include("sessionVot.php");
?>
<nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation"style="margin:0;">
		<div class="container">
				<div class="navbar-header " >
			<a href="new_voter_profile_update.php" class="navbar-brand"><div style="float:left;font-size:60px;margin-top:-8px;">e</div>Voting System</a>
			<!---->
			

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
				<li><a href="index.php" target="_blank"><span class="glyphicon glyphicon-home" > </span></a></li>
					<li><a href="adminpanelVot.php">Vote</a></li>
					
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >My NID: <?php echo $login_session; ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="new_voter_profile.php"><span class="glyphicon glyphicon-user" > </span> Profile</a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Logout</a></li>
						
							
							
						</ul>
						</li>


										
				</ul>
							</div>
			</div>
		</div>
		
</nav>
	