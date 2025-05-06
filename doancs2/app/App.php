<?php
class App
{

    private $__controller, $__action, $__params, $__route;
    public function __construct()
    {
        global $routes;
        $this->__route = new Route();
        if (!empty($routes['default_routes'])) {
            $this->__controller = $routes['default_routes'];
        }

        $this->__action = "index";
        $this->__parmas = [];
        $this->handleUrl();

    }
    function get_url()
    {
        if (!empty($_SERVER["PATH_INFO"])) {
            $url = $_SERVER['PATH_INFO'];

        } else {
            $url = '/';
        }
        return $url;
    }
    public function handleUrl()
    {

        $url = $this->get_url();
        $url = $this->__route->handleRoute($url);
        $urlArray = array_filter(explode('/', $url));
        $urlarrayValue = array_values($urlArray);
        $urlcheck = '';
        $url = '';
        if(!empty($urlarrayValue)) {
        foreach ($urlarrayValue as $key=>$value) {
            $urlcheck .= "$value/";
            $filecheck = rtrim($urlcheck,"/");
            $filearray = explode("/", $filecheck);
            $filearray[count($filearray) -1] = ucfirst(end($filearray));
            $filecheck = implode("/", $filearray);
            if(isset($urlarrayValue[$key -1])) {
                unset($urlarrayValue[$key -1]);
            }
            if (file_exists('app/controllers/' . $filecheck . '.php')) {
                $url = $filecheck;
                break;
            }
        }
        $urlarrayValue = array_values($urlarrayValue);     
         
        }
        if (!empty($urlarrayValue[0])) {
            $this->__controller = ucfirst($urlarrayValue[0]);
           
        } else {
            $this->__controller = ucfirst($this->__controller);
            $url = $this->__controller .'';
        }

        if (file_exists('app/controllers/' . $url . '.php')) {
            require_once 'app/controllers/' . $url . '.php';

            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlarrayValue[0]);
            } else {
                $this->loaderror();
            }
        } else {
            $this->loaderror();
        }
        if (!empty($urlarrayValue[1])) {
            $this->__action = $urlarrayValue[1];
            unset($urlarrayValue[1]);
        }

        if (method_exists($this->__controller, $this->__action)) {
            $this->__params = array_values($urlarrayValue);
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->loaderror();
        }

    }
    public function loaderror($name = '404')
    {
        require_once 'app/error/' . $name . '.php';

    }
}
$app = new App();
?>