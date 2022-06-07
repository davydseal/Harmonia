<!DOCTYPE html>
<html>
	
<!-- Mirrored from flathtml.wpspace.net/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 30 Aug 2013 14:40:05 GMT -->
<head>
		<title>Harmonia</title>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="assets/prettyphoto/css/prettyPhoto.css">		
		<link rel="stylesheet" href="assets/colorpicker/colorpicker.css">		
		<script src="assets/jquery-1.10.2.min.js"></script>
		<script src="assets/jquery.tools.min.js"></script>
		<script src="assets/jquery.easing.js"></script>
		<script src="assets/jquery.isotope.min.js"></script>
		<script src="assets/main.js"></script>
		<script src="assets/prettyphoto/jquery.prettyPhoto.js"></script>
		<script src="assets/colorpicker/colorpicker.js"></script>
		<!--[if lt IE 9]>
	        <script src="assets/html5shiv.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div id="page">
			<header id="header">
				<ul id="nav_tabs">
					<li class="splash">
						<a href="#splash">
							<div id="profile_photo">
								<img src="images/user_photo.jpg" height="150" width="150" alt="Title Example">
							</div>
      	<div id="profile_name">
       	<div id="author_name">
        	<div class="profile_inner">
										<!-- You can edit name and lastname -->
										<div class="name">Harmonia Cristais</div>
										<div class="pos">e Feng Shui</div>
        	</div>
       	</div>
      	</div>
						</a>
					</li>
					<li class="profile"><a href="#profile"><span class="icon">a</span></a></li>
					<li class="portfolio"><a href="#portfolio"><span class="icon">b</span></a></li>
					<li class="contacts"><a href="#contacts"><span class="icon">c</span></a></li>
				</ul>
			</header><!-- /Header -->
			<div id="main">
				<div id="tab_section">
					<div id="splash" class="tab_content"><!-- Main page -->
						<div class="author_info">
							<div class="user_desc">Login</div>

								<span class="icon"></span>
								
								   <form action="./login/verifica_login.php" method="post" class="niceform">
								Login: <input type="text" name="c_nickname" id="" size="20" />
						    	Senha: <input type="password" name="c_senha" id="" size="20" /><BR><BR><BR>
						    	   <input type="submit" name="botao" id="submit" value="Entrar" /><BR><BR>
                             </form>
                             
							<div class="addition">
								<span class="email">www.harmoniacristais.com.br</span>
								<span class="website"><a href="http://www.harmoniacristais.com.br/">http://www.harmoniacristais.com.br</a></span>
							</div>
						</div>
						<div class="social_links">
							<ul>
								<li><a href="https://www.facebook.com/HarmoniaCristaisEFengShui?fref=ts" class="icon1"><span>0</span></a></li>
								<li><a href="https://twitter.com/HCristais" class="icon2"><span>1</span></a></li>
								<li><a href="http://www.harmoniacristais.blog.br/" class="icon3"><span>3</span></a></li>
								<li><a href="#" class="icon4"><span>p</span></a></li>
							</ul>
     	</div>
					</div><!-- /Main Page -->
					
					
					
					
					
					
    	<div id="resume" class="tab_content"><!-- Resume Section -->
						<div class="section-header opened">
							<a href="#" class="section_toggle"><span><img src="images/section_toggle.png" height="78" width="48" alt="Title Example"></span></a>
							<h2 class="section-title icon2">
								<span class="icon category1"></span>
        Fornecedores
							</h2>
						</div>

						
						
						<div class="section-content">
							<!-- Resume Post -->
							<article class="post resume_post resume_post_1 first odd">
							
							<?php
             require("ligar.php");
            $consulta3 = "SELECT * FROM $table_harfornecedor WHERE status=1 order by codigo";
            $resultado3 = mysql_query($consulta3);
            $quantos_forum = mysql_num_rows($resultado3);

            ?>

                      <?php
                  $qtdProdutos = 0;
            for($j=0;$j < $quantos_forum;$j++)
            {
             $qtdProdutos++;
            $variavel = mysql_fetch_array($resultado3);


            ?>
							
							
								<div class="resume_period category1">
									<span class="period_from">2013</span>
								</div>
								<div class="extra_wrap">
									<div class="resume_header">
										<h4 class="post_title">
											<span class="post_title_icon category1 icon2"></span>
           Lista
										</h4>

									</div>
									<div class="resume_content">
										<p><a href="admin/consultar/consultar_fornecedor.php?codigo_adm=<?php print($variavel['codigo']); ?>" class="modal" rel="{handler: &#39;iframe&#39;, size: {x: 750, y: 500}}"><?php print($variavel['contato']); ?></a></p>
										<?php print($variavel['inscest']); ?><BR>
										<?php print($variavel['inscmun']); ?><BR>
										<?php print($variavel['endereco']); ?><BR>
										<?php print($variavel['cep']); ?><BR>
										<?php print($variavel['telefone']); ?><BR>
										<?php print($variavel['contato']); ?><BR>
										<?php print($variavel['email']); ?><BR>
									    <?php print($variavel['site']); ?><BR>
									</div>
								</div>
								
								 <?php
 }
 ?>
								
								
							</article>
							<!-- /Resume Post -->
							<!-- Resume Post -->




						</div>




 				</div><!-- /Resume Section -->

					
					
					
					
					<div id="portfolio" class="tab_content"><!-- Portfolio Section -->
						<div class="portfolio_wrapper">
							<ul id="portfolio_iso_filters">
								<!-- Portfolio Categories -->
								<li><a data-filter="*" href="#" class="current">All</a></li>
								<li><a data-filter=".filter1" href="#">Web</a></li>
								<li><a data-filter=".filter2" href="#">Graphic</a></li>
								<li><a data-filter=".filter3" href="#">Photo</a></li>
							</ul>
							<div class="portfolio_items">
								<!-- Portfolio post -->
								<article class="portfolio_post filter1 filter3">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio01.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio1.jpg" height="400" width="600">
											<span class="caption">
												<h4 class="post_title">Vestibulum varius ligula</h4>
												<h5>Vivamus suscipit sem</h5>
											</span>
										</a>
									</div>
								</article>
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter2 filter1">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio02.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio2.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Duis dolor arcu, lobortis</h4>
												<h5>Aenean auctor tempor</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter3 filter2">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio03.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio3.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Vivamus suscipit sem ut</h4>
												<h5>Vivamus ac ipsum ut</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter1 filter3">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio04.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio4.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Sed rhoncus massa</h4>
												<h5>Vestibulum imperdiet purus</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter2 filter1">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio05.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio5.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Donec sed euismod</h4>
												<h5>Curabitur aliquet lorem nisl</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter3 filter2">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio06.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio6.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Phasellus fringilla sollicitudin</h4>
												<h5>Curabitur vulputate</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter1 filter3">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio07.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio7.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Fusce eu mattis diam</h4>
												<h5>Vivamus aliquet odio nec</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter2 filter1">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio08.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio8.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Quisque ullamcorper dui</h4>
												<h5>Sed ut eros ut urna</h5>
											</span>
										</a>
									</div>
								</article>  
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter3 filter2">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio09.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio9.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Aenean sit amet</h4>
												<h5>Proin sollicitudin pellentesque</h5>
											</span>
										</a>
									</div>
								</article>  
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter1 filter3">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio10.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio10.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Quisque a luctus erat</h4>
												<h5>Vestibulum pretium orci eu</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter2 filter1">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio11.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio11.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Nulla vel bibendum</h4>
												<h5>Nunc quis magna eu nunc</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter3 filter2">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio12.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio12.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Nulla vel bibendum</h4>
												<h5>Nunc quis magna eu nunc</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter1 filter3">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio13.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio13.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Quisque ipsum tortor</h4>
												<h5>Curabitur bibendum metus</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
								<!-- Portfolio post -->
								<article class="portfolio_post filter2 filter1">
									<div class="post_pic portfolio_post_pic">
										<a href="assets/gallery/portfolio14.jpg" class="w_hover img-link img-wrap" rel="prettyPhoto[gallery]" title="Portfolio item">
											<span class="overlay"></span>
											<span class="link-icon"><img src="images/magnify.png" alt="Title Example"></span>
											<img src="images/portfolio14.jpg" height="400" width="600" alt="Title Example">
											<span class="caption">
												<h4 class="post_title">Vestibulum pretium orci</h4>
												<h5>Class aptent taciti sociosqu</h5>
											</span>
										</a>
									</div>
								</article> 
								<!-- /Portfolio post -->
							</div>
							<div id="portfolio_load_more">
							</div>
						</div>
					</div><!-- /Portfolio Section -->
					
					<div id="contacts" class="tab_content"><!-- Contacts Section -->

						<div class="map_wrap">
							<div class="map_overlay"></div>

						</div>
						<div class="contacts_wrapper">
							<div class="col1">

							</div>
							<div class="col2">
								<div class="inner">
									<div class="contact_form">

									</div>
        	<script type="text/javascript">
											jQuery(document).ready(function() {
												jQuery(".contact_form .enter").click(function(e){
													userSubmitForm();
													e.preventDefault();
													return false;
												});
											});
											function userSubmitForm(){

    											/* Contact form messages */
    											empt = 'Name field can not be empty';
    											to_lng = 'Too long name field';
    											to_lng = 'Too long name field';
    											empt_mail = 'Too short (or empty) email address';
    											to_lng_mail = 'Too long email address';
    											incor = 'Incorrect email address';
    											mes_empt = 'Message can not be empty';
    											to_lng_mes = 'Too long message';

												var error = formValidate(jQuery(".contact_form form"), {
													error_message_show: true,
													error_message_time: 5000,
													error_message_class: "sc_infobox sc_infobox_style_error",
													error_fields_class: "error_fields_class",
													exit_after_first_error: false,
													rules: [
														{
															field: "username",
															min_length: { value: 1,	 message: empt },
															max_length: { value: 160, message: to_lng}
														},
														{
															field: "email",
															min_length: { value: 7,	 message: empt_mail },
															max_length: { value: 60, message: to_lng_mail},
															mask: { value: "^([a-z0-9_\\-]+\\\.)*[a-z0-9_\\\-]+@[a-z0-9_\\-]+(\\\.[a-z0-9_\\-]+)*\\\.[a-z]{2,6}$", message: incor}
														},
														{
															field: "message",
															min_length: { value: 1,  message: mes_empt },
															max_length: { value: 200, message: to_lng_mes}
														}
													]
												});
												if (!error) {
													var user_name  = jQuery(".contact_form #contact_form_username").val();
													var user_email = jQuery(".contact_form #contact_form_email").val();
													var user_site  = jQuery(".contact_form #contact_form_site").val();
													var user_msg   = jQuery(".contact_form #contact_form_message").val();
													var data = {
														action: "submit_contact_form",
														user_name: user_name,
														user_email: user_email,
														user_site: user_site,
														user_msg: user_msg
													};
													jQuery.post("assets/sendmail.html", data, userSubmitFormResponse, "text");
												}
											}

											function userSubmitFormResponse(response) {
												var rez = JSON.parse(response);
												jQuery(".contact_form .result")
													.toggleClass("sc_infobox_style_error", false)
													.toggleClass("sc_infobox_style_success", false);
												if (rez.error == "") {
													jQuery(".contact_form .result").addClass("sc_infobox_style_success").html("Your message sent!");
													setTimeout("jQuery(\'.contact_form .result\').fadeOut(); jQuery(\'.contact_form form\').get(0).reset();", 3000);
												} else {
													jQuery(".contact_form .result").addClass("sc_infobox_style_error").html("Transmit failed!" + rez.error);
												}
												jQuery(".contact_form .result").fadeIn();
											}
										</script>
								</div>
							</div>
						</div>
					</div><!-- /Contacts Section -->
					
				</div>
			</div><!-- /Main -->
			<footer id="footer">
				<a href="#" id="toTop"></a>
				<div class="footer_copyright">
					Harmonia Cristais e Feng Shui
				</div>
			</footer>
			<script>
				jQuery(document).ready(function(){
				  	setColorPicker('bg_col');
				});
			</script>
			<div id="opt_block">
				<div class="opt_header">
					<span></span>
				</div>
				<div class="opt_row bg_color">
					<h3>background color:</h3>
					<div id="bg_col" class="colorSelector"></div>
				</div>
				<div class="opt_row bg_pat">
					<h3>Background Pattern:</h3>
					<ul class="patterns_select">
						<li><a href="#"><img src="assets/patterns/pattern1.png" alt=""></a></li>
						<li><a href="#"><img src="assets/patterns/pattern2.png" alt=""></a></li>
						<li><a href="#"><img src="assets/patterns/pattern3.jpg" alt=""></a></li>
						<li><a href="#"><img src="assets/patterns/pattern4.png" alt=""></a></li>
						<li><a href="#"><img src="assets/patterns/pattern5.png" alt=""></a></li>
					</ul>
				</div>
				<div class="opt_row bg_img">
					<h3>Background Image:</h3>
					<ul class="bg_select">
						<li><a href="#"><img src="assets/bg1.jpg" alt=""></a></li>
						<li><a href="#"><img src="assets/bg2.jpg" alt=""></a></li>
						<li><a href="#"><img src="assets/bg3.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div><!--/Page-->
	</body>

<!-- Mirrored from flathtml.wpspace.net/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 30 Aug 2013 14:42:18 GMT -->
</html>
