<div id="NoMAD-tab"></div>
<h2 data-i18n="NoMAD.title"></h2>

<table>
    <tr>
        <th>Item 1</th>
        <td id="NoMAD_item1"></td>
    </tr>
    <tr>
        <th>Item 2</th>
        <td id="NoMAD_item2"></td>
    </tr>
</table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/NoMAD/get_data/' + serialNumber, function(data){
        $('#NoMAD_item1').text(data['item1'])
        $('#NoMAD_item2').text(data['item2'])
        $('#NoMAD_item2').text(data['item3'])
        $('#NoMAD_item2').text(data['item4'])
    });
});
</script>
