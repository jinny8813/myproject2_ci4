<?= $this->extend("layouts/template")?>
<?= $this->section('content')?>
    <section>
      <div class="row m-0 g-0">
        <div class="col-sm-3 py-5 bg_one">
            <h3 class='text-center mb-3'><?= esc($nickname)?></h3>
            <nav class="nav flex-column">
                <a class="nav-link px-5" href="#">主頁筆記</a>
                <a class="nav-link px-5" href="#">我的收藏</a>
                <a class="nav-link px-5" href="#">個人資料</a>
                <a class="nav-link px-5" href="<?php echo base_url('User/doLogout') ?>">登出</a>
            </nav>
        </div>
        <div class="col-sm-9 p-5 bg_two">
            <h3 class="text-center  mb-3">主頁筆記</h3>
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
        </div>
      </div>
    </section>
<?= $this->endSection()?>