function save() {
    let name = document.getElementById('name').value;
    let typeProduct = document.getElementById('typeProduct').value;
    let price = document.getElementById('price').value;
    let promotionPrice = document.getElementById('promotionPrice').value;
    let suppliers = document.getElementById('suppliers').value;




    // notification empty
    if (_.isEmpty(name)) {
        document.getElementById('name-error').innerHTML = 'Enter name product';
    } else {
        document.getElementById('name-error').innerHTML = '';
    }

    if (_.isEmpty(typeProduct)) {
        document.getElementById('typeProduct-error').innerHTML = 'Enter type product';
    } else {
        document.getElementById('typeProduct-error').innerHTML = '';
    }

    if (_.isEmpty(price)) {
        document.getElementById('price-error').innerHTML = 'Enter price';
    } else {
        document.getElementById('price-error').innerHTML = '';
    }

    if (_.isEmpty(promotionPrice)) {
        document.getElementById('promotionPrice-error').innerHTML = 'Enter promotion price';
    } else {
        document.getElementById('promotionPrice-error').innerHTML = '';
    }

    if (_.isEmpty(suppliers)) {
        document.getElementById('suppliers-error').innerHTML = 'Enter suppliers';
    } else {
        document.getElementById('suppliers-error').innerHTML = '';
    }

}


document.getElementById("add").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "block";
});

document.getElementById("close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
