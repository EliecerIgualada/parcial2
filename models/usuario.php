<?php
class usuario{
    private $usuario;
    private $password;
    private $salt;
    private $nombre;

      public function __construct($usuario,$password,$salt,$nombre){
        $this->usuario = $usuario;
        $this->password = $password;
        $this->salt = $salt;
        $this->nombre = $nombre;
      }
      public function valida_usuario(){
        #password = hash(password_usuario . salt)
        #salt = md5(random_bytes(20))
        
        $user[]=["usuario"=>"Jperez", "password"=>"4736daba80de15df6b6397e0f6b90ecb542f89c7","salt"=>"AqMRq5*1Nv7w","nombre"=>"Juan Perez"];
        $user[]=["usuario"=>"Eigualada", "password"=>"a1318359079954667208fb5c0dc20f6bb45c7f05","salt"=>"Xd6Uvr!Ps5k5","nombre"=>"Eliecer Igualada"];
        $user[]=["usuario"=>"Dchiaris", "password"=>"2f5f103dd5048413febe5d0558103dd1e1ef966a","salt"=>"36WxM7n90Q^7","nombre"=>"Danis Chiari"];
        
        foreach($user as $u)
        {
          $pass = sha1($this->password.$u["salt"]);
          if($this->usuario == $u["usuario"] && $pass == $u["password"])
            return $u;
        }
        return [];
      }
}
?>