<div class="container theme-showcase">
	<h1>Раздел: <?php echo $category_name;?></h1>

	<div id="body">
		<p> Описание: <?php echo $category_descript;?></p>
<?php foreach ($list_posts->result()  as $item):?>
<div class="row">
<div class="col-sm-7">
<h4><a href="<?php echo base_url();?>post/<?php echo $item->post_url;?>"><?php echo $item->post_name;?></a></h4>
<p class="descript"><?php echo $item->post_anons;?></p>
</div>
</div>
<?php endforeach;?>
	<p class="footer"></p>
	
</div>
</div>


