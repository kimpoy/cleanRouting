<?php

namespace app\core;

class Router
{
  #public $basepath = __DIR__ . "/../";
  private $routes;

  private function add($url, $view)
  {
    #creates an array from all the url in this get
    $this->routes[$url] = $view;
  }

  public function get($url, $view)
  {
    $this->add($url, $view);
  }
  public function post($url, $view)
  {
    $this->add($url, $view);
  }
  public function delete($url, $view)
  {
    $this->add($url, $view);
  }
  public function put($url, $view)
  {
    $this->add($url, $view);
  }
  public function patch($url, $view)
  {
    $this->add($url, $view);
  }


  public function run($url)
  {
    if (array_key_exists($url, $this->routes)) {
      return BASE_PATH . $this->routes[$url];
    } else {
      #return '../app/views/notfound.php';
      return BASE_PATH . '/views/notfound.php';
    }
  }
}
