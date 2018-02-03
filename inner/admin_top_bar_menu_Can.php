<?php
include("sessionCan.php");
?>
<nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation"style="margin:0;">
		<div class="container">
				<div class="navbar-header " >
				<a class="navbar-brand"><div style="float:left;font-size:60px;margin-top:-8px;">e</div>Voting System</a>
			

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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >ID: <?php echo $login_session; ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="profileCan.php"><span class="glyphicon glyphicon-user" > </span> Profile</a></li>
							<li class="divider"></li>
							<li><a href="new_candidate_profile.php"><span class="glyphicon glyphicon-user" > </span> New Profile</a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Logout</a></li>
						
							
							
						</ul>
						</li>


										
				</ul>
							</div>
			</div>
		</div>
		
</nav>
	