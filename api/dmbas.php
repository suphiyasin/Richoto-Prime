<?php include("../backend/files/ayar.php"); ?>
<html lang="en"><head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rich Oto Araçlar</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="../text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png">
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../index.php"><img src="../images/logo.svg" class="mr-2" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="../images/logo-mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper ps ps--active-y" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    <i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    <i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    <i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="">
                      Schedule meeting for next week
                    <i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="">
                      Project review
                    <i class="input-helper"></i><i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 657px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 481px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 657px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 472px;"></div></div></div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Toplayıcılar</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="mailtopla.php">Mail Topla</a></li>
                <li class="nav-item"> <a class="nav-link" href="wptopla.php">Wp Topla</a></li>
                <li class="nav-item"> <a class="nav-link" href="dmtopla.php">Dm Topla</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Basıcılar</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="mailbas.php">Mail Basıcı</a></li>
                <li class="nav-item"> <a class="nav-link" href="wpbas.php">Wp Basıcı</a></li>
                <li class="nav-item"> <a class="nav-link" href="dmbas.php">Dm Basıcı</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Oto Arşiv</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
    
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="arsiv/postarsiv.php">Post Arşiv</a></li>
                <li class="nav-item"> <a class="nav-link" href="arsiv/takip.php">Takip edilenleri Çıkma</a></li>
                <li class="nav-item"> <a class="nav-link" href="arsiv/reelsarsiv.php">Reels arşiv</a></li>
              </ul>
            </div>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Hesap Ayarları</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="ayar.php"> Ayarlar </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Lisans İşlemleri</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
         <p class="mb-1">Coded By Zexen&Nercly</p>
        </ul>
      </nav>
      <!-- partial -->
      
		  
      <!-- main-panel ends -->
    <div class="page-content">
                <div class="card">
                    <div class="card-header">
					
                        <h4 class="card-title">Dm Basma </h4>
                    </div>
                    <div class="card-content">
							<div id="hes1"><b>Dm basılırken Kullanılacak Hesap </b>
					<select id="hesaplar">
			<option value="0" selected>Secilmedi</option>
					<?php
					$sorbi = mysqli_query($mysqli, "select * from hesaplar where Statu='0'");
					while($bisor=mysqli_fetch_object($sorbi)){
					?>
					<option value="<?php echo $bisor->ID ?>"><?php echo $bisor->kadi ?></option>
					<?php
					}
					?>
					</select></div>
					<div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" onclick="tikla()" id="tik" class="form-check-input">
                     Gelişmiş Mail basma kullanmak istiyorum ?
                      <i class="input-helper"></i></label>
                    </div>
					
					
					<div style="display:none" id="sakla">
					 <p class="card-description">
					 <center>
					 <h5>
                  <b> site linkinizi ve ardından taslağınızı yazınız.<br/>
					Username gelemsini istediğiniz yere [suphi] yazınız<br/>
					site linkinizi taslakta kullanmak için [suphiLink] yazınız.<br/>
</h5>    </b>            </p>
<input type="text" id="site" placeholder="https://site.com/username=[suphi]" style="width:100%"/><br/>
<b>Saniye ayarı </b>
<input type="number" id="sure" placeholder="İdeal : 2" style="width:100%"/><br/>

					
					<b>Hesap Seçin</b>
					<select id="hesaplar">
			<option value="0" selected>Secilmedi</option>
					<?php
					$sorbi = mysqli_query($mysqli, "select * from hesaplar where Statu='0'");
					while($bisor=mysqli_fetch_object($sorbi)){
					?>
					<option value="<?php echo $bisor->ID ?>"><?php echo $bisor->kadi ?></option>
					<?php
					}
					?>
					</select><br/>
						<div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" onclick="tikla2()" id="tik2" class="form-check-input"/>
                 Gelen Kutusuna mı basılsın? yoksa topladığınız hesaplaramı ? 
                      <i class="input-helper"></i></label>
                    </div>
					
					<div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" onclick="tikla3()" id="tik3" class="form-check-input"/>
                  Eklediğiniz her hesap sıra sıra bassın mı ? 
                      <i class="input-helper"></i></label>
                    </div>
					<div id="kacadet" style="display:none"><b>Kaç adet dm bastıktan sonra değişsin </b><br/>
					<input type="number" id="adet" placeholder="İdeal : 25">
					</div>
					</center>  
</div>
<script>
var ayar = "dmbas";
var ayar2 = "";
var ayar3 = "";
function tikla(){
	if(tik.checked == true){
		document.getElementById("sakla").style.display = "block";
		document.getElementById("hes1").style.display = "none";
		ayar = "gelismisdmbas";
		console.log(ayar);
	}else{
		ayar = "dmbas";
		console.log(ayar);
		document.getElementById("sakla").style.display = "none";
		document.getElementById("hes1").style.display = "block";
	}
}


	function tikla3(){
		if(tik3.checked == true){
			ayar3 = "ok";
			console.log(ayar3);
			document.getElementById("kacadet").style.display = "block";
		}else{
			ayar3 = "";
			document.getElementById("kacadet").style.display = "none";
		}
	}
function tikla2(){
	if(tik2.checked == true){
	
		ayar2 = "true";
		
	}else{
	
		ayar2 = "";
				
	}

}
function sub1(){
	var hesapid = document.getElementById("hesaplar").value;
	
	var sur = document.getElementById("sure").value;
	var asilsure = sur*1000;
	var link = document.getElementById("site").value;
	var adet = document.getElementById("adet").value;
		var taslak = document.getElementById("sunucucıktı").value;
		setInterval(function () {$.post('../backend/req.php', {ayar:ayar, ayar2:ayar2, ayar3:ayar3, hesapid:hesapid, link:link, taslak:taslak, adet:adet}, function(response){ 
	 $("#durum").html(response)
	 
						  });
						  }, asilsure);
}

function sil(){
	var a = document.getElementById("seninicinbro");
	if(a.value == "delete"){
		document.getElementById("sunucucıktı").innerHTML = '';
		a.innerHTML = 'no'
	}else{
	}
}

</script>
                        <div class="card-body">
                            <div class="form-group with-title mb-3">
                                <textarea class="form-control" id="sunucucıktı" rows="8" style="height: 375px; width: 800px">

</textarea><textarea id="durum" readonly></textarea>
                            </div>
                            <button class="btn btn-info" onclick="sub1()">Başlat</button>

                        </div>
                    </div>
                </div>
            </div>  
    <!-- page-body-wrapper ends -->
	
  <!-- container-scroller -->
                                  
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
