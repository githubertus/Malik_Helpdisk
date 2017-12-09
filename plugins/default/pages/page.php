<?php
/**
 * @Name HelpDisk
 *
 * @package ossn Component
 * @author Malik Umer Farooq
 * @copyright 2017 Malik Corporation Private limited
 * @license   General Public Licence https://my-mos.com/public/terms/ 
 * @link      https://my-mos.com/public/
 */
 	$help = new HelpDisk;
	$questions = $help->getQuestion();
	$count = $help->getQuestion(array(
			'count' => true,									  
	));
?>

	<div class='form-group'>
		<input type='text'id='search'class='form-control' placeholder='Search question....'/>
	</div>
	 
	<span class='search-result'></span>
	
	<div id='control'> 
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<h1 class='panel-title'><?= ossn_print('helpdisk:help'); ?></h1>
			</div>
			<div class='panel-body'>
				<?php
				if ($questions) {
					foreach ($questions as $value){ ?>
						<a href='<?= ossn_site_url(); ?>/Help?q=<?= $value->guid; ?>'id='questions'><?= $value->title; ?></a><br>
				<?php 	}
				} ?>
			</div>
		</div>
		<?php echo ossn_view_pagination($count);  ?>
	</div> 
