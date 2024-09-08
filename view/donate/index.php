<!DOCTYPE html>
<html lang="uk">
<head>
    <!-- Head -->
    <title><?php echo $ucp_settings['s_title']?> - Поповнення рахунку</title>
    <?php include "view/common/head.php" ?>
</head>
<body id="___krp">
    <div id="particles-js"></div>

    <!-- Header -->
    <?php include "view/common/header.php" ?>

    <?php $data = GetUserData(); ?>

    <div class="container krp__zUpKLC6X9X">
        <div class="row flex-wrap">
            <div class="col-md-5 h-100 krp__ZbY9X23qd3">
                <h4 class="fw-semibold">
                    <i class="bi bi-cart fs-4 me-1"></i>
                    Поповнення рахунку
                </h4>
                <?php if(isset($_SESSION['NickName'])):?>
                    <span class="text-white-50">
                        <?php echo $data[$ucp_table_settings['name']] ?> 
                        <i class="bi bi-check"></i>
                    </span>
                <?php endif; ?>  
                <form action="/donate/" id="myform" method="POST" onsubmit="return onButtonSubmit()">

                    <?php if(isset($_SESSION['NickName'])):?>
                        <div class="mt-5 mb-0">
                            <input type="hidden" id="nickname" name="account" value="<?php echo $data[$ucp_table_settings['id']] ?>">
                        </div>
                        <?php else: ?>
                        <div class="mt-5 mb-3">
                            <input type="number" class="form-control p-3" 
                            placeholder="Введіть Ваш ID" id="nickname" name="account" value="" required>
                        </div>
                    <?php endif; ?>                

                    <div class="mb-3">
                        <input type="number" class="form-control p-3" 
                        placeholder="Сума в гривнях ₴" id="money" name="sum" value="" required>
                    </div>
					
                    <div class="mb-5 d-flex align-items-center gap-2">
                        <input type="checkbox" class="form-check-input" required>
                        <label class="form-check-label">
                            <a href="#" class="text-white text-decoration-none">Згоден з договором оферти</a>
                        </label>
                    </div>
					
					<input type="hidden" name="action" value="fk_go"> 
                    <button type="submit" class="btn btn-warning fw-semibold py-2 px-3 mt-1">
                        <i class="bi bi-cart-plus me-1"></i>
                        Продовжити
                    </button>
                </form>
            </div>
            <div class="col-md-7 h-100 d-flex justify-content-center position-relative">
                <img class="h-auto krp__OccCB1651G" 
                      style="width: 400px; object-fit: cover; 
                      position: absolute;
                      top: -120px;

                      /* filter: drop-shadow(2px 4px 6px black); */
                      /* z-index: -99; transform: translateX(10%) translateY(18%); */
                      " 
                    src="./public/main/assets/images/other/pers-3.png" alt="">  
            </div>
        </div>
    </div>

    <!-- Screenshots Game -->
    <style>.krp__RQORTi7voZ { border-top: none !important; }</style>
    <?php include "view/common/screenshots.php" ?>

    <!-- News -->
    <?php include "view/common/news.php" ?> <!-- News -->

    <!-- Footer 1 -->
    <?php include "view/common/footer.php" ?>
	
	<!-- JS -->
	<?php include "view/common/js.php" ?>
</body>
</html>