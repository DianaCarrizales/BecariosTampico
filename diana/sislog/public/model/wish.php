<?php

include 'conexion.php'; 

class wish extends conexion {
        
        private $fine; 
	private $user ; 
	private $password;
	private $consulta ;
	private $conexion;
	private $row, $pas1 , $pas2;
        private $penombre, $peapellido, $peusuario, $pepassword, $verificar ; 

	public function wish(){

	$conect = new conexion();
	$this->conexion = $conect -> conectar();
	$conect -> seleccion_db();  

	}

	public  function login($usuario, $pass){
		$this->user = $usuario;
		$this->password= $pass;
		$this->consulta= mysql_query("SELECT usuario , password,privilegio FROM wisher 
		where usuario = '".$this->user."' and  password = '".$this->password."' and privilegio=1", $this->conexion); 
		$this->consulta2= mysql_query("SELECT usuario , password,privilegio FROM wisher 
		where usuario = '".$this->user."' and  password = '".$this->password."' and privilegio=0", $this->conexion); 
		$this->consulta3= mysql_query("SELECT usuario , password,privilegio FROM wisher 
		where usuario = '".$this->user."' and  password = '".$this->password."' and privilegio=3", $this->conexion); 
                if($this->row = mysql_fetch_array($this->consulta)){
                    session_start();
                    $this->consulta = mysql_query("SELECT * FROM wisher where usuario = '".$this->user."' ",  $this->conexion);  
                    $this->row = mysql_fetch_array($this->consulta);
                    //Id
                    $this->id = $this->row['id'];
                    $_SESSION['id'] = $this->id;
                    $this->ini = 1;
                    //Nombre
                    $this->id = $this->row['nombre'];
                    $_SESSION['name'] = $this->id; 
                    //apellido
                    $this->id = $this->row['apellido'];
                    $_SESSION['apellido'] = $this->id; 
                         header("Location: ../view/menu.php");      
                }else if($this->row = mysql_fetch_array($this->consulta2)){
					session_start();
                    $this->consulta = mysql_query("SELECT * FROM wisher where usuario = '".$this->user."' ",  $this->conexion);  
                    $this->row = mysql_fetch_array($this->consulta);
                    //Id
                    $this->id = $this->row['id'];
                    $_SESSION['id'] = $this->id;
                    $this->ini = 1;
                    //Nombre
                    $this->id = $this->row['nombre'];
                    $_SESSION['name'] = $this->id; 
                    //apellido
                    $this->id = $this->row['apellido'];
                    $_SESSION['apellido'] = $this->id; 
                         header("Location: ../view/gerentepage.php"); 
				}else if($this->row = mysql_fetch_array($this->consulta3)){
					session_start();
                    $this->consulta = mysql_query("SELECT * FROM wisher where usuario = '".$this->user."' ",  $this->conexion);  
                    $this->row = mysql_fetch_array($this->consulta);
                    //Id
                    $this->id = $this->row['id'];
                    $_SESSION['id'] = $this->id;
                    $this->ini = 1;
                    //Nombre
                    $this->id = $this->row['nombre'];
                    $_SESSION['name'] = $this->id; 
                    //apellido
                    $this->id = $this->row['apellido'];
                    $_SESSION['apellido'] = $this->id; 
                         header("Location: ../view/admipage.php"); 
				}else{
					header('Location: ../view/errorlogin.php');
                }
                return $this->consulta ;
	}

        public function registrar($nom, $ape, $use, $pass){
            
            $this->penombre = $nom;
            $this->peapellido = $ape;
            $this->peusuario = $use;
            $this->pepassword = $pass;
            
            $this->verificar = mysql_query("SELECT usuario FROM wisher where usuario = '".$this->peusuario."' " ,  $this->conexion );

            if($this->row = mysql_fetch_array($this->verificar)){
                
                echo "<h1>EL USUARIO QUE ACABA DE INGRESAR YA EXISTE</h1>";  
                
            }else if(!$this->row = mysql_fetch_array($this->verificar)){
            
                mysql_query("INSERT INTO wisher(nombre, apellido, usuario, password) values('$this->penombre', '$this->peapellido', '$this->peusuario' , '$this->pepassword')", $this->conexion );
                
              
                
               header("location: ../view/login.php");
            
            }
            
            
            
            
            
            
        }
        
        
        public function verificar($pass1 , $pass2){
            
            $this->fine = false;
            
            $this->pas1 = $pass1;
            $this->pas2 = $pass2;
            
            
            if($this->pas1 == $this->pas2){
                
                $this->fine = true ; 
                
                
            }
            
            
            return $this->fine ; 
        }
        
        
			
	public function add_wish($titulo , $deseo){
			   
			   
			   $this->title = $titulo; 
			   $this->deseo = $deseo; 
			  
			   
			   session_start();
			   
			   
		$this->veri = mysql_query("SELECT title FROM wish where title ='".$this->title."' and  wisher_id = '".$_SESSION['id']."'" ,$this->conexion);
			   

		  if(mysql_num_rows($this->veri)==0){
					   
			  mysql_query("INSERT INTO wish(title, description, wisher_id) values('$this->title' , '$this->deseo' , '$_SESSION[id]')",  $this->conexion);
				   
					header("Location: ../view/menu.php");
				  
						 
				   
		  }else{
					   
					echo "EL DESEO CON EL TITULO QUE INGRESASTE... YA EXISTE";
		  }
           
           
       
       }

       public function drop($title){
       
       $this->title = $title;
       
       $this->veri = mysql_query("SELECT title FROM wish where title = '".$this->title."' " ,$this->conexion);
       
       
       if(mysql_num_rows($this->veri)>0){
       
       mysql_query("DELETE FROM wish where title = '".$this->title."'");
       
       header("Location: ../view/menu.php");
       
       }else{
           
           echo "ESE DESEO... NO EXISTE";
           
       }
       
       
       }
		   
		   
	public function edit($title, $deseo){
			$this->title=$title;
			$this->deseo =$deseo;
			session_start();
			   
	  $this->veri = mysql_query("SELECT title FROM wish where title = '".$this->title."' and wisher_id = '".$_SESSION['id']."'" ,$this->conexion);
		   
       
       if(mysql_num_rows($this->veri)>0){
       
       mysql_query("UPDATE wish SET description='".$this->deseo."' where title = '".$this->title."'", $this->conexion);
       
       header("Location: ../view/menu.php");
       
       }else{
           
           echo "EL DESEO CON ESE TITULO... NO EXISTE";
           
       }
           
              
       }


        
       public function wish_list(){
           
          
           
           $this->con= mysql_query("SELECT title, description FROM wish WHERE wisher_id='".$_SESSION['id']."'" , $this->conexion);
           
          
           
           while($this->row = mysql_fetch_array($this->con)){
               
               echo "<tr>";
               
               echo "<td>",$this->row['title'],"</td><td>", $this->row['description'],"</td>";
               
               echo "</tr>";
               
               
               
           }
           
       }

	/* public function MostrarUsuarios(){
           
           $this->con= mysql_query("SELECT title, description FROM wish WHERE wisher_id='".$_SESSION['id']."'" , $this->conexion);
           
          
           
           while($this->row = mysql_fetch_array($this->con)){
               
               echo "<tr>";
               
               echo "<td>",$this->row['title'],"</td><td>", $this->row['description'],"</td>";
               
               echo "</tr>";
               
               
               
           }
           
       }*/

}

?>
