<?php

class App
{
    protected $defaultMethod = "index";
    protected $defaultController = "Home";
    protected $parameters = [];

    public function __construct()
    {
        //urls come in the form {controller}/{action}/{parameters}
        $url = $this->processUrl();
        
        echo 'url: ' . print_r($url) . '<br />';

        //check the {controller}
        if(file_exists('../app/controllers/' .$url[0]. '.php')) {
            echo 'controller exists: ' . $url[0] . '<br />';
            $this->defaultController = $url[0];
            unset($url[0]);
        }
        
        //set the default controller
        require_once('../app/controllers/' .$this->defaultController. '.php');
        $this->defaultController = new $this->defaultController;
        
        //check {action}
        if(isset($url[1])){
            
            //if the action exists on the controller
            if(method_exists($this->defaultController, $url[1])){
                echo 'method exists: ' . $url[1] . '<br />';
                $this->defaultMethod = $url[1];
                unset($url[1]);
            }
        }
        $this->parameters = $url ? array_values($url) : [];
        
        echo 'PARAMATERS: ' . print_r($this->parameters);
        
        call_user_func_array([$this->defaultController, $this->defaultMethod], $this->parameters);
    }

    public function processUrl(){
        if(isset($_GET['url'])) {
            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }
}

?>