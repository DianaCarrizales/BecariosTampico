<?php
	class Estudiante
	{
		public $Matricula;
		public $Nombre;
		public $Apellido;
		public $Telefono;
		public $Direccion;
		public $Email;
		public $FechaNacimiento;
		public $MunicipioId;
		public $ProgramaId;
		
		function guardar()
		{
			$sql="INSERT INTO alumnos(Matricula,Nombre,Apellido,Telefono,Direccion,Email,FechaNacimiento,MunicipioId,ProgramaId)
					VALUES('$this->Matricula','$this->Nombre','$this->Apellido','$this->Telefono',
					'$this->Direccion','$this->Email','$this->FechaNacimiento','$this->MunicipioId',
					'$this->ProgramaId')";
					mysql_query($sql);
		}
		
		
	}
?>