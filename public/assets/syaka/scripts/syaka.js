$(document).ready(function(){

    $('.date-picker').datepicker({
        autoclose: true
    });

    $('#sample_1').DataTable();

    $('.package-list').repeater();





});

$(function() {
    $.fn.sortList = function() {
    var mylist = $(this);
    var listitems = $('li', mylist).get();
    listitems.sort(function(a, b) {
        var compA = $(a).text().toUpperCase();
        var compB = $(b).text().toUpperCase();
        return (compA < compB) ? -1 : 1;
    });

    $.each(listitems, function(i, itm) {
        mylist.append(itm);
    });
   }

    $("#list-pages").sortList();

});
