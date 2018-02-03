<?php
include("sessionadmin.php");
?>
<nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation"style="margin:0;">
		<div class="container">
				<div class="navbar-header " >
			<a class="navbar-brand"><img src="../img/DIU-Logo.pngkk.png" class="img-responsive" style="margin-top:-6px;"></a>
			<a class="navbar-brand">CR Election<!--<img src="img/l.png" class="img-responsive">--></a>
			

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
					<li><a href="public_is_vote_status.php">public_is_vote_status</a></li>
					
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" >ID: <?php echo $login_session; ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							
							<li><a href="logout.php"><span class="glyphicon glyphicon-user" > </span> Logout</a></li>
						
							
							
						</ul>
						</li>


										
				</ul>
							</div>
			</div>
		</div>
		
</nav>
	