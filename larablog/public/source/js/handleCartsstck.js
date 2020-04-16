function AddCart(id) {
    url = 'Add-Cart/' + id;
    axios.get(url).then(function(res){
      renderCart(res);
    })
  }

  

  function renderCart(response){
    $("#change-item-cart").empty();
    $("#change-item-cart").html(response);
  }