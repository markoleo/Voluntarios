$(document).ready(function() {
    $('#topping1').DataTable({

        responsive: true,
        language: {
            paginate: {
                previous: '<',
                next: '>'
            },
            
            "search": "Buscar",
        }
    });
} );