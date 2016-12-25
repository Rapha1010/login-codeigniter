<?php

Class DBlogin extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function autentication($user,$pass){
		$access = array('acesso'=>false); 

		$query = $this->db->get('usuario');
		foreach ($query->result() as $row)
			$usuario[] = array('id'=>$row->id,'nome'=>$row->nome,'endereco'=>$row->endereco,'password'=>$row->senha);

		for($i=0;$i<count($usuario);$i++) {
			if ($user == $usuario[$i]['nome'] and $pass == $usuario[$i]['password']){
			$access = array('acesso'=>true, 'id'=> $usuario[$i]['id'], 'nome'=>$usuario[$i]['nome'],'endereco'=>$usuario[$i]['endereco']); 
			}
		}

		return $access;

	}

}



?>