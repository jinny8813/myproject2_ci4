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
            <h3 class="text-center pt-5 mb-3" id="changeTitle">創建文章</h3>

            <div class="p-5 mx-5">
                <form action="" method="post" id="createForm">
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="author">文章作者</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="author" class="form-control" disabled value="<?= esc($nickname)?>">
                            </div>
                        </div>
                        <div class="form-group row mb-3 d-none">
                            <div class="col-4">
                                <label for="authorID">作者ID</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="authorID" id="authorID" class="form-control" disabled value="<?= esc($id)?>">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="title">文章標題</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="title" id="title" class="form-control" placeholder="請輸入標題" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="category">文章分類</label>
                            </div>
                            <div class="col-8">
                                <select name="category"id="category" class="form-select">
                                    <option value="no">請選擇文章分類</option>
                                    <option value="doll">棉花娃娃</option>
                                    <option value="baking">甜點烘焙</option>
                                    <option value="diary">手帳日誌</option>
                                    <option value="drawing">插畫繪圖</option>
                                    <option value="guitar">吉他彈唱</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="picture">封面圖片</label>
                            </div>
                            <div class="col-8">
                                <input class="form-control" type="file" name="picture" accept="image/png, image/jpeg, image/jpg" disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="content">文章內容</label>
                            </div>
                            <div class="col-8">
                                <textarea  name="content"id="content" class="form-control" placeholder="請輸入內容" rows="10" required></textarea>
                            </div>
                        </div>    
                        <br>
                        <div class="row mb-3  justify-content-center">
                            <button type="submit" name="submit" id="button" class="btn btn-primary col-2" onclick="doCreate()">送出</button>
                        </div>
                    </form>

                    <?php 
                    if(isset($error_messages)){
                        echo '<div class="alert alert-danger">' . esc($error_messages) . '</div>';
                    }        
                    ?>
                    <script>
                        let str="<?= isset($success_messages)? esc($success_messages):''?>";
                        if(str!=''){
                            alert(str);
                        }
                    </script>

<script>
    function doCreate(){
    event.preventDefault();

    let authorID = document.getElementById("authorID").value;
    let title = document.getElementById("title").value;
    let category = document.getElementById("category").value;
    let content = document.getElementById("content").value;

    $.ajax({
        url: "<?= base_url("Blog/doCreateBlog")?>",
        type: 'POST',
        dataType: 'json',
        data: {
            authorID:authorID,
            title:title,
            category:category,
            content:content
        }
    })
    .done(function(e){
        //window.location.reload();
        window.location.href = `<?php echo base_url('Blog')?>`;
    })
    .fail(function(e){
        try{
            $('#errorText').append(`status code: ${e.responseJSON.error}
                                    <br>
                                    error messages: ${e.responseJSON.messages.error}`);
        }catch(error){
            console.log(e);
            $('#errorText').html('伺服器連線失敗');
        }
    })
}
</script>
        
                    <div class="text-center row justify-content-center py-5">
                        <p class="text-center col-12">回到所有文章頁面</p>
                        <a href="<?php echo base_url('Blog') ?>" class="btn btn-primary col-2">返回</a>
                    </div>                                                                                                                                                                                                                                                                                                                                     
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