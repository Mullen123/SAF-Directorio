<?php

class Model_1 extends CI_Model {
   
     function __construct(){
    
      $this->load->database();
   } //termina elconstructor 


function verTodo(){

//creamos un arreglo 
 
$query = $this->db->query("
SELECT 
    emps.id_empleado,
    emps.nombre_emp,
    emps.ape_pat,
    emps.ape_mat,
    emps.telefono,
    emps.email,
    emps.path_picture,
    emps.vacante,
    emps.id_jefe,
    ubicaciones.id_ubicacion, 
    ubicaciones.calle,
    ubicaciones.colonia, 
    ubicaciones.cp, 
    ubicaciones.delegacion, 
    ubicaciones.ciudad,
    ubicaciones.numero,
    cargos.nombre_cargo,
    cargos.id_sexo,
    cargos.orden,
    puestos.desc_puesto,

    jefes.id_empleado id_jefe,
    jefes.nombre_emp||' '||jefes.ape_pat||' '||jefes.ape_mat jefe,
    puestos_jefe.desc_puesto puesto_jefe,
    deptos.desc_departamento  jefe_departamento





    


  
FROM

    empleados emps


  
   left join ubicaciones on emps.id_ubicacion = ubicaciones.id_ubicacion
    left join puestos puestos on emps.id_puesto = puestos.id_puesto
    left join cargos cargos on emps.id_cargo = cargos.id_cargo and coalesce(emps.id_sexo, 3) = cargos.id_sexo
    left join empleados jefes on emps.id_jefe = jefes.id_empleado
    left join puestos puestos_jefe on jefes.id_puesto = puestos_jefe.id_puesto
    left join departamentos deptos on jefes.id_cargo = deptos.id_departamento





ORDER BY cargos.orden, cargos.nombre_cargo");




if($query->num_rows() > 0){
return $query;
}else{
  return false;
}

}//termina funcion donde se despliegan todos los datos del empleado


}//termina la clase model_1






 

