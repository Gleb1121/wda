<!DOCTYPE html>
<html lang="uk">
<head>
    <!-- Head -->
    <title><?php echo $ucp_settings['s_title']?> - Новий пароль!</title>
    <?php include "view/common/head.php" ?>
</head>
<body id="___krp">
    <div id="particles-js"></div>

    <!-- Header -->
    <?php include "view/common/header.php" ?>

    <div class="container krp__zUpKLC6X9X">
        <div class="row flex-wrap">
            <div class="col-md-5 h-100 krp__ZbY9X23qd3">
                <h4 class="fw-semibold">
                    <i class="bi bi-person fs-4 me-1"></i> Новий пароль
                </h4>
                <form class="no-ajax" action="/profile/newpass/" id="" method="POST">
                    <div class="mt-5 mb-3">
                        <input name="password" type="password" class="form-control p-3" placeholder="Новий пароль:" required>
                        <input type="hidden" name="token" value="<?php echo $_GET['token'];?>">
                    </div>
                    <input type="hidden" name="action" value="newpass">
                    <div class="pt-1 d-flex align-items-center gap-3">
                        <button type="submit" class="btn btn-warning fw-semibold py-2 px-3" name="change">
                            <i class="bi bi-person-add me-1"></i>
                            Оновити
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-7 h-100 d-flex justify-content-center position-relative">
                <img class="h-auto krp__OccCB1651G" style="width: 750px; object-fit: cover; position: absolute; top: -120px;" src="/public/main/assets/images/other/pers-2.png" alt="">
            </div>
        </div>
    </div>

    <!-- Screenshots Game -->
    <style>.krp__RQORTi7voZ { border-top: none !important; }</style>
    <?php include "view/common/screenshots.php" ?>

    <!-- News -->
    <?php include "view/common/news.php" ?> <!-- News -->

	<!-- Footer -->
    <?php include "view/common/footer.php"; ?>

	<!-- JS -->
	<?php include "view/common/js.php" ?>
 
</body>
</html>