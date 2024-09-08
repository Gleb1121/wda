
<!DOCTYPE html>
<html class="loading" lang="ru" data-textdirection="ltr">
<head>
 	<!-- Head -->
  <?php include "view/admin/common/head.php"; ?>
</head>


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
                  <h4 class="card-title" id="basic-layout-tooltip">Робота з новинами</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  
                </div>
                <div class="card-content">
                  <div class="card-body">
                    
                 
                          <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal"
                          data-target="#default">
                          Створити новину
                          </button>
                          <br><hr>
                          <table class="table">
                    <thead class="bg-secondary text-white">
                      <tr>
                        <th>ID</th>
                        <th>Назва</th>
                        <th>Дата</th>
                        <th>Дія</th>
                      </tr>
                    </thead>
                    <tbody>
                    	<?php
				
							global $db;

							$statement = $db->prepare("SELECT * FROM `ucp_news` ORDER BY n_id DESC LIMIT 30");




							$statement->execute ();

							if($statement->rowCount()) 
							{
								while($news=$statement->fetch())
								{

											echo '<div class="modal fade text-left" id="edit-'.$news['n_id'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                          aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel1">Редактирование новости - '.$news['n_title'].'</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form method="POST" action="/engine/obr/admin.php">
                               	<div class="modal-body">
                                  <div class="row">
                                  	
			                          <div class="col-lg-12">
			                            <div class="form-group">
			                              <label for="projectinput1">Назва новини</label>
			                              <input type="text" id="projectinput1" class="form-control" value="'.$news['n_title'].'"
			                              name="n_title">
			                            </div>
			                          </div>
			                          <div class="col-lg-12">
			                            <div class="form-group">
			                              <label for="projectinput2">Посилання на картинку</label>
			                              <input type="text" id="projectinput2" class="form-control" value="'.$news['n_images'].'"
			                              name="n_images">
			                            </div>
			                          </div>
			                          <div class="col-lg-12">
			                            <div class="form-group">
			                              <label for="projectinput2">Посилання на новину</label>
			                              <input type="text" id="projectinput2" class="form-control" value="'.$news['n_url'].'"
			                              name="n_url">
			                            </div>
			                          </div>
			                          <div class="col-lg-12">
			                          	<div class="form-group">
				                          <label for="projectinput8">Невеликий опис</label>
				                          <textarea id="projectinput8" rows="5" class="form-control" name="n_text" >'.$news['n_text'].'</textarea>
				                        </div>
			                          </div>
			                        
			                       	</div>
                                </div>
                                <div class="modal-footer">
                                	<input type="hidden" name="n_id" value="'.$news['n_id'].'">	
                                  <input type="hidden" name="action" value="update_news">	
                                  <button type="submit" class="btn btn-outline-primary">Зберігши</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>';
											$button_delete = '<button type="button" class="btn btn-danger" onclick="DeleteNews('.$news['n_id'].');">Видалити</button>';
											 echo "
				<tr>
                        <th scope='row'>{$news['n_id']}</th>
                        <td>{$news['n_title']}</td>
                        <td>{$news['n_data']}</td>
                        <td><button type='button' class='btn btn-success' data-toggle='modal'
                          data-target='#edit-{$news['n_id']}'>Редагувати</button>
							{$button_delete}
                          </td>
                      </tr>"; } } ?>
				
                      
                    </tbody>
                  </table>
                          <!-- Modal -->
                          <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                          aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel1">Створення новини</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form method="POST" action="/engine/obr/admin.php">
                               	<div class="modal-body">
                                  <div class="row">
                                  	
			                          <div class="col-lg-12">
			                            <div class="form-group">
			                              <label for="projectinput1">Назва новини</label>
			                              <input type="text" id="projectinput1" class="form-control" placeholder="Обновление на сервере"
			                              name="n_title">
			                            </div>
			                          </div>
			                          <div class="col-lg-12">
			                            <div class="form-group">
			                              <label for="projectinput2">Посилання на картинку</label>
			                              <input type="text" id="projectinput2" class="form-control" placeholder="google.com/img.png"
			                              name="n_images">
			                            </div>
			                          </div>
			                          <div class="col-lg-12">
			                            <div class="form-group">
			                              <label for="projectinput2">Посилання на новину</label>
			                              <input type="text" id="projectinput2" class="form-control" placeholder="/"
			                              name="n_url">
			                            </div>
			                          </div>
			                          <div class="col-lg-12">
			                          	<div class="form-group">
				                          <label for="projectinput8">Невеликий опис</label>
				                          <textarea id="projectinput8" rows="5" class="form-control" name="n_text" placeholder="Додали роботу..."></textarea>
				                        </div>
			                          </div>
			                        
			                       	</div>
                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" name="action" value="create_news">	
                                  <button type="submit" class="btn btn-outline-primary">Утворити</button>
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