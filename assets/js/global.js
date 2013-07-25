$(function() {
//    stretch_portal_content();
//    $(window).resize( stretch_portal_content );
            
            
    $('.slim-scroll').each(function () {
        var $this = $(this);
        $this.slimScroll({
            height: $this.data('height') || 100,
            railVisible:true
        });
    });
    
    $('.slim-scroll-auto').each(function () {
        var $this = $(this);
        $this.slimScroll({
            height: 'auto',
            railVisible:true
        });
    });
    
    $('.slim-scroll-page').each(function () {
        var $this = $(this);
        $this.slimScroll({
            height: $(window).height() - ( $('.navbar').height() + $('#breadcrumbs').height() + 20 ),
            railVisible:true
        });
    });
    
    $(".chzn-select").chosen({allow_single_deselect:true , no_results_text: "No such state!"});
    
    $('.ace-tooltip').tooltip();
    $('.ace-popover').popover();

    $('textarea[class*=autosize]').autosize({append: "\n"});
    $('textarea[class*=limited]').each(function() {
            var limit = parseInt($(this).attr('data-maxlength')) || 100;
            $(this).inputlimiter({
                    "limit": limit,
                    remText: '%n character%s remaining...',
                    limitText: 'max allowed : %n.'
            });
    });

    $.mask.definitions['~']='[+-]';
    $('.input-mask-date').mask('99/99/9999');
    $('.input-mask-phone').mask('(999) 999-9999');
    $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
    $('.input-mask-zipcode').mask('99999');
    $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
    
    $('table th input:checkbox').on('click' , function(){
        var that = this;
        $(this).closest('table').find('tr > td:first-child input:checkbox')
        .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
        });

    });
});

function deleteRow(){
    bootbox.confirm("Are you sure to delete this data?", function(result) {
        if(result) {
            bootbox.alert("You are sure!");
        }
    });
}
//function stretch_portal_content() {
//    if( $(window).height() > $('body').height() ) {
//        $( '#page-content' ).height($(window).height() - ( $('body').height() + 50 ));
//    }
//}