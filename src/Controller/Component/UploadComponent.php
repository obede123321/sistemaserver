<?php 
namespace App\Controller\component;

use Cake\Controller\component;
use Cake\Controller\componentRegistry;
use Cake\Network\Exception\InternalErralErrorException;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;

/** upload component */

class UploadComponent extends Component 
{
	public $max_files = 3;

	public function send( $data ) 
	{
		if( !empty($data)) {
			if( count($data) > $this->max_files) {
				throw new InternalErrorException("Error Processing Request. Max number files accepted is {$this->max_files}", 1);
			}

			foreach ($data as $file) {
				$filename = $file['name'];
				$file_tmp_name = $file['tmp_name'];
				$dir = WWW_ROOT.'file'.DS.'uploads';
				$allowed = array('pdf', 'docx', 'txt');
				if( !in_array(substr(strrchr($filename , '.') , 1) , $allowed)) {
					throw new InternalErrorException("Error Processing Request.", 1);

				}elseif( is_uploaded_file($file_tmp_name)){
		

					$filedb = TableRegistry::get('File');
					$entity = $filedb->newEntity();
					$entity->filename = $filename;
					$filedb->save($entity);

					move_uploaded_file($file_tmp_name, $dir.DS.Text::uuid().'-'.$filename);
				}
			}
		}
	}
} 




?>