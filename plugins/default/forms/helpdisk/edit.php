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
	$help_by_id = $help->helpGetByGuid($item->guid);
 ?>		
				<?php foreach($help_by_id as $item){ ?>
					 <div>
						<label><?php echo ossn_print('helpdisk:title');?></label>
						<input type='text'class='form-control' name="title"value='<?=  $item->title; ?>' />
						<input type='text'class='form-control' name="guid"value='<?=  $item->guid; ?>' style='display:none' hidden />
					</div>
					<div>
						<label><?php echo ossn_print('helpdisk:content');?></label>
						<textarea name='content'class="ossn-editor"><?=  $item->description; ?></textarea>

					</div>
					<div class="maring-top-10">
						<input class="btn btn-primary" type="submit" value="<?php echo ossn_print('helpdisk:submit');?>" />
					</div>
					<?php					}			
						
					?>	