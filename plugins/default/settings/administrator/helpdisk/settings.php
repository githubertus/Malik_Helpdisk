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
	$list = $help->getQuestion();
	$count = $help->getQuestion(array(
			'count' => true,									  
	));
	$help_by_id = $help->helpGetByGuid($item->guid);
 ?>
 <a class='btn btn-primary btn-lg'href='<?= ossn_site_url(); ?>/HelpAdd/'>	
	<label><?php echo ossn_print('helpdisk:add');?></label>
 </a>
 <div id='AddForm'style='display:none;'>
	<?php echo ossn_view_form('helpdisk/add', array(
							'action' => ossn_site_url() . 'action/helpdisk/add',
					)); ?>		
</div>
 <br><br>
 <table class="table table-striped">
  <tr>
    <th scope="col"><?php echo ossn_print('helpdisk:from');?></th>
    <th scope="col"><?php echo ossn_print('helpdisk:q:title');?></th>
    <th scope="col"><?php echo ossn_print('helpdisk:action');?></th>
  </tr>
  <?php if($list){ 
  		foreach($list as $item){
				$user = ossn_user_by_guid($item->owner_guid);
  ?>
  <tr>
    <td><a href="<?php echo $user->profileURL();?>"><?php echo $user->fullname;?></a></td>
    <td><?php echo $item->title;?></td>
    <td><a class="label label-danger" href="<?php echo ossn_site_url("action/helpdisk/delete?guid={$item->guid}", true);?>"><?php echo ossn_print('helpdisk:delete');?></a>
	<br>
	<a class="label label-warning"  data-toggle='modal'data-target='#edit<?= $item->guid ?>'><?php echo ossn_print('helpdisk:edit');?></a>
	<br>
	<a class="label label-info"  data-toggle='modal'href='<?= ossn_site_url(); ?>/Help?q=<?= $item->guid; ?>'><?php echo ossn_print('helpdisk:view');?></a>
	</td>
  </tr>
  <?php	} } ?>
</table>
<div id='edit<?= $item->guid ?>'class='modal fade' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h1>Edit</h1>
			</div>
				<div class='modal-body'>
					Comming Soon			
				</div>
		</div>		
	</div>
</div>
<?php
echo ossn_view_pagination($count);
?>