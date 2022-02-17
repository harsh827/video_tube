<style>
	.logo {
    margin: auto;
    font-size: 25px;
    background: black;
    padding: 11px 11px;
    border-radius: 75% 75%;
    color: #99ff99;
}
nav .nav-link{
	color:black !important;
	padding: 11px 11px ;
	background: #ccffff;

}
nav .nav-item{
	width: auto !important
	color: #99ff99
}
@media (min-width: 992px){
	.navbar-expand-lg .navbar-nav {
	    flex-direction: row;
	}
}
</style>

<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-primary" style="padding:0">
  <div class="container">
	    <a class="navbar-brand js-scroll-trigger text-white" href="./"><b>Video-Tube</b></a>
	    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	    <div class="col-sm-6 pt-2">
	    	<div class="input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-search"></i></span>
			  </div>
			  <input type="text" id="search" value="<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
			</div>
	    </div>
	    <div class="collapse navbar-collapse" id="navbarResponsive">
	        <ul class="navbar-nav ml-auto my-2 my-lg-0">
	            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Go to Home</a></li>
	            <?php if(isset($_SESSION['login_id'])): ?>
	            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=my_uploads">My Uploaded Videos</a></li>
	            <li class=" dropdown nav-item">
                	<a href="#" class="text-white dropdown-toggle nav-link"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucwords($_SESSION['login_firstname'].' '.$_SESSION['login_middlename']) ?> </a>
	              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
	                <a class="dropdown-item" href="index.php?page=signup&id=<?php echo $_SESSION['login_id'] ?>" id=""><i class="fa fa-cog"></i> Manage Account</a>
	                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
	              </div>
	            </li>
	          <?php else: ?>
	            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="javascript:void(0)" id="login_now">Login</a></li>
	          <?php endif; ?>
	           
	            
	         
	        </ul>
	    </div>
	</div>
</nav>

<script>
  $('#login_now').click(function(){
    uni_modal("LOGIN",'login.php')
  })
  $('#search').keypress(function(e){
  	if(e.which == 13){
  		location.href = "index.php?s="+$(this).val()
  	}
  })
</script>