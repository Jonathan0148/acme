function deleteUser(esto){
    var id=esto.id;
    Swal.fire({
        title: 'Eliminar conductor',
        text: "¿Seguro que quieres borrar este conductor de manera permanente?, recuerda que se eliminan con él los vehículos asociados",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#gray',
        confirmButtonText: 'Eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.write("<form action='../../controller/drivers/delete/deleteDriver.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
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