        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url('Assets/Landing/images/signin-image.jpg'); ?>" alt="sing up image"></figure>
                        <!-- Nomor 3 -->
                        <a href="" class="signup-image-link">Create an account</a>
                        <!-- Endof Nomor 3 -->
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <?php
                            // Nomor 12
                            // Jika berhasil registrasi maka munculkan alert SuccessRegis
                            
                            // Jika gagal login tampilkan alert gagal login
                            else if(isset($_SESSION['falselogin'])) {
                                $this->load->view('Alerts/FailLogin');
                            }
                        ?>
                        <!-- Nomor 13 -->
                        <form action="" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <!-- Endof Nomor 13 -->
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>