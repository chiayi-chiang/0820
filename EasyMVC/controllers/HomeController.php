<?php

class HomeController extends Controller {
    
    function index() {
        echo "home page of HomeController";
    }
    
    function hello($name) {
        $user = $this->model("User");//呼叫一個model方法
        $user->name = $name;
        $this->view("Home/hello", $user);//呼叫一個view方法

        // echo "Hello! $user->name";
    }
    
}

?>