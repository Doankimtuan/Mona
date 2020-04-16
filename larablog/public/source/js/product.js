$('#minus').click(function(){
    var qty = Number($('#qty').text());
    if(qty < 1 || qty == 1){
        qty = 1;
        document.getElementById("qty").innerHTML = qty;
    }else {
        qty--;
        document.getElementById("qty").innerHTML = qty;
    }
})

$('#plus').click(function(){
    var qty = Number($('#qty').text());
    if(qty > 19){
        qty = 20;
        document.getElementById("qty").innerHTML = qty;
        alertify.success('Đặt tối đa 20 sản phẩm');

    }else {
        qty++;
        document.getElementById("qty").innerHTML = qty;
    }
})