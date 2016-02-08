<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<div class="row">
                     <div class="breadcrumbs"><ul class="nav-up">
                    <li><a href="<?php echo base_url();?>">главная</a></li> / <li><a href="<?php echo base_url();?>news/" class="active">новости</a></li>
                    </ul></div>
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
<?php foreach ($list_news->result()  as $news):?>
							<div class="blog-post">
								
								<div class="post-content-text">
									<h2><a href="<?php echo base_url();?>news/<?php echo $news->post_url;?>"><?php echo $news->post_name;?></a></h2>
                                   	<span><?php echo $news->post_time;?></span>
                                     <img src="/uploads/<?php echo $news->post_image;?>" alt="<?php echo $news->post_name;?>">
									<p><?php echo $news->post_anons;?></p>
									<a href="<?php echo base_url();?>news/<?php echo $news->post_url;?>">Подробнее...</a>
								</div>
							</div>
<?php endforeach;?>
							<ul class="pagination-list">
								<li><a href="#" class="prev-pag">prev</a></li>
								<li><a href="#" class="active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#" class="next-pag">next</a></li>
							</ul>

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
								<h2><?php echo $title_widget;?></h2>
								<div class="text-box">
	<div class="side-navigation">
							<ul class="side-navigation-list">
<?php foreach ($items_widget->result()  as $item_w):?>
<li><a href="<?php echo $item_w->item_url;?>"><?php echo $item_w->item_name;?></a></li>
<?php endforeach;?>
        </ul>
							</div>

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
