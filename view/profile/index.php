<!DOCTYPE html>
<html lang="uk">
<head>
    <!-- Head -->
    <title><?php echo $ucp_settings['s_title']?> - Особистий кабінет</title>
    <?php include "view/common/head.php" ?>
</head>
<body id="___krp">
    <div id="particles-js"></div>

    <!-- Header -->
    <?php include "view/common/header.php" ?>

	<?php $data = GetUserData(); ?>

	<div class="container my-5">
		<div class="col-md-12"> 
		<div class="row">
			<div class="col-md-4 mb-3 krp__RRuhdnTiFY krp__S7FPTcu6cy">
				<div class="card mb-4 bg-transparent">
					<div class="card-body p-3">
						<div class="d-flex flex-column align-items-center text-center">
							
							<img class="krp__Hf43RJmP51" src="/public/main/assets/images/skins/<?php echo $data[$ucp_table_settings['skin']] ?>.png"
							style="width: auto; height: 140px; object-position: top; 
							object-fit: cover; border-radius: 50%;">

							<div class="mt-3 w-75">
								<h5 class="text-white fs-5 fw-semibold">
									<?php FixName($data[$ucp_table_settings['name']]) ?>
								</h5>
								<p class="text-white-50 fs-6 mb-2">
									ID: <?php echo $data[$ucp_table_settings['id']] ?>
									HP: <?php echo $data[$ucp_table_settings['health']] ?>
									Броня: <?php echo $data[$ucp_table_settings['armor']] ?>
									Скін: <?php echo $data[$ucp_table_settings['skin']] ?>
								</p>  
								<?php if($data[$ucp_table_settings['accesslevel']] == 11)   
								echo '
								<p class="fw-semibold fs-6 mb-3" style="color: #ff3e35;"
								data-bs-toggle="tooltip" data-bs-placement="bottom" 
								data-bs-title="AccessLevel: '.$data[$ucp_table_settings['accesslevel']].'">
								Адміністратор
								</p>
								';
								else echo ''; 
								?>
								<a class="btn btn-warning fw-semibold w-100 mb-2" href="/donate/">
									<i class="bi bi-cart me-1"></i>
									Поповнити рахунок
								</a>
								<a class="btn btn-outline-warning fw-normal w-100" href="/profile/exit/">
									<i class="bi bi-box-arrow-right me-1"></i>
									Вийти
								</a>
							</div>
						</div>
					</div>       
				</div>

			<div class="card mb-4 bg-transparent">
              <ul class="list-group list-group-flush">
			  	<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0 text-white">Стан</h6>
                  <a type="button" class="text-white text-decoration-none fw-semibold">
				  	<?php if($data[$ucp_table_settings['online']]) echo "У грі"; else echo "Не в грі"; ?>
                  </a>
                </li>
				<!--
				<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0 text-white">Останній вхід</h6>
                  <a type="button" class="text-white text-decoration-none fw-semibold">
				  <?php echo $data[$ucp_table_settings['last_date']] ?>                
                  </a>
                </li>
				-->
              </ul>
            </div>

			<div class="card mb-4 bg-transparent">
              <ul class="list-group list-group-flush">
			  	<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0 text-white">IP Reg</h6>
                  <a type="button" class="text-white text-decoration-none fw-semibold"
				  data-bs-toggle="tooltip" data-bs-placement="left" 
				  data-bs-title="<?php echo $data[$ucp_table_settings['reg_ip']] ?>  ">
				  Подивитися           
                  </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0 text-white">IP Last</h6>
                  <a type="button" class="text-white text-decoration-none fw-semibold"
				  data-bs-toggle="tooltip" data-bs-placement="left" 
				  data-bs-title="<?php echo $data[$ucp_table_settings['last_ip']] ?>  ">
				  Подивитися               
                  </a>
                </li>
              </ul>
            </div>

			<div class="card mb-0 bg-transparent">
			<ul class="list-group list-group-flush">
			  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0 text-white">Client ID</h6>
                  <a type="button" class="text-white text-decoration-none fw-semibold"
				  data-bs-toggle="tooltip" data-bs-placement="left" 
				  data-bs-title="<?php echo $data[$ucp_table_settings['client_id']] ?>  ">
				  Подивитися              
                  </a>
                </li>
				<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0 text-white">Serial Reg</h6>
                  <a type="button" class="text-white text-decoration-none fw-semibold"
				  data-bs-toggle="tooltip" data-bs-placement="left" 
				  data-bs-title="<?php echo $data[$ucp_table_settings['reg_serial']] ?>  ">
				  Подивитися              
                  </a>
                </li>
				<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0 text-white">Serial Last</h6>
                  <a type="button" class="text-white text-decoration-none fw-semibold"
				  data-bs-toggle="tooltip" data-bs-placement="left" 
				  data-bs-title="<?php echo $data[$ucp_table_settings['last_serial']] ?>  ">
				  Подивитися              
                  </a>
                </li>
			  </ul>
			</div>
			</div>
			

			<div class="col-md-8 krp__peBF8YkRMh krp__S7FPTcu6cy">

			<div class="card bg-transparent mt-0">
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs gavno" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link me-2 active" id="home-tab" 
							data-bs-toggle="tab" data-bs-target="#home" type="button" 
							role="tab" aria-controls="home" aria-selected="false">
								<div class="d-flex align-items-center">
									<i class="bi bi-info-circle me-2"></i>
									<span>Статистика</span>
								</div>
							</button>
						</li>

						<li class="nav-item" role="presentation">
							<button class="nav-link me-2" id="profile-tab" 
							data-bs-toggle="tab" data-bs-target="#profile" type="button" 
							role="tab" aria-controls="profile" aria-selected="true">
								<div class="d-flex align-items-center">
									<i class="bi bi-person-lock me-2"></i>
									<span>Змінити пароль</span>
								</div>
							</button>
						</li>
					</ul>
				</div>
  	<div class="tab-content" id="myTabContent">
	  	<div class="tab-pane fade p-3 p-md-4 text-left active show" id="home" role="tabpanel" aria-labelledby="home-tab">
			
		  <div class="mb-0 bg-transparent">
						<ul class="list-group mt-0 pt-0">
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Ім'я</h6>
								<span class="text-white fw-semibold"><?php FixName($data[$ucp_table_settings['name']]) ?></span>
							</li>
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Логін</h6>
								<span class="text-white fw-semibold"><?php FixName($data[$ucp_table_settings['login']]) ?></span>
							</li>
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Рівень</h6>
								<span class="text-white fw-semibold">
									<?php FixName($data[$ucp_table_settings['level']]) ?> LVL
									/ 
									<?php FixName($data[$ucp_table_settings['exp']]) ?> EXP
								</span>
							</li>    
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Гроші</h6>
								<span class="text-white fw-semibold"><?php echo number_format($data[$ucp_table_settings['cash']]); ?> ₴</span>
							</li>  
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Донат рахунок</h6>
								<span class="text-white fw-semibold"><?php echo number_format($data[$ucp_table_settings['donate']]); ?> ₴</span>
							</li>  
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Стать</h6>
								<span class="text-white fw-semibold"><?php if($data[$ucp_table_settings['gender']]) echo "Жіночий"; else echo "Чоловічий"; ?></span>
							</li>   
							<!--
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Номер телефону</h6>
								<span class="text-white fw-semibold"><?php FixName($data[$ucp_table_settings['u_phone']]) ?></span>
							</li>  
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Банківський рахунок</h6>
								<span class="text-white fw-semibold"><?php FixName($data[$ucp_table_settings['bank']]) ?></span>
							</li>          
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Бізнес</h6>
								<span class="text-white fw-semibold"><?php if($data[$ucp_table_settings['biz']] != -1) echo "№". $data[$ucp_table_settings['biz']]; else echo "Отсутствует"; ?></span>
							</li>      
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Будинок</h6>
								<span class="text-white fw-semibold"><?php if($data[$ucp_table_settings['house']] != -1) echo "№". $data[$ucp_table_settings['house']]; else echo "Отсутствует"; ?></span>
							</li>     
							--> 
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Соціальний рейтинг</h6>
								<span class="text-white fw-semibold"><?php FixName($data[$ucp_table_settings['social_rating']]) ?></span>
							</li>   
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Кількість слотів під ТС</h6>
								<span class="text-white fw-semibold"><?php FixName($data[$ucp_table_settings['car_slots']]) ?></span>
							</li>  
							<!--    
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Фракція</h6>
								<span class="text-white fw-semibold">Отсутствует</span>
							</li>      
							<li class="list-group-item fs-13 py-3">
								<h6 class="mb-0 d-inline-block w-50">Робота</h6>
								<span class="text-white fw-semibold">Отсутствует</span>
							</li>      
							-->
						</ul>
					</div>
			
	  	</div>
	  	<div class="tab-pane fade p-3 p-md-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		  	<form action="/engine/obr/profile.php" id="" method="POST" onsubmit="return onButtonSubmit()">
				<div class="mt-0 mb-3">
					<input name="new_password_1" type="password" class="form-control p-2" 
					placeholder="Введіть новий пароль" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
					<input name="new_password_2" type="password" class="form-control p-2" 
					placeholder="Повтор нового пароля" aria-describedby="emailHelp">
				</div>
				<input type="hidden" name="action" value="change_password">
				<button type="submit" class="btn btn-warning fw-semibold py-2 px-3">
					<i class="bi bi-key me-1"></i>
					Змінивши
				</button>
        	</form>
	  	</div>	
						</div>
					</div>
				</div>    
			</div>
		</div>     
	</div>
	
	<!-- Footer -->
    <?php include "view/common/footer.php"; ?>

	<!-- JS -->
	<?php include "view/common/js.php" ?>
 
</body>
</html>