$(document).ready(function ()
{
    $("#selected").submit(function ()
    {
        var selectedValue = $(this).serialize();
        $.ajax
        ({
            type: "POST",
            url: "rentalincome/filter", //выводит на экран выбранные данные (месяц+адрес) и отрисовывает таблицу из базы.
            data: selectedValue,
            success: function (html)
            {
                var currentSelection = JSON.parse(html);
                if ($('#tableRental')){
                    $('#tableRental').remove();
                }
                writeTable(currentSelection.tableColumsName);
                console.log('Data are in the table!');
                $("#currentSelection").html('Address: ' + currentSelection.selection.address + ';</br>Month: ' + currentSelection.selection.month);
                writeHiddenField('address',currentSelection.selection.address)
                writeHiddenField('month',currentSelection.selection.month);
            }
        });
        return false;
    });
});
function writeHiddenField(name,postVar) {
    var hideField = $('<input/>', {
        type: 'hidden',
        name: name,
        value: postVar
    });
    $('#saveRental').append(hideField);
}
function writeTable(array)
{
    var table = $('<table/>', {
        id:     'tableRental',
        class:  'table table-bordered rental-table'
    });
    $('#tableRentalIncome').addClass('center-block').append(table);
    $('#tableRental').append(
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
        var valueToSave = $(this).serialize();
        $.ajax
        ({
            type: "POST",
            url: "rentalincome/saverental",
            data: valueToSave,
            success: function (html)
            {
                var answer = JSON.parse(html);
                console.log(answer);
            }
        });
        return false;
    });
});