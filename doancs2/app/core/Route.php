<?php
class Route
{
    public function handleRoute($url)
    {
        global $routes;
        unset($routes['default_routes']);
        $url = trim($url,'/');
        $handel = $url;
       foreach ($routes as $key=>$value) {
           if(preg_match('~'.$key.'~is',$url)){
            $handel = preg_replace('~'.$key.'~is',$value,$url);
           }
       }
       return $handel;
    }
   
}

?>