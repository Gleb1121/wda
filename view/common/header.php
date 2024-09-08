<?php 
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: X-Requested-With");
    
?>

<div class="navbar navbar-expand-lg navbar-dark pt-5 pb-3 bg-transparent krp__pteujdQwL3">
    <div class="container">
        <a href="/" class="me-4">
            <img class="krp_logo" src="/public/main/assets/images/icons/logo.svg">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php $data = GetUserData(); ?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center krp__Hli9PgCSFi">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/">
                    <i class="bi bi-house-door fs-6 me-1"></i>
                      Головна</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/#krp-news">
                      <i class="bi bi-heart fs-6 me-1"></i>
                      Новини</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/#krp-startgame">
                      <i class="bi bi-controller fs-6 me-1"></i>
                      Почати грати</a>
                  </li>

                 <li class="nav-item">
                    <a class="nav-link fw-semibold test11" href="https://forum.kyivrp.com/">
                      <i class="bi bi-link-45deg fs-6 me-1"></i>
                      Форум</a>
                  </li> 

                  <?php if($data[$ucp_table_settings['accesslevel']] == 11) 
                    echo '
                    <li class="nav-item">
                        <a class="nav-link fw-semibold test11" href="/admin/" target="_blank">
                        <i class="bi bi-gear fs-6 me-1"></i>
                        Управління</a>
                    </li>
                    '; 
					else echo ""; 
				  ?>
            </ul>

            <div class="d-flex align-items-center justify-content-center gap-3">
                <a href="/donate/" class="btn btn-warning fw-semibold"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Поповнити рахунок">
                    <i class="bi bi-cart2"></i>
                    Донат
                </a>

                <?php if(isset($_SESSION['NickName'])):?>
                    <a href="/profile/" class="btn btn-warning fw-semibold"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Мій аккаунт">
                        <i class="bi bi-person"></i>
                        <?php echo $_SESSION['NickName']?>
                    </a>
                    <?php else: ?>
                    <a href="/profile/" class="btn btn-warning fw-semibold"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Авторизація">
                        <i class="bi bi-person"></i>
                        Кабінет
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>