<?php
    require_once('../../model/conexion/conexion.php');
    require_once('../../model/query/drivers/query.php');
    require_once('../../controller/modales/modal.php');

    function loadDriver(){//función para cargar conductores
        //Invocamos una clase para realizar consultas 
        $queries = new consultas();
        //Genera consulta en la tabla driver para obtener los conductores registrados
        $result=$queries->showDrivers();

        if (!isset($result)) {//En caso de haya un error en la variable resultado
            modalAlert('No hay conductores registrados, ¡registra uno!' , '../../view/drivers/registerDriver.php' , 'warning' , '3');
        }else{//Si no se encuentra un error se realizara la maquetación de la tabla para visualizar los conductores
            echo    '<thead class="header-table">
                        <tr class="text-center">
                            <th class="th-sm">Nombres</th>
                            <th class="th-sm">Apellidos</th>
                            <th class="th-sm">Documento</th>
                            <th class="th-sm">Ciudad</th>
                            <th class="th-sm">Información</th>
                            <th class="th-sm">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>';
                
            foreach ($result as $f){
                echo    '<tr>
                            <td class="colum2 colum2-users">'.ucfirst($f['first_name']).' '.ucfirst($f['second_name']).'</td>    
                            <td class="colum3 colum3-users">'.$f["last_name"].'</td>  
                            <td class="colum3 colum3-users">'.$f["document"].'</td>     
                            <td class="colum3 colum3-users">'.$f["city"].'</td> 
                            <td class="colum5 colum6-users">
                                <a class="icon-table"><i class="fas fa-info-circle info-title" data-title="Información completa" onclick="viewUser(this)" id="'.$f["document"].'"></i></a>      
                            </td> 
                            <td class="colum5 colum6-users  d-flex"> 
                                <a class="icon-table"><i class="fas fa-trash info-title" data-title="Eliminar conductor" onclick="deleteUser(this)" id="'.$f["document"].'"></i></a>
                            </td>
                        </tr>';
            }//end foreach
            echo '</tbody>';
        };//end if
    };// ./ cierre función para cargar conductores
    function driverInformation($id){
        //Invocamos una clase para realizar consultas del conductor 
        $queries = new consultas();
        //Genera consulta en la tabla driver
        $result=$queries->driverInfo($id);

        if (!isset($result)) {
            echo '<h2> No existe el conductor solicitado</h2>';
        } else {
            foreach ($result as $f) {
                echo    '<div class="row">
                            <div class="input-field col s12 m6">
                                <input id="name" type="text" class="validate input-control seleccionar" name="first_name" value="'.ucwords($f['first_name']).'" required maxlength="50" disabled>
                                <label for="name">Primer nombre</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="" type="text" class="validate input-control seleccionar" name="second_name" value="'.ucwords($f['second_name']).'" maxlength="50" disabled>
                                <label for="">Segundo nombre</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 ">
                                <input id="" type="text" class="validate input-control seleccionar"  minlength="3" name="last_name" value="'.ucwords($f['last_name']).'" required disabled> 
                                <label for="">Apellidos</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="" type="text" class="validate input-control " name="document" value="'.$f['document'].'" required pattern="[0-9]+" oninvalid="setCustomValidity(Ingrese un formato valido de número de documento)" oninput="setCustomValidity()" maxlength="20" disabled>
                                <label for="">Documento</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="" type="text" class="validate input-control seleccionar"  minlength="3" name="address" value="'.$f['address'].'" required disabled> 
                                <label for="">Dirección</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="" type="text" class="validate input-control seleccionar"  minlength="3" name="phone" value="'.$f['phone'].'" required disabled> 
                                <label for="">Teléfono</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 ">
                                <input id="" type="text" class="validate input-control seleccionar"  minlength="3" name="city" value="'.$f['city'].'" required disabled> 
                                <label for="">Ciudad</label>
                            </div>
                        </div>
                        <input type="number" value="'.$f["document"].'" name="document" class="mt-3 seleccionar d-none">';
                        
            }
        }
    }
?>