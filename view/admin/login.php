<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
	<!-- Head -->
  <?php include "view/admin/common/head.php"; ?>
</head>
<body class="vertical-layout vertical-menu 1-column menu-expanded blank-page blank-page"
  data-open="click" data-menu="vertical-menu" data-col="1-column">
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="<?php echo $ucp_settings['s_logo']?>" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Авторизація</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" action="/engine/obr/admin.php" method="POST">
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input type="text" class="form-control form-control-lg" name="login" placeholder="Ваш логін"
                        required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Ваш пароль"
                        required>
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                      </fieldset>
                      <input type="hidden" name="action" value="go_login">
                      <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Увійти</button>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="/public/main/js/form.js" type="text/javascript"></script>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="/public/admin/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->

</body>
</html>