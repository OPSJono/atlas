'use strict';

$(document).ready(function () {
    var $table = $('#table');

    var dataTable = $table.DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "columns": [
            {
                "name": "forename",
                "searchable": true
            },
            {
                "name": "surname",
                "searchable": true
            },
            {
                "name": "email",
                "searchable": true
            },
            {
                "name": "created_by",
                "searchable": false
            },
            {
                "name": "action",
                "searchable": false
            },
        ],
        "ajax":{
            url :$table.data('url'),
            type: "get",  // method  , by default get
            beforeSend: function() {
                $table.find('.grid-error').remove();
            },
            complete: function() {
                $table.find('[data-toggle="tooltip"]').tooltip();

                $('.dataTables_filter, .dataTables_length').parent()
                    .css("display", "flex")
                    .css("flex-direction", "column")
                    .css("justify-content", "center")
                ;
            },
            error: function(response) {  // error handling
                $('#table_processing').css('display', 'none');
                $table.append('<tbody class="grid-error"><tr><th colspan="30" style="color: #FB8678;">There was an error retrieving data from the server. Please try again later.</th></tr></tbody>');
                console.error(response);
            }
        },
    });

    $table.find('thead tr.search th').each( function (i) {
        if($(this).data('searchable')) {
            var title = $(this).text();
            $(this).html( '<input class="column-search form-control form-control-sm" type="text" placeholder="Filter '+title+'" />' );

            $( 'input', this ).on( 'keyup change', function () {
                if ( dataTable.column(i).search() !== this.value ) {
                    dataTable.column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } else {
            $(this).html("");
        }
    });

});