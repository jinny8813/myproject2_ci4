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
    <link rel="stylesheet" href="./styles/style.css" />
  </head>

  <body>
  <section>
    <div class="img_h m-3 position-fixed bottom-0 end-0">
      <a href="#"><img src="./images/up-arrow.png" alt="" class="h-100"></a>
    </div>
  </section>

    <footer>
      <div class="container p-5">
        <div class="row justify-content-center" >
          <div class="col-sm-3 px-5">
            <h4 class="text-center pb-2">快速連結</h4>
            <div class="row">
              <div class="col">
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
              </div>
              <div class="col">
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
                <p class="lh-sm"><a href="#">雜學探險徑</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 px-5">
            <h4 class="text-center pb-2">訂閱電子報</h4>
            <form>
              <div class="row mb-3">
                <div class="col-4">
                  <label for="exampleInputEmail1" class="form-label"
                    >電子郵件
                  </label>
                </div>
                <div class="col-8">
                  <input
                    type="email"
                    class="col-4 form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <button type="submit" class="btn btn-primary">送出</button>
              </div>
            </form>
          </div>
          <div class="col-sm-3 px-5">
            <h4 class="text-center pb-2">聯絡我們</h4>
            <p class="lh-sm">email: jinny8813@gmail.com</p>
            <p class="lh-sm">tel: 0908792865</p>
            <p class="lh-sm"><a href="#">更多聯絡資訊</a></p>
            <p class="lh-sm"><a href="#">關注我們吧</a></p>
            <div class="img_h">
              <a href="#"><img class="mh-100" src="./images/facebook.png" /></a>
              <a href="#"
                ><img class="mh-100" src="./images/instagram.png"
              /></a>
              <a href="#"><img class="mh-100" src="./images/twitter.png" /></a>
              <a href="#"><img class="mh-100" src="./images/youtube.png" /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="pb-3 text-center">
      <?php
echo "<p>Copyright &copy; 2021-" . date("Y") . " BluegaJournal by JinnyLan</p>";
?>
      </div>
    </footer>

  </body>
</html>
