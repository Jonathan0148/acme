function deleteOwner(esto){
    var id=esto.id;
    Swal.fire({
        title: 'Eliminar propietario',
        text: "¿Seguro que quieres borrar este propietario de manera permanente?, recuerda que se eliminan con él los vehículos a su nombre",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#gray',
        confirmButtonText: 'Eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.write("<form action='../../controller/owners/delete/deleteOwner.php' name='form' method='POST'><input hidden='' type='text' name='id' value='"+id+"'></form> ");
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