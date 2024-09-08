
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
                  <h4 class="card-title" id="basic-layout-tooltip">Налаштування соціальних мереж</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    
                    <form class="form" method="POST" action="/engine/obr/admin.php">
                      <div class="form-body">
                        <div class="form-group">
                          <label for="issueinput2">Посилання на Telegram</label>
                          <input type="text" id="issueinput2" class="form-control" value="<?php echo $ucp_settings['s_telegram']?>"
                          name="s_telegram" >
                          <select id="issueinput6" name="s_telegram_check" class="form-control mt-1">
                            <option value='<?php echo $ucp_settings['s_telegram_check']?>'>Зараз: <?php if($ucp_settings['s_telegram_check']) echo "Показывается"; else echo "Отключено";?></option>
                            <?php if($ucp_settings['s_telegram_check']) echo "<option value='0'>Отключить</option>"; else echo "<option value='1'>Включить</option>";?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="issueinput2">Посилання на YouTube</label>
                          <input type="text" id="issueinput2" class="form-control" value="<?php echo $ucp_settings['s_youtube']?>"
                          name="s_youtube" >
                          <select id="issueinput6" name="s_youtube_check" class="form-control mt-1">
                            <option value='<?php echo $ucp_settings['s_youtube_check']?>'>Зараз: <?php if($ucp_settings['s_youtube_check']) echo "Показывается"; else echo "Отключено";?></option>
                            <?php if($ucp_settings['s_youtube_check']) echo "<option value='0'>Отключить</option>"; else echo "<option value='1'>Включить</option>";?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="issueinput2">Посилання на Discord</label>
                          <input type="text" id="issueinput2" class="form-control" value="<?php echo $ucp_settings['s_discord']?>"
                          name="s_discord" >
                          <select id="issueinput6" name="s_discord_check" class="form-control mt-1">
                            <option value='<?php echo $ucp_settings['s_discord_check']?>'>Зараз: <?php if($ucp_settings['s_discord_check']) echo "Показывается"; else echo "Отключено";?></option>
                            <?php if($ucp_settings['s_discord_check']) echo "<option value='0'>Отключить</option>"; else echo "<option value='1'>Включить</option>";?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="issueinput2">Посилання на TikTok</label>
                          <input type="text" id="issueinput2" class="form-control" value="<?php echo $ucp_settings['s_tiktok']?>"
                          name="s_tiktok" >
                          <select id="issueinput6" name="s_tiktok_check" class="form-control mt-1">
                            <option value='<?php echo $ucp_settings['s_tiktok_check']?>'>Зараз: <?php if($ucp_settings['s_tiktok_check']) echo "Показывается"; else echo "Отключено";?></option>
                            <?php if($ucp_settings['s_tiktok_check']) echo "<option value='0'>Отключить</option>"; else echo "<option value='1'>Включить</option>";?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="issueinput2">Посилання на Instagram</label>
                          <input type="text" id="issueinput2" class="form-control" value="<?php echo $ucp_settings['s_instagram']?>"
                          name="s_instagram" >
                          <select id="issueinput6" name="s_instagram_check" class="form-control mt-1">
                            <option value='<?php echo $ucp_settings['s_instagram_check']?>'>Зараз: <?php if($ucp_settings['s_instagram_check']) echo "Показывается"; else echo "Отключено";?></option>
                            <?php if($ucp_settings['s_instagram_check']) echo "<option value='0'>Отключить</option>"; else echo "<option value='1'>Включить</option>";?>
                          </select>
                        </div>

                        <input type="hidden" name="action" value="save_settings_ucp_social">
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