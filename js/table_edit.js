JavaScript
$(document).ready(function(){
    $('#data_table').Tabledit({
        deleteButton: false,
        editButton: false,          
        columns: {
          identifier: [0, 'id'],                    
          editable: [[1, 'nombre'], [2, 'autor'], [3, 'isbn'], [4, 'categoria']]
        },
        hideIdentifier: true,
        url: 'editarCelda.php'      
    });
});


