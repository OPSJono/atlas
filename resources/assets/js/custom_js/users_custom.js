'use strict';

$(document).ready(function () {
    // Work across site for all tables on the page.
    const $tables = $('.js-datatables');

    $tables.each(function() {
        // Define the current table we're working on.
        const $table = $(this);

        // Programmatically define which columns we have for the table.
        // Which ones are Sortable, Orderable, and what their column name is.
        const columns = [];
        $table.find('thead tr.search th').each( function (i) {
            const $this = $(this);
            const column = {
                "name": $this.data('column'),
                "searchable": $this.data('searchable'),
                "orderable": $this.data('orderable'),
            };
            columns.push(column);
        });

        // Initialise Datatables using the jQuery object.
        // Setting the attributes based on html data-attributes set on the table.
        const dataTable = $table.DataTable({
            "responsive": !!$table.data('responsive'),
            "processing": !!$table.data('processing'),
            "serverSide": !!$table.data('server-side'),
            "columns": columns,
            "ajax": {
                url : $table.data('url'),
                type: $table.data('method'),
                beforeSend: function() {
                    // Remove any previous error messaging when trying to retrieve data
                    $table.find('.grid-error').remove();
                },
                complete: function() {
                    // Enable tooltips once the HTML is drawn.
                    $table.find('[data-toggle="tooltip"]').tooltip();
                },
                error: function(response) {  // error handling
                    // Remove any "Processing" messages
                    $table.find('#table_processing').css('display', 'none');
                    // Append an error to the table to tell the user there was an error. - And log that error to the console.
                    $table.append('<tbody class="grid-error"><tr><th colspan="30" style="color: #FB8678;">There was an error retrieving data from the server. Please try again later.</th></tr></tbody>');
                    console.error(response);
                }
            },
        });

        $table.find('thead tr.search th').each( function (i) {
            if($(this).data('searchable')) {
                const title = $(this).text();
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

});