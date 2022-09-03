<?php
include("ayar2.php");
$noso = mysqli_query($mysqlix, "select * from Notf where UserID='".$_SESSION['userid']."' and Statu='0' order by ID desc");
while($sel=mysqli_fetch_object($noso)){
?>
<a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
					
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal"><?php echo $sel->NotfText ?></h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    <?php echo $sel->zaman ?>
                  </p>
                </div>
              </a>
<?php } ?>
			  
			  <!--
			  <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
				-->
				<!--
				<div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
				-->