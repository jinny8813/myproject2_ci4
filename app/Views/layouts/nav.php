<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    
    <link rel="shortcut icon" href="<?= base_url('../../public/assets/images/icon.png') ?>" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?= base_url('../../public/assets/css/styles/style.css') ?>" />
  </head>

  <body>
	<header>
    <nav class="navbar">
      <div class="img_h">
        <a class="navbar-brand px-5 py-3" href="<?php echo site_url('User') ?>"
          ><img src="<?= base_url('../../public/assets/images/icon.png') ?>" class="h-100 px-2" />BluegaJournal 白鯨嶼 
        </a>
      </div>
      <ul class="nav justify-content-end">
        <li class="nav-item ">
        <a class="nav-link py-3 " href="<?php echo site_url('User/bloghome') ?>">雜學探險徑</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link py-3" href="<?php echo site_url('User/source') ?>">補給充電站</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link py-3" href="<?php echo site_url('User/board') ?>">嶼之公告欄</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link py-3" href="<?= isset($nickname)? base_url('User/personal'):base_url('User/login')?>"><?= isset($nickname)? '我的筆記本':'登入與註冊'?></a>
        </li>
      </ul>
    </nav>
	</header>
    </body>
</html>