<?php 
    if($_POST){
    if(file_exists('login.json')){
      $dados = json_decode(file_get_contents('login.json'), true);
    }else{
      $dados = [ "usuarios" => [] ];
    }
    foreach ($dados['usuarios'] as $key => $value) {
      if($value['email'] == $_POST['email'] && password_verify($_POST['senha'], $value['hash'])){
        header('Location: bem-vindo.php');
      }
    }
  }
 ?>