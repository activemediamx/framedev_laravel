<!DOCTYPE html>
<html lang="es" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			<?=env('SITE_NAME')?>
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="<?=env('APP_URL')?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=env('APP_URL')?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="<?=env('APP_URL')?>assets/demo/default/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid  m-error-1" style="background-image: url(<?=env('APP_URL')?>assets/app/media/img//error/bg1.jpg);">
				<div class="m-error_container">
					<span class="m-error_number">
						<h1>
							404
						</h1>
					</span>
					<p class="m-error_desc">
						<?=env('SITE_NAME')?>:<br> El recurso que solicita no existe o fué eliminado
					</p>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="<?=env('APP_URL')?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?=env('APP_URL')?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
	</body>
	<!-- end::Body -->
</html>
