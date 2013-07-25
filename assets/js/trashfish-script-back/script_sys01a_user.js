$(function() {
        
    var oTable1 = $('#table_report').dataTable( {
        "aoColumns": [
            { "bSortable": false },
            null, null, null, null, null, null,
            { "bSortable": false }
        ] 
    });

    $('table th input:checkbox').on('click' , function(){
        var that = this;
        
        $(this).closest('table').find('tr > td:first-child input:checkbox')
        
        .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
        });
    });

    $('[data-rel=tooltip]').tooltip();
    $('#form_user').popup();
    
//    $('#btn-delete-user-131001, #link-delete-131001').on('click', function() {
//        bootbox.confirm("Are you sure to delete this data?", function(result) {
//            if(result) {
//                bootbox.alert("You are sure!");
//            }
//        });
//    });
//    
    $('#btn-delete-all-user').on('click', function() {
        bootbox.confirm("Are you sure to delete all data?", function(result) {
            if(result) {
                bootbox.alert("You are sure!");
            }
        });
    });
});