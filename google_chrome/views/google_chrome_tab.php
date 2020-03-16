<div id="google_chrome-tab"></div>
<h2 data-i18n="google_chrome.title"></h2>

<table>
    <tr>
        <th>Version</th>
        <td id="google_chrome_item1"></td>
    </tr>
</table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/google_chrome/get_data/' + serialNumber, function(data){
        $('#google_chrome_item1').text(data['item1'])
    });
});
</script>
