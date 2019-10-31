<!-- <form action="<?=base_url()?>home/login" method="post">
    <input type="text" name="username" placeholder="Enter Username" />
    <input type="password" name="password" />
    <input type="submit" value="Login" />
</form> -->

<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?=base_url()?>template/images/icon/logo1.png" alt="Logo">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?=base_url()?>home/login" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                                <div class="social-login-content">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
