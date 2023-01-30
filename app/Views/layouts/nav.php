<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('../../public/assets/css/styles/style.css') ?>" />
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
  </head>

  <body>
	<header>
    <nav class="navbar">
      <div class="img_h">
        <a class="navbar-brand px-5 py-3" href="./index.php"
          ><img src="./images/beluga.png" class="h-100 px-2" />BluegaJournal 白鯨嶼 
        </a>
      </div>
      <ul class="nav justify-content-end">
        <li class="nav-item ">
        <a class="nav-link py-3 " href="./bloghome.php">雜學探險徑</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link py-3" href="./source.php">補給充電站</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link py-3" href="./bulletinboard.php">嶼之公告欄</a>
        </li>
        <?php if(isset($_SESSION['id']) || isset($_SESSION['logged in'])){ ?>
            <li class="nav-item"> <a href="./individual.php" class="nav-link py-3"> 我的筆記本 </a></li>
            <li class="nav-item"> <a href="./logout.php" class="nav-link py-3"> 登出 </a></li>
            <?php  }else{ ?>
            <li class="nav-item"> <a href="./login.php" class="nav-link py-3" >登入</a></li>
                <?php } ?>
      </ul>
    </nav>
	</header>
    </body>
</html>