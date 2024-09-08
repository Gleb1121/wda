<div id="krp-news" class="container border-top krp__y1ZtD3fBPa krp__RUgmlhsGiR">
    <div class="krp__4msslmwPTe">
        <h3 class="text-center mb-5">
          <i class="bi bi-heart fs-4 me-2"></i>
          Новини проекту
        </h3>

        <div class="row flex-wrap justify-content-center">

				<?php
					global $db;
						$statement = $db->prepare("SELECT * FROM `ucp_news` ORDER BY n_id DESC LIMIT 3");
						$statement->execute ();
							if($statement->rowCount()) 
							{
								while($news=$statement->fetch())
								{
                  echo '
                  <div class="col-md-6 col-xl-4 col-lg-6 col-sm-6 mb-4"> 
                    <div class="card bg-transparent krp__CYyUJM0PiA h-100">
                      <div class="card-header p-0">
                        <img class="w-100 rounded-top" style="height: 230px; object-fit: cover;" 
                        src='.$news['n_images'].'>
                      </div>
                      <div class="card-body d-flex flex-column align-items-start gap-3">
                        <h5 class="fw-semibold fs-5 mb-0 w-100 text-nowrap">'.$news['n_title'].'</h5>
                        <p class="fw-light fs-6 mb-0 text-white-50 w-100">'.$news['n_text'].'</p>
                        <span class="text-white-50 text-start w-100">'.$news['n_data'].'</span>
                      </div>
                    </div>
                  </div>
                  '; } } ?>
        </div>
    </div>
</div>