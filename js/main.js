$(document).ready(function(){

    $navi = $('.navi');
    $toggleCollapse =$('.toggle-collapse');

    $toggleCollapse.click(function(){
        $navi.$toggleClass('collapse');
    })

    

});