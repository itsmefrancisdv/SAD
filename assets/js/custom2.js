table = $('#EditTable-Body');

$('#EditButton').on('click', () => {
    $('#ViewInv-Table :checked').each(function() {
        og_row = $(this).parent().parent();
        new_row = $('<tr></tr>'); // create row for modal
        
        new_row.append('<td class="ProductName-EditEntry"><input class="bg-white border rounded border-white" type="text" placeholder="Product ID" name="pidedit" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px; autocomplete="on"></td>')
            .children().last().children().val(og_row.children('.id').html());

        new_row.append('<td class="Brand-EditEntry"><input class="bg-white border rounded border-white" type="text" placeholder="Product Name" name="pnameedit" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px;" autocomplete="on"></td>')
            .children().last().children().val(og_row.children('.name').html());

        new_row.append('<td class="Brand-EditEntry"><input class="bg-white border rounded border-white" type="number" placeholder="SRP" name="psrpedit" style="width: 100%;height: 100%;padding-bottom: 0px;padding-top: 0px;" autocomplete="on"></td>')
            .children().last().children().val(og_row.children('.srp').html());

        new_row.append('<td class="QTY-EditEntry"><input class="border rounded-0 border-white" type="number" name="pbpriceedit" placeholder="Buying Price" style="width: 100%;"></td>')
            .children().last().children().val(og_row.children('.buyprice').html());

        new_row.append('<td class="RP-EditEntry"><input class="border rounded-0 border-white" type="number" name="pdiscountedit" placeholder="Discount Rate" style="width: 100%;"></td>')
            .children().last().children().val(og_row.children('.discrate').html());
        new_row.append('<td class="RP-EditEntry"><input class="border rounded-0 border-white" type="number" name="pshopeeedit" placeholder="Shopee Rate" style="width: 100%;"></td>')
            .children().last().children().val(og_row.children('.shopeerate').html());

        table.append(new_row);
    });
});

$('#EditInv-CancelButton').click(() => {
    table.empty();
});
