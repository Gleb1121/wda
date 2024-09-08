
<!DOCTYPE html>
<html class="loading" lang="ru" data-textdirection="ltr">
<head>
	<!-- Head -->
  <?php include "view/admin/common/head.php"; ?>
</head>

<!-- LeftMenu -->
<?php include "common/leftmenu.php" ?>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      	
      </div>
      <div class="content-body">
        <div class="row match-height">
          
          <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-tooltip">Основні настройки</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form class="form" method="POST" action="/engine/obr/admin.php">
                      <div class="form-body">
                        <div class="form-group">
                          <label for="issueinput1">Назва проекту</label>
                          <input type="text" id="issueinput1" class="form-control" value="<?php echo $ucp_settings['s_title']?>"
                          name="s_title">
                        </div>
                        <div class="form-group">
                          <label for="issueinput1">Опис проекту (Meta Description)</label>
                          <input type="text" id="issueinput1" class="form-control" value="<?php echo $ucp_settings['s_description']?>"
                          name="s_description">
                        </div>
                        <div class="form-group">
                          <label for="issueinput1">Тег (Meta Keywords)</label>
                          <input type="text" id="issueinput1" class="form-control" value="<?php echo $ucp_settings['s_tags']?>"
                          name="s_tags">
                        </div>
                        <div class="form-group">
                          <label for="issueinput2">
                            URL іконки сайту
                            <span style="color: red;">(тільки для розробників)</span>
                          </label>
                          <input type="text" id="issueinput2" class="form-control" value="<?php echo $ucp_settings['s_favicon']?>"
                          name="s_favicon" >
                        </div>
                        <div class="form-group">
                          <label for="issueinput2">
                            URL логотипу сайту
                            <span style="color: red;">(тільки для розробників)</span>
                          </label>
                          <input type="text" id="issueinput2" class="form-control" value="<?php echo $ucp_settings['s_logo']?>"
                          name="s_logo" >
                        </div>
                        <div class="form-group">
                          <label for="issueinput6">
                            Показувати моніторинг
                          </label>
                          <select id="issueinput6" name="s_monitoring" class="form-control">
                            <option value='<?php echo $ucp_settings['s_monitoring']?>'>Зараз: <?php if($ucp_settings['s_monitoring']) echo "Показувати"; else echo "Отключено";?></option>
                            <?php if($ucp_settings['s_monitoring']) echo "<option value='0'>Отключить</option>"; else echo "<option value='1'>Включить</option>";?>
                          </select>
                        </div>

                        <input type="hidden" name="action" value="save_settings_ucp">
                      </div>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                          <i class="fa fa-check-square-o"></i> Зберігши
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          
          
        </div>

      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include "view/admin/common/footer.php"; ?>

  <!-- JS -->
  <?php include "view/admin/common/js.php"; ?>

</body>
</html> 