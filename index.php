<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   file                 :  index.php
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   author               :  Muhamed Skoko - mskoko.me@gmail.com
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

include_once($_SERVER['DOCUMENT_ROOT'].'/includes.php');

//////////////////////////

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $Site->SiteConfig()['site_name']; ?></title>

	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/head.php'); ?>
</head>
<body>
	<!-- Header -->
	<header class="header_area">
		<!-- Navigation -->
		<?php include_once($url.'/assets/php/nav.php'); ?>
	</header> <!-- end Header -->
	
	<div class="findResto">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="row">
						<div class="col-6" style="text-align:left;">
							<label for="tSa">(SA) </label>
							<select id="tSa" name="sa" class="form-control">
								<option value="en">English</option>
								<option value="ru">Russian</option>
								<option value="bs" selected>Bosnian</option>
							</select>
						</div>
						<div class="col-6" style="text-align:left;">
							<label for="tNa">(NA) </label>
							<select id="tNa" name="na" class="form-control">
								<option value="en" selected>English</option>
								<option value="ru">Russian</option>
								<option value="bs">Bosnian</option>
							</select>
						</div>
					</div> <br>

					<div class="row">
						<div class="col-6" style="text-align:left;">
							<label for="tZaPrevod">Unesite tekst za prevod:</label>
							<textarea id="tZaPrevod" name="text" class="form-control" rows="6"></textarea>
						</div>

						<div class="col-6" style="text-align:left;">
							<label for="sPrevod">Prevod na <span id="sJezik">ruski</span> jezik:</label>
							<textarea id="sPrevod" class="form-control" disabled="" rows="6"></textarea>
						</div>
					</div> <br>
					<small>Prevedeno uz pomoc Yandex Translate</small>

					<span class="btn btn-lg btn-primary" style="float:right;cursor:pointer;" onclick="prevedi()">Translate!</span>
				</div>
			</div>
		</div>
	</div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="container">
                <div class="row justify-content-center">
                    <br>
                    <p class="text-center">
                        <small>&copy; <?php echo date('Y'); ?></small> <?php echo $Site->SiteConfig()['site_link']; ?> <br>
                    </p>
                    <div class="footerLinks">
                        <?php foreach ($Site->footerLinks() as $k => $v) { ?>
                            <li>
                                <a href="/<?php echo $k ?>"><small><?php echo $v; ?></small></a>
                            </li>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<!-- Footer -->
	<?php include_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/footer.php'); ?>
</body>
</html>
