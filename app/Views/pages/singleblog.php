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
                <img src="<?= base_url('../../public/assets/images/bg_2.jpg') ?>" alt="123">
            </div>
            <div class="p-5 mx-5">
                <h3 class="d-inline-block"><?= $blogs['title']?></h3>
                <p class="d-inline-block float-end"><?= $blogs['createdAt']?></p>
                <br>
                <p>文章分類:<?= $blogs['category']?></p>
                <p>作者:<?= $blogs['authorId']?></p>
                <p><?= $blogs['content']?></p>
            </div>
            <div class="p-5 mx-5">
                <a href="<?= $_SERVER['HTTP_REFERER']?>" class="btn btn-primary mx-3">返回上一頁</a>
                <?php if($userId==$blogs['authorId']){?>
                    <a href="#" class="btn btn-primary mx-3 float-end">編輯文章</a>
                    <a href="#" class="btn btn-primary mx-3 float-end">刪除文章</a>
                <?php }?>
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