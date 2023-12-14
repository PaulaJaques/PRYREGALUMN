<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso Docente</title>
    <link rel="stylesheet" href="style.css">
</head>

 <body>
  <form action="registrar.php" method="POST" enctype="multipart/form-data">     
   <h1>Ingreso</h1>
	<h2>Ingrese datos del Docente:</h2>

    <div class="input-wrapper"> 
     <label for='NOMPROF'>Nombre del Profesor</label>
	 <input type="text" id="NOMPROF" name='NOMPROF' placeholder="Nombre del Profesor"/>	  
	</div>

	<div class="input-wrapper"> 
	 <label for='APEPROF'>Apellido Profesor</label>	
	 <input type="text" id="APEPROF"  name='APEPROF' placeholder="Apellido del Profesor"/>	
	</div>

    <div class="input-wrapper"> 
     <label for='FECCURDIC'>Fecha Curso</label>	
	 <input type="date" id="FECCURDIC" name='FECCURDIC' placeholder="Fecha del curso a dictar (dd/mm/aaaa))."/ required>	
	</div>

	<div class="input-wrapper"> 
	 <label for='CURDIC'>Curso que dicta</label>			  	 
	  <!-- Lista de Cursos -->	     
       <select name="CURDIC">
       	<option value="0">...</option>
  		<option value="1">Artes visuales</option>
  		<option value="2">Ciencias naturales</option>
  		<option value="3">Educación física y salud</option>  	
  		<option value="4">Historia, geografía y ciencias sociales</option>  	
  		<option value="5">Inglés</option>  	
  		<option value="6">Lenguaje y comunicación</option>  	
  		<option value="7">Matemática</option>  	
  		<option value="8">Música</option>  	
  		<option value="9">Orientación</option>  	
  		<option value="10">Religión</option>  	
  		<option value="11">Tecnología</option>  	
	   </select>
	</div>

    <div class="input-wrapper"> 
     <label for='HORINI'>Hora Inicio Curso</label>	
	 <input type="time" id="HORINI" name='HORINI' placeholder="Hora planificada de inicio (hh:mm))."/>	
	</div>

    <div class="input-wrapper"> 
     <label for='HORFIN'>Hora Fin Curso</label>	
	 <input type="time" id="HORFIN" name='HORFIN' placeholder="Hora planificada de término (hh:mm))."/>	
	</div>

	<div class="input-wrapper"> 
	 <label for='ASISTE'>Asistencia SI/NO</label>
       <select name="ASISTE">
       	<option value="0">...</option>
  		<option value="1">Sí</option>
  		<option value="2">No</option>  		  	
	   </select>
	</div>


    <div class="input-wrapper"> 
     <label for='HORICUR'>Hora inicio Asistencia  (Si asistió)</label>	
	 <input type="time" id="HORICUR" name='HORICUR' placeholder="Hora de Inicio al Curso de la asistencia (HH:MM)"/>
	</div>

    <div class="input-wrapper"> 
     <label for='HORFCUR'>Hora fin Asistencia  (Si asistió)</label>	
	 <input type="time" id="HORFCUR" name='HORFCUR' placeholder="Hora de Fin de la asistencia (HH:MM)"/>
	</div>

	<div class="input-wrapper"> 
	 <label for='JUSTIFICA'>Si no asistió indicar el tipo de inasistencia (JUSTIFICADA/NO JUSTIFICADA)</label>
       <select name="JUSTIFICA">
       	<option value="0">...</option>
  		<option value="1">JUSTIFICADA</option>
  		<option value="2">NO JUSTIFICADA</option>  		  	
	   </select>
	</div>

    <div class="input-wrapper"> 
     <label for='RAZON'>Descripcion Causa de inasistencia (Si es JUSTIFICADA)</label>	<br>
	 <textarea id="RAZON" name='RAZON' placeholder="Descripción de la causa si es justificada"></textarea>
	</div>

   <input type="submit" class="btn btn-success" name="Grabar" value="Grabar"/>
    
  </form>   
 </body>
</html>
