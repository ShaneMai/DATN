
$(document).ready(function() {
    $('a.button2').click(function() {
        var $key=$(this).attr("id");

        var $soluong_input="#so_luong"+$key;

        var $soLuong=$($soluong_input).val();


        var $dongiainput="#don_gia"+$key;

        var $don_gia=$($dongia_input).val();
        // alert($don_gia);
        var form_data = {
            id    : $key,
            so_luong : $so_Luong,
            don_gia  : $don_gia,
        };


        $.ajax({
            url:"purchase.php",
            type: 'POST',
            async : true,
            data: form_data,
            dataType: 'json',
            success: function(data){
//alert("123");
                alert("Số lượng đặt: " + data['sl'] + ".\nTổng tiền: " + formatCurrency(data['st']) + " VNĐ.");
            },
            error: function(error){
                alert(error.statusText)
            }
        });
        return false;
    }); //click
}); // ready
//Định dạng số
function formatCurrency(num)
{
    var num = num.toString().replace(/\$|\,/g,'');
    if(isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num*100+0.50000000001);
    num = Math.floor(num/100).toString();
    for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
        num = num.substring(0,num.length-(4*i+3))+','+
            num.substring(num.length-(4*i+3));
    return (((sign)?'':'-') + num);
}
