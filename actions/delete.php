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
 $guid = input('guid');
 $question = ossn_get_object($guid);
	if($question && $question->deleteObject()){
			ossn_trigger_message(ossn_print('helpdisk:deleted'));
			redirect(REF);
 } else {
			ossn_trigger_message(ossn_print('helpdisk:deleted:failed'), 'error');
			redirect(REF);	 
 } 