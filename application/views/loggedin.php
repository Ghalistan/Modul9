<html>
<head>
<title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('Assets/Login/login.css'); ?>">
<script src="<?php echo base_url('Assets/Login/login.js'); ?>"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <?php
                    $cookie = $this->input->cookie(NAMA_COOKIE);
                    if(isset($cookie)){
                        echo $cookie;
                    } else if(isset($_SESSION[NAMA_SESSION])) {
                        echo $_SESSION[NAMA_SESSION];
                    }
                ?>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- nomor 17 -->
                    <li class="active"><a href="">Log Out<span class="sr-only">(current)</span></a></li>
                    <!-- Endof Nomor 17 -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="col-md-6">
            <strong>Upload Image : </strong>
            <!-- Panggil fungsi Upload/do_upload disini -->
                <div class="form-group">
                    <!-- Tampilkan alert gagal jika gagal upload, dan alert berhasil jika berhasil upload disini -->
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input type="file" id="imgInp" name='userfile'>
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                        <span class="input-group-btn">
                            <input class="btn btn-primary" type="submit" value="Upload">
                        </span>
                    </div>
                    <img id='img-upload'/>
                </div>
            </form>
        </div>
    </div>
    <!-- Nomor 19 -->
    <div class="container">
        <div class="row">
            <!-- Tampilkan semua foto yang sudah diupload -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <img class="img-responsive" src=""/>
            </div>
        </div>
    </div>
    <!-- EndOf Nomor 19 -->
</body>
</html>