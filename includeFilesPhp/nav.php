
<nav class="navbar navbar-default fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a id="menu-toggle" href="#" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand" href="../index.php">
                <img src="../assets/img/maskTheater.png" id="littleMask"/>
            </a>
        </div>
        <div id="sidebar-wrapper" class="sidebar-toggle">
            <ul class="sidebar-nav">
                <li>
                    <a href="../view/view1.php">Liste des invités de ce soir</a>
                </li>
                <li>
                    <a href="../view/view2.php">Découvrez nos spectacles !</a>
                </li>
                <li>
                    <a href="../view/view3.php">Nos 20 premiers clients</a>
                </li>
                <li>
                    <a href="../view/view4.php">Nos clients membres</a>
                </li>
                <li>
                    <a href="../view/view5.php">Les clients avec nom commençant par M</a>
                </li>
                
                <li>
                    <a href="../view/view6.php">Nos prochains Shows</a>
                </li>
                <li>
                    <a href="../view/view7.php">Nos clients enregistrés</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $(window).resize(function() {
	var path = $(this);
	var contW = path.width();
	if(contW >= 751){
		document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
	}else{
		document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
	}
});
$(document).ready(function() {
	$('.dropdown').on('show.bs.dropdown', function(e){
	    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
	});
	$('.dropdown').on('hide.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
	});
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		var elem = document.getElementById("sidebar-wrapper");
		left = window.getComputedStyle(elem,null).getPropertyValue("left");
		if(left == "200px"){
			document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
		}
		else if(left == "-200px"){
			document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
		}
	});
});
</script>