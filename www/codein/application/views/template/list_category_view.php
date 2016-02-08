<div class="container theme-showcase">
	<h1>Все разделы:</h1>

	<div id="body">
		<p></p>
<?php foreach ($list_category->result()  as $item):?>
<div class="row">
<div class="col-sm-5">
<h4><a href="<?php echo base_url();?>category/<?php echo $item->category_url;?>"><?php echo $item->category_name;?></a></h4>
<p class="descript"><?php echo $item->category_descript;?></p>
</div>
</div>
<p class="footer"></p>
<?php endforeach;?>

	
</div>
</div>


