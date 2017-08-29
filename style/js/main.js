$(document).ready(function ()
{
    $("#selected").submit(function ()
    {
        var selectedValue = $(this).serialize();
        $.ajax
        ({
            type: "POST",
            url: "rentalincome/filter",
            data: selectedValue,
            success: function (html)
            {
                var currentSelection = JSON.parse(html);
                console.log(currentSelection);
                $("#currentSelection").html('Address: ' + currentSelection.selection.address + ';</br>Month: ' + currentSelection.selection.month);
                createTableFromRentalIncome(currentSelection.tableColumsName);
            }
        });
        return false;
    });
});
function createTableFromRentalIncome(array)
{
    if  ($("#table_rental")){
        $("#table_rental").remove();
        writeTable(array);
    } else {
        writeTable(array);
    }
}
function writeTable(array)
{
    var table = $('<table/>', {
        id:     'table_rental',
        class:  'table table-bordered rental-table'
    });
    $('#table_rental_income').addClass('center-block').append(table);
    $('#table_rental').append(
        $('<thead/>'),
        $('<tbody/>')
    );
    var TableTitle = ["Address", "Location","Room nr.","Space","Rent plan",
        "Costs plan","Heating plan","Cable TV","Comments"];
    //Наполняем табличку
    //Заголовок
    var TitleCell = $('<tr/>');
    $.each(TableTitle,function( myIndex, a) {
        TitleCell.append(
            $('<th/>',{
                text:a
            })
        );
    });
    $("thead",table).append(TitleCell);
    //Данные
    array.forEach(function (p1, p2, p3) {
        var DataCell = $('<tr/>');
        DataCell.append($('<td/>',{text:p1.address}));
        DataCell.append($('<td/>',{text:p1.location}));
        DataCell.append($('<td/>',{text:p1['room nr']}));
        DataCell.append($('<td/>',{text:p1.space}));
        DataCell.append($('<td/>').append($('<input/>',{
            name:p1.id+'|'+'rent_plan',
            class:"form-control",
            form:"saveRental",
            type:"text",
            placeholder:p1['rent_plan']})));
        DataCell.append($('<td/>').append($('<input/>',{
            name:p1.id+'|'+'costs_plan',
            class:"form-control",
            form:"saveRental",
            type:"text",
            placeholder:p1['costs_plan']})));
        DataCell.append($('<td/>').append($('<input/>',{
            name:p1.id+'|'+'heating_plan',
            class:"form-control",
            form:"saveRental",
            type:"text",
            placeholder:p1['heating_plan']})));
        DataCell.append($('<td/>').append($('<input/>',{
            name:p1.id+'|'+'cable_TV',
            class:"form-control",
            form:"saveRental",
            type:"text",
            placeholder:p1['cable_TV']})));
        DataCell.append($('<td/>').append($('<input/>',{
            name:p1.id+'|'+'comments',
            class:"form-control",
            form:"saveRental",
            type:"textarea",
            placeholder:p1.comments})));
        $("tbody",table).append(DataCell);
    })
}
$(document).ready(function ()
{
    $("#saveRental").submit(function ()
    {
        var selectedValue = $(this).serialize();
        $.ajax
        ({
            type: "POST",
            url: "rentalincome/filter",
            data: selectedValue,
            success: function (html)
            {
                var currentSelection = JSON.parse(html);
                console.log(currentSelection);
                $("#currentSelection").html('Address: ' + currentSelection.selection.address + ';</br>Month: ' + currentSelection.selection.month);
                createTableFromRentalIncome(currentSelection.tableColumsName);
            }
        });
        return false;
    });
});