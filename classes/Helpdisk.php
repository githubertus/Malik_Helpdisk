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
class HelpDisk extends OssnObject {
		public function addQuestion($title, $content) {
				if(!empty($title) && !empty($content)) {
						$this->owner_guid = ossn_loggedin_user()->guid;
						$this->type = 'help';
						$this->subtype = 'helpdisk';
						$this->title = $title;
						$this->description = $content;
						//$this->data->count = 0;
						return $this->addObject();
				}
		}
		public function getquestion(array $params = array()) {
				return $this->searchObject(array_merge(array(
						'type' => 'help',
						'subtype' => 'helpdisk'
				), $params));
		}
		public function helpGetByGuid($guid,array $params = array()) {
				return $this->getObjectById(array_merge(array(
						'guid' => $guid ,
						'type' => 'help',
						'subtype' => 'helpdisk'
				), $params));
		}	
		public function searchQbyTitle(array $params) {
				return $this->searchObject($params);
		}			
}