function deleteVehicle(esto){
    var id=esto.id;
    Swal.fire({
        title: 'Eliminar vehículo',
        text: "¿Seguro que quieres borrar este vehículo de manera permanente?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#gray',
        confirmButtonText: 'Eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.write("<form action='../../controller/vehicles/delete/deleteVehicle.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
    		document.forms['form'].submit();
            setTimeout(() => {
                //RELOAD COMMENTS
                    showNots();
                //UPDATES COUNTS
                    reloadNot();
            },500)
        }
    })
    
}