<?= $this->extend("layouts/template")?>
<?= $this->section('content')?>
<section>
      <div class="row m-0 g-0">
        <div class="col-sm-3 bg_one">
            <h3 class='text-center mb-3 pt-5'>筆記分類</h3>
            <nav class="nav flex-column">
                <a class="nav-link px-5" href="<?= base_url('Blog/subPage/all') ?>" onclick="changeImage('all')">全部筆記</a>
                <a class="nav-link px-5" href="#" onclick="changeImage('doll')">棉花娃娃</a>
                <a class="nav-link px-5" href="#" onclick="changeImage('baking')">甜點烘焙</a>
                <a class="nav-link px-5" href="#" onclick="changeImage('diary')">手帳日誌</a>
                <a class="nav-link px-5" href="#" onclick="changeImage('drawing')">插畫繪圖</a>
                <a class="nav-link px-5" href="#" onclick="changeImage('guitar')">吉他彈唱</a>
            </nav>
        </div>
        <div class="col-sm-9 bg_two">
            <div class="img_banner">
                <img src="<?= base_url('../../public/assets/images/banner_all.jpg') ?>" alt="123" id="changeImg">
            </div>
            <h3 class="text-center pt-5 mb-3" id="changeTitle">全部筆記</h3>
            <div class="p-5">
            <div class="card mb-5 mx-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./images/banner2.jpg" alt="" class="img-fluid">
                    </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">手作棋格餅乾</h5>
                        <p class="card-text">這次做棋格餅乾順便錄影紀錄過程，才發現真的有點搞剛ㄟXD但是也真的很值得啦!推薦大家一定要嘗試做做看，成就感爆棚~~</p>
                        <div class="text-end">
                        <a href="#" class="btn btn-primary">查看更多</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="card mb-5 mx-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./images/banner2.jpg" alt="" class="img-fluid">
                    </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">手作棋格餅乾</h5>
                        <p class="card-text">這次做棋格餅乾順便錄影紀錄過程，才發現真的有點搞剛ㄟXD但是也真的很值得啦!推薦大家一定要嘗試做做看，成就感爆棚~~</p>
                        <div class="text-end">
                        <a href="#" class="btn btn-primary">查看更多</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="card mb-5 mx-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./images/banner2.jpg" alt="" class="img-fluid">
                    </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">手作棋格餅乾</h5>
                        <p class="card-text">這次做棋格餅乾順便錄影紀錄過程，才發現真的有點搞剛ㄟXD但是也真的很值得啦!推薦大家一定要嘗試做做看，成就感爆棚~~</p>
                        <div class="text-end">
                        <a href="#" class="btn btn-primary">查看更多</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
            function changeImage(a) {
                let image = document.getElementById("changeImg");
                let title = document.getElementById("changeTitle");
                        if (a == "doll") {
                            image.src = "<?= base_url('../../public/assets/images/banner_doll.jpg') ?>";
                            title.textContent = "棉花娃娃";
                        } else if (a == "baking") {
                            image.src ="<?= base_url('../../public/assets/images/banner_baking.jpg') ?>";
                            title.textContent = "甜點烘焙";
                        } else if (a == "diary") {
                            image.src ="<?= base_url('../../public/assets/images/banner_diary.jpg') ?>";
                            title.textContent = "手帳日誌";
                        } else if (a == "drawing") {
                            image.src ="<?= base_url('../../public/assets/images/banner_drawing.jpg') ?>";
                            title.textContent = "插畫繪圖";
                        } else if (a == "guitar") {
                            image.src ="<?= base_url('../../public/assets/images/banner_guitar.jpg') ?>";
                            title.textContent = "吉他彈唱";
                        } else {
                            image.src = "<?= base_url('../../public/assets/images/banner_all.jpg') ?>";
                            title.textContent = "所有文章";
                        }
            }
    </script>
<?= $this->endSection()?>