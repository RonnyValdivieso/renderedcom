<?php
script('renderedcom', array('script','progressbar','php_file_tree'));
style('renderedcom', array('bootstrap', 'font-awesome.min','style'));
?>

<div id="app" >
	<div id="app-content" class="row" >
		<div id="app-content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
            <div id="job-nav" class="col-xs-12 col-sm-2 col-md-2 sidenav">
                <p id="userNameFront" class="bg-success"><?php p($_['user']);?></p>
                <?php print_unescaped($this->inc('part.navigation')); ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 render-form">
                <?php print_unescaped($this->inc('content')); ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php print_unescaped($this->inc('progreso')); ?>
            </div>
		</div>
	</div>
</div>
