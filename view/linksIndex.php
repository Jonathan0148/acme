<ul>
    <!-- Link volver a inicio -->
    <li>
        <i class="fas fa-home d-none-phone"></i><a href="index.php" class="nav-links"><i class="fas fa-home d-none-desk"></i>Inicio</a>
    </li>
    <!-- Link propietarios -->
    <li class="dropdown-item">
        <i class="fas fa-user-tie d-none-phone"></i>
        <div class="dropdown-menu-button nav-links">
            <i class="d-none-desk"></i> <span>Propietarios</span> <i class="fas fa-sort-down"></i></i>
        </div>
            <ul class="dropdown h-20 dropdown-users">
                <li>
                    <a href="view/owners/owners.php"><i class="fas fa-user-check"></i>Registrados</a>
                </li>
                <li>
                    <a href="view/owners/registerOwner.php"><i class="fas fa-user-plus"></i>Nuevo propietario</a>
                </li>
            </ul>
    </li>
    <!-- Link conductores -->
    <li class="dropdown-item">
        <i class="fas fa-users d-none-phone"></i>
        <div class="dropdown-menu-button nav-links">
            <i class="fas fa-users d-none-desk"></i> <span>Conductores</span> <i class="fas fa-sort-down "></i></i>
        </div>
            <ul class="dropdown h-20 dropdown-users">
                <li>
                    <a href="view/drivers/drivers.php" class=""><i class="fas fa-user-check"></i>Registrados</a>
                </li>
                <li>
                    <a href="view/drivers/registerDriver.php" class=""><i class="fas fa-user-plus"></i>Conductor nuevo</a>
                </li>
            </ul>
    </li>
    <!-- Link vehiculos -->
    <li  class="dropdown-item">
        <i class="fas fa-car d-none-phone"></i>
        <div class="dropdown-menu-button nav-links">
            <i class="d-none-desk" ></i> <span>Vehiculos</span> <i class="fas fa-sort-down"></i>
        </div>
        <ul class="dropdown h-20 dropdown-users">
            <li>
                <a href="view/vehicles/vehicles.php" class=""><i class="fas fa-car"></i>Registrados</a>
            </li>
            <li>
                <a href="view/vehicles/registerVehicle.php" class=""><i class="fas fa-car-side"></i>¿Vehiculo nuevo?</a>
            </li>
        </ul>
    </li>
    <!-- ---------------------------------------------------------------------- -->
</ul>