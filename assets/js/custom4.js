table = $('#EditTable-Body');

$('#EditButton').on('click', () => {
    $('#ViewInv-Table :checked').each(function() {
        og_row = $(this).parent().parent();
        new_row = $('<tr></tr>'); // create row for modal
        
        new_row.append('<td class="ProductName-EditEntry"><input class="bg-white border rounded border-white" type="text" placeholder="Customer PO" name="poedit" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px; autocomplete="on"></td>')
            .children().last().children().val(og_row.children('.id').html());

        new_row.append('<td class="Brand-EditEntry"><input class="bg-white border rounded border-white" type="text" placeholder="Date Ordered" name="dateorderedit" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px;" autocomplete="on"></td>')
            .children().last().children().val(og_row.children('.name').html());

            new_row.append('<td class="Brand-EditEntry"><input class="bg-white border rounded border-white" type="text" placeholder="Customer Name" name="namedit" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px;" autocomplete="on"></td>')
            .children().last().children().val(og_row.children('.brand').html());

        new_row.append('<td class="QTY-EditEntry"><input class="border rounded-0 border-white" type="text" name="statusedit" placeholder="Customer Status" style="width: 100%;"></td>')
            .children().last().children().val(og_row.children('.quantity').html());

        table.append(new_row);
    });
});

$('#EditInv-CancelButton').click(() => {
    table.empty();
});
