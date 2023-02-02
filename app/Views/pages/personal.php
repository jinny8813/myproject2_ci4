<?= $this->extend("layouts/template")?>
<?= $this->section('content')?>
    <section>
      <div class="row m-0 g-0">
        <div class="col-sm-3 py-5 bg_one">
            <h3 class='text-center mb-3'><?= esc($nickname)?>的個人主頁</h3>
            <nav class="nav flex-column">
                <a class="nav-link px-5" href="#">我的筆記</a>
                <a class="nav-link px-5" href="#">我的收藏</a>
                <a class="nav-link px-5" href="#">個人資料</a>
                <a class="nav-link px-5" href="<?php

                                            use function PHPUnit\Framework\isEmpty;

 echo base_url('User/doLogout') ?>">登出</a>
            </nav>
        </div>
        <div class="col-sm-9 bg_two">
            <div class="img_banner">
                <img src="<?= base_url('../../public/assets/images/banner_all.jpg') ?>" alt="123" id="changeImg">
            </div>
            <h3 class="text-center pt-5 mb-3" id="changeTitle">我的筆記</h3>
            
            <div class="p-5">

            <?php 
                if(isset($error_messages)){
                    echo '<h5 class="text-center pb-5 mb-3">' . esc($error_messages) . '</h5>';
                }        
                ?>
            
            <?php foreach($blogs as $row):?>
            <div class="card mb-5 mx-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('../../public/assets/images/bg_2.jpg') ?>" alt="" class="img-fluid">
                    </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title d-inline-block"><?= $row['title']?></h5>
                        <p class="card-text d-inline-block float-end"><?= $row['createdAt']?></p>
                        <br>
                        <p class="card-text d-inline-block">文章分類:<?= $row['category']?></p>
                        <p class="card-text d-inline-block">作者:<?= $row['authorId']?></p>
                        <p class="card-text"><?= $row['content']?></p>
                        <div class="text-end">
                        <a href="<?= base_url('Blog/showMore/'.$row['id'])?>" class="btn btn-primary">查看更多</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php endforeach;?>
            
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
<?= $this->endSection()?>