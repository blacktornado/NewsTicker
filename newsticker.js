<!--  Jquery Vertical NewsTicker//-->
var ticker = function()
{
    setTimeout(function(){
        $('#ticker li:first:not(.stop)').animate( {marginTop: '-120px'}, 1000, function()
        {
           var me = $(this);        

           me
            .clone(true)
            .appendTo('ul#ticker')
            .removeAttr('style')

           me.remove(); 
        });                                                
        ticker();
    }, 2000);
};

ticker();

// simply toggle class on hover
// animation will not run with `li` having this class

$('#ticker li').hover(function() {
    $(this).addClass('stop')
}, function() {
    $(this).removeClass('stop')
});

