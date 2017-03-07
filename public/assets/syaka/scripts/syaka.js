$(document).ready(function(){

    $('.date-picker').datepicker({
        autoclose: true
    });

    $('#sample_1').DataTable();

    $('.package-list').repeater();

    $(".type_package_select").change(function(){
        alert("boy");
        $(this).closest("row").siblings('.section--type-package').hide();
        $(this).closest("row").siblings('.section--' + $(this).val()).show();
    });

    var form_vehicle=   '<div class="col-md-6 package-item" data-repeater-item>\
                            <div class="portlet box blue portlet-vehicle">\
                                <div class="portlet-title">\
                                    <div class="caption">\
                                        <i class="fa fa-truck"></i>Package Vehicle </div>\
                                    <div class="tools">\
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>\
                                        <a href="javascript:;" class="remove" data-repeater-delete data-original-title="" title=""> </a>\
                                    </div>\
                                </div>\
                                <div class="portlet-body">\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label class="control-label">Nama Barang</label>\
                                                <input type="text" id="packageName1" class="form-control" placeholder="Nama Barang" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label class="control-label">Type</label>\
                                                <select class="form-control">\
                                                    <option>Wing Box</option>\
                                                    <option>Option 2</option>\
                                                    <option>Option 3</option>\
                                                    <option>Option 4</option>\
                                                    <option>Option 5</option>\
                                                </select>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label class="control-label">Quantity</label>\
                                                <input type="number" id="packageQuantity1" class="form-control" placeholder="Banyak Kendaraan" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>';
    var form_coli=      '<div class="col-md-6 package-item" data-repeater-item>\
                            <div class="portlet box blue portlet-coli">\
                                <div class="portlet-title">\
                                    <div class="caption">\
                                        <i class="fa fa-ship"></i>Package Coli </div>\
                                    <div class="tools">\
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>\
                                        <a href="javascript:;" class="remove" data-repeater-delete data-original-title="" title=""> </a>\
                                    </div>\
                                </div>\
                                <div class="portlet-body">\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label class="control-label">Nama Barang</label>\
                                                <input type="text" id="packageName1" class="form-control" placeholder="Nama Barang" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label class="control-label">Type</label>\
                                                <select name="type_package" class="form-control">\
                                                    <option value="actual-weight">Actual Weight</option>\
                                                    <option value="volume">Volume</option>\
                                                </select>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label class="control-label">Quantity</label>\
                                                <input type="text" id="packageName1" class="form-control" placeholder="Quantity" >\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row section--actual-weight section--type-package">\
                                        <div class="col-md-12">\
                                            <div class="form-group">\
                                                <label class="control-label">Berat</label>\
                                                <input type="text" id="packageName1" class="form-control input-inline" placeholder="Berat" >\
                                                <span class="help-inline"> Kg </span>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    <div class="row section--volume section--type-package" style="display: none;">\
                                        <div class="col-md-4">\
                                            <div class="form-group">\
                                                <label class="control-label">P</label>\
                                                <input type="text" id="packageName1" class="form-control input-inline input-xsmall" placeholder="Panjang" >\
                                                <span class="help-inline"> cm </span>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-4">\
                                            <div class="form-group">\
                                                <label class="control-label">L</label>\
                                                <input type="text" id="packageName1" class="form-control input-inline input-xsmall" placeholder="Lebar" >\
                                                <span class="help-inline"> cm </span>\
                                            </div>\
                                        </div>\
                                        <div class="col-md-4">\
                                            <div class="form-group">\
                                                <label class="control-label">T</label>\
                                                <input type="text" id="packageName1" class="form-control input-inline input-xsmall" placeholder="Tinggi" >\
                                                <span class="help-inline"> cm </span>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>';

    var form_type;

    $('select[name="type_form"]').change(function(){
        if ($("select[name='type_form']").val() === "vehicle") {
            $(".package-list .data-list-repeater").empty();
            $(".package-vehicle").show();
            $(".package-coli").hide();
            $(".package-vehicle [data-repeater-create]").click();
            
        }
        else if ($("select[name='type_form']").val() === "coli") {
            $(".package-list .data-list-repeater").empty();
            $(".package-coli").show();
            $(".package-vehicle").hide();
            $(".package-coli [data-repeater-create]").click();
            $(".type_package_select").change(function(){
                $(this).closest(".row").siblings('.section--type-package').hide();
                $(this).closest(".row").siblings('.section--' + $(this).val()).show();
            });
        }
    });





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
