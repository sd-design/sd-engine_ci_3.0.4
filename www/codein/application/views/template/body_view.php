<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2><?php echo $page_title;?></h2>
					</div>
					<div class="col-md-6">
						<ul class="page-depth">
							<li><a href="<?php echo base_url();?>">Вертикаль-Альфа</a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- blog section 
			================================================== -->
		<section class="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="blog-box">

							<div class="blog-post">
								<img src="upload/blog/1.jpg" alt="">
								<div class="post-content-text">
									<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
									<span>22 Jannuary 2015</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<a href="single-post.html">Continue reading...</a>
								</div>
							</div>

							<div class="blog-post">
								<img src="upload/blog/2.jpg" alt="">
								<div class="post-content-text">
									<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
									<span>22 Jannuary 2015</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									<a href="single-post.html">Continue reading...</a>
								</div>
							</div>

										</div>
						
					</div>
					<div class="col-md-4">
						<div class="sidebar">

							<div class="category-widget widget">
								<h2><?php echo $title_menu;?></h2>
								<ul class="category-list">
                                    <?php foreach ($items_menu->result()  as $item_m):?>
<li><a href="<?php echo $item_m->item_url;?>"><?php echo $item_m->item_name;?></a></li>
<?php endforeach;?>
								</ul>
							</div>

							<div class="text-widget widget">
							<h2>Цена вопроса</h2>
								<div class="text-box">
									<p>Наши менеджеры всегда подберут оптимальный бюджет, независимо от ваших задач и целей.</p>
									<h4>Звоните <b>+7 (965) 128-17-01</b></h4>
								</div>
							</div>
				<div class="tags-widget widget">
								<h2>ТЕГИ</h2>
								<ul class="tags-list">
									<li><a href="#">Строительство</a></li>
									<li><a href="#">Ремонт</a></li>
									<li><a href="#">Утепление</a></li>
									<li><a href="#">Гидроизоляция</a></li>
									<li><a href="#">Огнезащита</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End blog section -->
