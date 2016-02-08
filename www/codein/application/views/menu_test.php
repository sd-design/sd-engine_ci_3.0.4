<header class="clearfix">
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
			
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" alt=""></a>				
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
                                       <?php

    
    echo $counter; 

?>                 
				
                        
						</ul>
                   <?php foreach ($companies as $comp=>$value): ?>
                    <li><a href=""><?php 
echo $comp;
                        ?></a>
                <ul class="dropdown">
                        
                        <?php
foreach($value as $dat)
    {
       ?>
                 <li> <a href=""> 
                    <?php echo $dat;
    ?></a></li> 
    <?php
    }
                    ?></ul></li>
                 
      	<?php endforeach;?>              
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>
		<!-- End Header -->