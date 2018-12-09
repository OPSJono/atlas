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
            error: function(){  // error handling
                $table.append('<tbody class="grid-error"><tr><th colspan="30">No data found in the server</th></tr></tbody>');
            }
        },
        "search":{
            url :$table.data('url'),
            type: "get",  // method  , by default get
            error: function(){  // error handling
                $table.append('<tbody class="grid-error"><tr><th colspan="30">No data found in the server</th></tr></tbody>');
            }
        },
    });

    $table.find('thead tr.search th').each( function (i) {
        if($(this).data('searchable')) {
            var title = $(this).text();
            $(this).html( '<input class="column-search form-control form-control-sm" type="text" placeholder="Search '+title+'" />' );

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