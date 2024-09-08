<!DOCTYPE html>
<html lang="uk">
<head>
	<!-- Head -->
	<?php include "view/common/head.php"; ?>
</head>
<body id="___krp">
    <div id="particles-js"></div>
	
        <!-- Header -->
        <?php include "view/common/header.php" ?>

        <?php //$online = checkOnlineData(); ?>
        <?php $online = rand(300, 330); ?>

        <!-- Description & Ped -->
        <div class="container d-flex justify-content-center align-items-center krp__7VeSqrflb2">
            <div class="row flex-wrap d-flex align-items-center">
              <div class="col-md-6 h-100 d-flex align-items-start flex-column gap-4 krp__BhU7nK1v23 krp__CkaRvPROgA">
                  <div class="d-flex align-items-start gap-4">

                    <?php if($ucp_settings['s_telegram_check']) 
                      echo '
                      <a href='.$ucp_settings['s_telegram'].' target="_blank"
                      class="btn btn-link fs-4 text-white p-0 krp__LXFp9Pie1m"
                      data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Наш Telegram">
                      <i class="bi bi-telegram"></i></a>
                      ';
                      else echo '';
                    ?>

                    <?php if($ucp_settings['s_youtube_check']) 
                      echo '
                      <a href='.$ucp_settings['s_youtube'].' target="_blank"
                      class="btn btn-link fs-4 text-white p-0 krp__LXFp9Pie1m"
                      data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Наш YouTube">
                      <i class="bi bi-youtube"></i></a>
                      ';
                      else echo '';
                    ?>       
                    
                    <?php if($ucp_settings['s_discord_check']) 
                      echo '
                      <a href='.$ucp_settings['s_discord'].' target="_blank"
                      class="btn btn-link fs-4 text-white p-0 krp__LXFp9Pie1m"
                      data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Наш Discord">
                      <i class="bi bi-discord"></i></a>
                      ';
                      else echo '';
                    ?>      

                    <?php if($ucp_settings['s_tiktok_check']) 
                      echo '
                      <a href='.$ucp_settings['s_tiktok'].' target="_blank"
                      class="btn btn-link fs-4 text-white p-0 krp__LXFp9Pie1m"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Наш TikTok">
                      <i class="bi bi-tiktok"></i></a>
                      ';
                      else echo '';
                    ?>      

                    <?php if($ucp_settings['s_instagram_check']) 
                      echo '
                      <a href='.$ucp_settings['s_instagram'].' target="_blank"
                      class="btn btn-link fs-4 text-white p-0 krp__LXFp9Pie1m"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Наш Instagram">
                      <i class="bi bi-instagram"></i></a>
                      ';
                      else echo '';
                    ?>      
                  </div>
                  <h1 class="fw-bold mb-3 krp__B7gYZO20Es">
                      Онлайн гра про <span class="blue">Укра</span><span class="yellow">їну</span>!
                  </h1>
                  <p class="fw-normal mb-3 text-white">
                      <span class="text-warning fw-semibold">
                      <?php echo $ucp_settings['s_title']?></span> - це онлайн гра про нашу країну, 
                      зі справжніми авто, містами, реальними роботами! 
                      У нас ти зможеш відчути всю атмосферу української 
                      гри та українських гравців! 🔥
                  </p>
                  <div class="mb-0 d-flex align-items-center gap-4 krp__DmbhkPh5Kh">
                    <a href="/Install_KRP_Launcher.exe" class="btn btn-warning fw-semibold text-center py-3 px-5 krp__Ni9TmzCy1E">
                      <i class="bi bi-download fw-bold me-1"></i>
                      Почати грати
                    </a>
                    <a href="#krp-info" class="text-decoration-none text-center text-white">
                      <i class="bi bi-play"></i>
                      Огляд проекту
                    </a>
                  </div>
                  <?php if($ucp_settings['s_monitoring']) 
                      echo '
                      <div class="mt-3 mb-5 d-flex align-items-center">
                        <span class="krp__JSp6Wk3g9U"></span>
                        <span class="text-white">
						              <span class="fw-semibold">'.$online.'</span> 
                          гравців онлайн прямо зараз
                        </span>
                      </div>
                      ';
                      else echo '<div class="mt-3 mb-5"></div>';
                  ?>    
                </div>

                <div class="col-md-6 h-100 d-flex justify-content-center position-relative">
                  <img class="h-auto krp__OccCB1651G" 
                      style="width: 600px; object-fit: cover; position: absolute; top: -180px;" 
                      src="./public/main/assets/images/other/pers-1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Info Game -->
    <div id="krp-info" class="krp__ppUXsYNlGc">
      <div class="container krp__7vmaUavyWB">
        <h3 class="mb-0 text-start krp__NR2PdtsLbw">
          <i class="bi bi-controller fs-4 me-2"></i>
          Чому у нас потрібно грати?
        </h3>
        <div class="row flex-wrap krp__0xuLk0PHGa">
          <div class="col-md-12 w-100 d-flex align-items-center justify-content-between krp__kHzH61pFeT krp__mlz05pzRCu">
            <div class="col-md-6 krp__eeNRG92DAU order-1 position-relative">
              <div class="krp__GytyNMAEW5">01</div>
              <h5 class="text-white fw-semibold mb-4 fs-4 krp__B7gYZO20Es">
                <span class="blue">Укра</span><span class="yellow">їна</span> мапа в грі!
              </h5>
              <p class="text-white fw-normal fs-6">
                Ми працюємо над картою вже майже рік. 
                Зайшовши в гру ти одразу зрозумієш, що ти знаходишся в Україні. 
                У грі доступні такі міста як: Харків,Дніпро,Гостомель,Полтава, 
                Чорнобиль і розробляється Київ. Ти почуєш всю атмосферу України 
                з перших секунд як побачиш АТБ, Нову Пошту і купу інших українських компаній!
              </p>
            </div>
            <div class="col-md-6 krp__ayhtOgKnXv order-2">
              <img class="w-100 h-100" src="./public/main/assets/images/preview/01.png">
            </div>
          </div>

          <div class="col-md-12 w-100 d-flex align-items-center justify-content-between krp__dH6jieak9B krp__mlz05pzRCu">
            <div class="col-md-6 krp__ayhtOgKnXv order-1">
              <img class="w-100 h-100" src="./public/main/assets/images/preview/02.png">
            </div>
            <div class="col-md-6 krp__eeNRG92DAU order-2 position-relative"> 
              <div class="krp__GytyNMAEW5">02</div>
              <h5 class="text-white fw-semibold mb-4 fs-4 krp__B7gYZO20Es">
                Реальні роботи і професії
              </h5>
              <p class="text-white fw-normal fs-6">
                Ти можеш стати будь-ким, працювати далекобійником 
                АТБ або Нової Пошти. Можеш присікати бандитів, 
                працюючи в Національній Поліції або піти служити в 
                ЗСУ. У тебе буде величезний вибір як робот-початківців, 
                так і серйозних професій таких як: ДСНС, СБУ.
              </p>
            </div>
          </div>

          <div class="col-md-12 w-100 d-flex align-items-center justify-content-between krp__kHzH61pFeT krp__mlz05pzRCu">
            <div class="col-md-6 krp__eeNRG92DAU order-1 position-relative"> 
              <div class="krp__GytyNMAEW5">03</div>
              <h5 class="text-white fw-semibold mb-4 fs-4 krp__B7gYZO20Es">
                Вітчизняні та імпортні автомобілі
              </h5>
              <p class="text-white fw-normal fs-6">
                Ми додали понад 400 моделей автомобілів. 
                У грі ти знайдеш будь-який автомобіль, від вітчизняних 
                українських автомобілів: ЗАЗ, КрАЗ, ЛАЗ до високоякісних 
                європейських, японських та американських. Після покупки 
                авто тобі теж буде чим зайнятися, тому що будь-який автомобіль 
                у грі можна затюнінгувати, ти можеш купити нові диски, 
                затонувати і навіть змінювати характеристики двигуна.
              </p>
            </div>
            <div class="col-md-6 krp__ayhtOgKnXv order-2">
              <img class="w-100 h-100" src="./public/main/assets/images/preview/03.png">
            </div>
          </div>

          <div class="col-md-12 w-100 d-flex align-items-center justify-content-between krp__dH6jieak9B krp__mlz05pzRCu">
            <div class="col-md-6 krp__ayhtOgKnXv order-1">
              <img class="w-100 h-100" src="./public/main/assets/images/preview/04.png">
            </div>
            <div class="col-md-6 krp__eeNRG92DAU order-2 position-relative"> 
              <div class="krp__GytyNMAEW5">04</div>
              <h5 class="text-white fw-semibold mb-4 fs-4 krp__B7gYZO20Es">
                Атмосфера і користь
              </h5>
              <p class="text-white fw-normal fs-6">
                З перших секунд гри ти відчуєш справжній дух України. 
                95% аудиторії розмовляє рідною мовою і дотримується 
                високого рівня рольової гри. А завдяки нашим гравцям 
                щомісяця ми відправляємо 50% донату з відкритих кейсів і
                вже відправили понад 300.000грн на допомогу ЗСУ.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Game -->
    <?php include "view/common/startgame.php" ?>

    <!-- Screenshots Game -->
    <?php include "view/common/screenshots.php" ?>

    <!-- News -->
    <?php include "view/common/news.php" ?>

	  <!-- Footer -->
    <?php include "view/common/footer.php"; ?>

    <!-- Modal *Системні вимоги* -->
    <div class="modal fade" id="krp-ot25HAbMOx" tabindex="-1" aria-labelledby="krp-label-ot25HAbMOx" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-6" id="krp-label-ot25HAbMOx">Системні вимоги</h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="height: 350px;">
            <div class="d-flex flex-column">
              <h6>Мінамальні вимоги</h6>
              <ul>
                <li>Операційна система: 
                  <span class="fw-semibold text-primary">Windows 7 SP1 x64 та вище</span></li>
                <li>Процесор: 
                  <span class="fw-semibold text-primary">Intel Core 2 Duo 2.2 GHz, AMD Phenom 2.2 GHz</span></li>
                <li>Відеокарта: 
                  <span class="fw-semibold text-primary">GTX 550 TI, ATI Radeon HD 4800</span></li>
                <li>Оперативна пам'ять: 
                  <span class="fw-semibold text-primary">6ГБ DDR2</span></li>
                <li>Роздільна здатність екрану: 
                  <span class="fw-semibold text-primary">1280х720</span></li>
                <li>Звукова карта: 
                  <span class="fw-semibold text-primary">Сумісна з DirectX 9</span></li>
                <li>Інтернет-з'єднання: 
                  <span class="fw-semibold text-primary">8 мбіт/сек</span></li>
                <li>Вільне місце на накопичувачі: 
                  <span class="fw-semibold text-primary">20ГБ</span></li>
              </ul>
            </div>

            <div class="d-flex flex-column">
              <h6>Рекомендовані вимоги</h6>
              <ul>
                <li>Операційна система: 
                  <span class="fw-semibold text-primary">Windows 10 x64</span></li>
                <li>Процесор: 
                  <span class="fw-semibold text-primary">Intel Core i5 3GHz, AMD Ryzen 3GHz</span></li>
                <li>Відеокарта: 
                  <span class="fw-semibold text-primary">GTX 550 TI, ATI Radeon HD 4800</span></li>
                <li>Оперативна пам'ять: 
                  <span class="fw-semibold text-primary">16ГБ DDR2</span></li>
                <li>Роздільна здатність екрану: 
                  <span class="fw-semibold text-primary">1920х1080</span></li>
                <li>Звукова карта: 
                  <span class="fw-semibold text-primary">Сумісна з DirectX 9</span></li>
                <li>Інтернет-з'єднання: 
                  <span class="fw-semibold text-primary">8 мбіт/сек</span></li>
                <li>Вільне місце на накопичувачі: 
                  <span class="fw-semibold text-primary">20ГБ</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

	  <!-- JS -->
	  <?php include "view/common/js.php" ?>

</body>
</html>