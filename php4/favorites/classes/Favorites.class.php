<?php
class Favorites{
  private $plugins = [];
  function __construct(){
      $path = 'classes/';
      $results = scandir($path);

      foreach ($results as $result) {
          if ($result === '.' or $result === '..') continue;

          if (is_dir($path . '/' . $result)) {
              foreach(glob($path . $result . '/' . "*.class.php") as $class) {
                  include $class;
              }
          }
      }

      $this->findPlugins();
  }
	
  private function findPlugins() {
      try {
          foreach (get_declared_classes() as $class) {
              $rc = new ReflectionClass($class);
              if ($rc->implementsInterface('IPlugin')) {
                  $this->plugins[] = $rc;
              }
          }
      }catch (ReflectionException $e){
          echo $e->getMessage();
      }
  }
	
  function getFavorites($methodName):array{
      $list = [];
      foreach($this->plugins as $plugin){
          if($plugin->hasMethod($methodName)){
              $rm = $plugin->getMethod($methodName);
              if($rm->isStatic())
                  $list[] = $rm->invoke(null);
              else{
                  $instance = $plugin->newInstance();
                  $list[] = $rm->invoke($instance);
              }
          }
      }
      return $list;
  }
}
