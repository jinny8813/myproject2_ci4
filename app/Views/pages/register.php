<?= $this->extend("layouts/template")?>
<?= $this->section('content')?>
    <section class="bg_two">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h2 class="text-center mb-3">註冊</h2>

                    <form action="<?= base_url("User/doRegister")?>" method="post">
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-8">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-8">
                                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="cpassword">Confirm Pass</label>
                            </div>
                            <div class="col-8">
                                <input type="password" name="cpassword" class="form-control" placeholder="ReType your password">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <label for="nickname">Nickname</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="nickname" class="form-control" placeholder="Enter your nickname">
                            </div>
                        </div>            
                        <div class="row mb-3  justify-content-center">
                            <button type="submit" name="submit" class="btn btn-primary col-2">Sign up</button>
                        </div>
                    </form>

                    <?php 
                    if(isset($error_messages)){
                        echo '<div class="alert alert-danger">' . esc($error_messages) . '</div>';
                    }        
                    ?>
        
                    <div class="text-center row justify-content-center py-5">
                        <p class="text-center col-12">已經有帳號!!回到登入頁面</p>
                        <a href="<?php echo base_url('User/login') ?>" class="btn btn-primary col-2">登入</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?= $this->endSection()?>