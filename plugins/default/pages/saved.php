<?php
?>
<?php if(isset($_GET['q'])){ 
	 $guid = $_GET['q'];
	$specific_question = $help->helpGetByGuid($guid); ?>
		<div class='panel panel-default'>
		<div class='panel-heading'>
			<h1 class='panel-title'><?= $specific_question->title ?></h1>
		</div>
		<div class='panel-body'>
			<p><?= $specific_question->description; ?></p>
		</div>
		</div>
		
<?php } ?>
<?php if(isset($_POST['action'])){
	echo $title = $_POST['action'];	
	//$obj = new OssnObject;
	//$search = $obj->searchObject(['search_type'=>false,'title' => "{$title}",'type' => 'help','subtype' => 'helpdisk']);
	/*echo "		<div class='panel panel-default'>
		<div class='panel-heading'>
			<h1 class='panel-title'><?= ossn_print('helpdisk:search').$search; ?></h1>
		</div>
		<div class='panel-body'>
		<?php //foreach ($search as $value){?>
		<a href='<?= ossn_site_url(); ?>/Help?q=<?php // $value->guid; ?>'id='questions'><?php // $value->title; ?></a><br>
		<?php //} ?>
		</div>
		</div>";*/
?>
<?php } ?>