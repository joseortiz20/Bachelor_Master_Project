<style>

.btncolor {
    background-color: #133866;
}
.acolor {
    background-color: white;
}
</style>

<div class="col-md-2 sidebar" style="margin-left:20px">
  			<div class="row">
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container" >
					<ul class="nav navbar-nav">
						<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-primary btncolor" onClick="location.href='index.php'"><span class="glyphicon  glyphicon-home pull-left "></span> Dashboard </button></li> 

						<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-success btncolor" onClick="location.href='orders.php'"> <span class="glyphicon glyphicon-edit pull-left"></span> Orders </button></li>
						
						<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-primary btncolor" onClick="location.href='add_product.php'"> <span class="glyphicon glyphicon-edit pull-left"></span> Add Product </button></li>
						<li>
						<button style="width:240px; height:50px" type="button" class="btn btn-default dropdown-toggle btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="glyphicon glyphicon-edit pull-left"></span>  Products  Lists <span class="glyphicon glyphicon-triangle-bottom pull-right"></span>
						</button>
						<ul class="dropdown-menu btncolor" style="width:240px">
						<li><a href="man_list.php" class="acolor"><strong>Man List</strong> </a></li>
						<li><a href="woman_list.php" class="acolor"><strong> Woman List</strong></a></li>
						</ul></li>
						<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-primary btncolor" onClick="location.href='manage_users.php'"> <span class="glyphicon glyphicon-edit pull-left"></span> Manage Users </button></li>	
						<li><button style="width:240px; height:50px" type="button" class="btn btn-default btn-danger" onClick="location.href='../logout.php'"><span class="glyphicon glyphicon-off pull-left">
						</span> Logout </button></li>
			  		</ul>
		  </div>
		</nav>
        </div>
</div></div>