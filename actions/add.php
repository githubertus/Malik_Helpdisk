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
 $helpdisk = new HelpDisk;
 $title = input('title');
 $content = input('content');
 if($helpdisk->addQuestion($title, $content)){
			ossn_trigger_message(ossn_print('helpdisk:added'));
			redirect(REF);
 } else {
			ossn_trigger_message(ossn_print('helpdisk:add:failed'), 'error');
			redirect(REF);	 
 }