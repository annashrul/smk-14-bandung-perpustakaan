
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/kipso/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 02:02:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$this->config->item('web')?>assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$this->config->item('web')?>assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$this->config->item('web')?>assets/img/icon.png">
    <link rel="manifest" href="<?=$this->config->item('web')?>assets/images/favicons/site.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Forum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?=$this->config->item('web')?>assets/css/login.css">
    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/plugins/kipso-icons/style.css">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/css/vegas.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/css/style.css">
    <link rel="stylesheet" href="<?=$this->config->item('web')?>assets/css/responsive.css">


    <script src="<?=$this->config->item('web')?>assets/js/jquery.min.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/waypoints.min.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/TweenMax.min.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/wow.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/countdown.min.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/vegas.min.js"></script>
    <!-- template scripts -->
    <script src="<?=$this->config->item('web')?>assets/js/theme.js"></script>
    <script src="<?=$this->config->item('web')?>assets/js/scrollreveal.min.js"></script>
</head>
<body>
<div class="banner-wrapper">
    <div class="topbar-one">
        <div class="container">
            <div class="topbar-one__left col-lg-6">
                <div class="logo-box clearfix">
                    <a class="brand" href="<?=$this->config->item('web')?>">
                        <img src="<?=$this->config->item('logo')?>" class="main-logo" width="75" alt="Awesome Image" />
                    </a>
                </div><!-- /.logo-box -->
            </div><!-- /.topbar-one__left -->
            <div class="col-lg-6 col-md-offset-10" style="margin-top:20px;">
                <a class="btn btn-primary " href="<?=$this->config->item('web')?>" style="color:white;">Beranda</a>
            </div><!-- /.topbar-one__right -->
        </div><!-- /.container -->
    </div><!-- /.topbar-one -->
    <section class="banner-one">
        <div class="card-container container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="padding:60px">
                    <div class="toggle"><i class="fa fa-user fa-pencil fa-lg" style='display:none'></i></div>
                    <div class="card login-register login-reset">
                        <h1 class="title">Login</h1>
                        <form action="<?=base_url();?>auth/login" method="post">
                            <div class = "input-container has-feedback">
                                <input type="text" id="username" name="username" required autocomplete="off" pattern="[\w_-]{3,20}" title="Must contain from 3 to 20 characters such as any letter, number, an underscore, or a hyphen."/>
                                <label for="Username">Username</label>
                                <i class="fa fa-user form-control-feedback"><?php echo form_error('username'); ?></i>
                            </div>
                            <div class = "input-container has-feedback">
                                <input type="password" id="password" name="password" required autocomplete="off" />
                                <label for="Password">Password</label>
                                <i class="fa fa-lock form-control-feedback"><?php echo form_error('password'); ?><</i>
                            </div>
                            <div class = "input-container has-feedback">
                                <?php if ($this->session->flashdata('error')) { ?>
                                    <div style='font-style:italic;color:red'> <?= $this->session->flashdata('error') ?> </div>
                                <?php } ?>
                            </div>
                            <div class="button-container">
                                <button type="submit" class="rkmd-btn btn-lightBlue ripple-effect float-right"><span>Sign in</span></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>


<script>
	//move input label function
	$('.input-container').find('input').on('keyup blur focus', function (e) {
		var $this = $(this),
			label = $this.next('label');
		if(e.type == 'blur') {
			if($this.val() === '' ) {
				label.removeClass('active');
			}
		} else if (e.type === 'focus') {
			if( $this.val() === '' ) {
				label.addClass("active");
			}
		}
	});

	// Toggle Function
	$('.toggle').click(function(){
		// Switches the Icon
		$(this).children('i').toggleClass('fa-pencil');
		$('.tooltip').text(($('.tooltip').text() === 'SIGNUP') ? 'SIGNUP' : 'SIGNUP');
		// Switches the forms
		$('.login-register').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		}, "slow");
	});

	$('.footer a').click(function(){
		// Switches the forms
		$('.card-container').children('.toggle').toggle();
		$('.login-reset').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		}, "slow");
	});
</script>