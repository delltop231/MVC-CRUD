<?php 

class Home extends Controller{

  public function index()
  {
    $data['judul'] = 'Home';
    $data['nama'] = $this -> model('Model_user') -> GetUser();
    $this -> view('templates/header',$data);
    $this -> view('home/index',$data);
    $this -> view('templates/footer');
  }

}

?>