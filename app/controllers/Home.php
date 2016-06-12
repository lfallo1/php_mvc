<?php



class Home extends Controller{
    
    public function index($user_id = -1){
        $user = $this->model('User');
        if($user_id > -1){
            $user->name='Lance';
            $user->email='fallon.lance@gmail.com';
            $user->age=29;
        }
        else{
            $user->name='';
            $user->email='';
            $user->age='';
        }
        $this->view('home', ['title'=>'Home - Register Page', 'user'=>$user, 'discount'=>NULL]);
    }
    
    public function register($discount = ''){
        $user = $this->model('User');
        $user->name='';
        $user->email='';
        $user->age='';
        $this->view('home', ['title'=>'Home - Register Page', 'user'=>$user, 'discount'=>$discount]);
    }
}