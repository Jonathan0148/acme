<?php
    require_once('../../model/conexion/conexion.php');
    require_once('../../model/query/vehicles/query.php');
    require_once('../../controller/modales/modal.php');

    $result = new consultas();
    $resultThree=$result->drivers();
    $resultTwo=$result->owners();
    if (!isset($resultThree)) {
        modalAlert('Debes registrar un conductor primero, ¡registra uno!' , '../../view/drivers/registerDriver.php' , 'warning' , '3');
        exit();
    }else if (!isset($resultTwo)) {
        modalAlert('Debes registrar un propietario primero, ¡registra uno!' , '../../view/owners/registerOwner.php' , 'warning' , '3');
        exit();
    }
    function loadVehicles(){//función para cargar vehiculos
        //Invocamos una clase para realizar consultas 
        $queries = new consultas();
        //Genera consulta en la tabla vehicle para obtener los vehiculos registrados
        $result=$queries->showVehicles();

        if (!isset($result)) {//En caso de haya un error en la variable resultado
            modalAlert('No hay vehículos registrados, ¡registra uno!' , '../../view/vehicles/registerVehicle.php' , 'warning' , '3');
        }else{//Si no se encuentra un error se realizara la maquetación de la tabla para visualizar los vehiculos
            echo    '<thead class="header-table">
                        <tr class="text-center">
                            <th class="th-sm">Placa</th>
                            <th class="th-sm">Marca</th>
                            <th class="th-sm">Nombre propietario</th>
                            <th class="th-sm">Nombre conductor</th>
                            <th class="th-sm">Información</th>
                            <th class="th-sm">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>';
                
            foreach ($result as $f){
                echo    '<tr>
                            <td class="colum2 colum2-users">'.$f['license_plate'].'</td>    
                            <td class="colum3 colum3-users">'.$f["mark"].'</td>  
                            <td class="colum3 colum3-users">'.$f["name_owner"].' '.$f["name_two_owner"].' '.$f['last_name_owner'].'</td> 
                            <td class="colum3 colum3-users">'.$f["name_driver"].' '.$f["name_two_driver"].' '.$f['last_name_driver'].'</td>    
                            <td class="colum5 colum6-users">
                                <a class="icon-table"><i class="fas fa-info-circle info-title" data-title="Información completa" onclick="viewVehicle(this)" id="'.$f["license_plate"].'"></i></a>      
                            </td> 
                            <td class="colum5 colum6-users  d-flex"> 
                                <a class="icon-table"><i class="fas fa-trash info-title" data-title="Eliminar vehículo" onclick="deleteVehicle(this)" id="'.$f["license_plate"].'"></i></a>
                            </td>
                        </tr>';
            }//end foreach
            echo '</tbody>';
        };//end if
    };// ./ cierre función para cargar vehiculos
    function vehicleInformation($id){
        //Invocamos una clase para realizar consultas del vehiculo 
        $queries = new consultas();
        //Genera consulta en la tabla vehicle
        $result=$queries->vehicleInfo($id);
        $resultThree=$queries->drivers();
        $resultTwo=$queries->owners();

        if (!isset($result)) {
            echo '<h2> No hay vehículo para mostrar</h2>';
        } else {
            
            foreach ($result as $f) {
                echo'<div class="row">
                    <div class="input-field col s12 m6">
                        <input id="" type="text" class="validate input-control" name="license_plate" value="'.$f['license_plate'].'"  maxlength="20" disabled>
                        <label for="">Placa</label>
                    </div>
                        <div class="input-field col s12 m6">
                            <input id="" type="text" class="validate input-control seleccionar" name="colour" value="'.$f['colour'].'" maxlength="50" disabled>
                            <label for="">Color</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="" type="text" class="validate input-control seleccionar"  minlength="3" name="mark" value="'.$f['mark'].'" required disabled> 
                            <label for="">Marca</label>
                        </div>
                        <div class="input-field col s12">
                            <div>
                                <label class="prefix-label">Tipo de vehículo</label>
                            </div>
                            <select class="browser-default seleccionar" name="type_of_vehicle" data-title="Ingrese el tipo de vehículo" disabled>
                              <option value="'.$f['type_of_vehicle'].'" selected>'.$f['type_of_vehicle'].'</option>
                              <option value="Particular">Particular</option>
                              <option value="Público">Público</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Propietario</label>
                            </div>
                            <select class="browser-default seleccionar" name="id_owner" data-title="Ingrese el propietario del vehículo" disabled>
                                <option value="'.$f["id_owner"].'">'.$f["name_owner"].' '.$f['last_name_owner'].'</option>';
                                foreach($resultTwo as $fOne){
                                    echo '
                                    <option value="'.$fOne['id'].'">'.ucfirst($fOne['first_name']).' '.ucfirst($fOne['last_name']).'</option>';
                                } echo'
                            </select>
                        </div>
                        <div class="input-field col s12 m6 mt-2">
                            <div>
                                <label class="prefix-label">Conductor</label>
                            </div>
                            <select class="browser-default seleccionar" name="id_driver" data-title="Ingrese el conductor de vehículo" disabled>
                                <option value="'.$f["id_driver"].'">'.$f["name_driver"].' '.$f['last_name_driver'].'</option>';
                                foreach($resultThree as $fTwo){
                                    echo '
                                    <option value="'.$fTwo['id'].'">'.ucfirst($fTwo['first_name']).' '.ucfirst($fTwo['last_name']).'</option>';
                                } echo'
                            </select>
                        </div>
                    </div>
                    <input type="text" value="'.$f["license_plate"].'" name="license_plate" class="mt-3 seleccionar d-none">';
            }
        }
    }
?>