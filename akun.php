<!-- Fixed navbar -->
  <div class="container">
        <div class="navbar-header-">
              <?php if (isset($_SESSION['username'])) { ?>
                  <p align="right"> Hello <i class="fa fa-user"></i> <strong><?=$_SESSION['nama']?></strong></p>
            <?php  } else {

            }?>

        </div>
    </div>
