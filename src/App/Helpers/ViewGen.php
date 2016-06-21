<?php
namespace App\Helpers;
class ViewGen {
    public function create($filename, array $arguments=array()) {
        if (!empty($arguments)) {
           foreach ($arguments as $key => $value) {
               $$key = $value;
           }
        }
      if (file_exists('src'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.$filename.'.php')) {
          ob_start();
            eval("?>".file_get_contents('src'.DIRECTORY_SEPARATOR."Views".DIRECTORY_SEPARATOR.$filename.'.php'));
        return ob_get_clean();
            
      }
    }
}