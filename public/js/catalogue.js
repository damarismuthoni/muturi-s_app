

function incrementProductQuantity(id){
    // Get current counter 
    let currentCounter = parseInt(document.querySelector(`#counter-${id}`).innerHTML)

    // Increment counter
    let newCounter = currentCounter + 1;
    
    // Update on the frontend
    document.querySelector(`#counter-${id}`).innerHTML = newCounter;


}

function  decrementProductQuantity(id){
    // Get current counter
    let currentCounter = parseInt(document.querySelector(`#counter-${id}`).innerHTML)

    
    let newCounter = 0;
    // If counter is 0, do not decrement further. Else, decrement current counter
    if(currentCounter === 0){
        newCounter = 0;
    } else {
        newCounter = currentCounter - 1;
    }
    
    // Update on the frontend
    document.querySelector(`#counter-${id}`).innerHTML = newCounter;

}

function addToCart(id){
    let quantity = parseInt(document.querySelector(`#counter-${id}`).innerHTML);
    
    console.log(`Àdding ${quantity} items of product ${id} to cart`)

    // Send Post request to API
    var raw = JSON.stringify({
        "user_id": 1,
        "product_id": id,
        "product_quantity": quantity 
      });
      
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

      var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
      };
      
      fetch("http://localhost:8000/api/cart/add", requestOptions)
        .then(response => response.text())
        .then(result => {
            console.log(result)

            // hide the add to cart button
            document.querySelector(`#add-btn-${id}`).style.display = "none";

            // hide the quantity counter
            document.querySelector(`#quantity-counter-${id}`).style.display = "none";

            // Show the remove from cart button
            document.querySelector(`#remove-btn-${id}`).style.display = "block";
        })
        .catch(error => console.log('error', error));

}


function removeFromCart(id){
  
  
  console.log(`Removing product ${id} from cart`)

  // Send Post request to API
  var raw = JSON.stringify({
      "user_id": 1,
      "product_id": id,
    });
    
  var myHeaders = new Headers();
  myHeaders.append("Content-Type", "application/json");

    var requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: raw,
      redirect: 'follow'
    };
    
    fetch("http://localhost:8000/api/cart/remove", requestOptions)
      .then(response => response.text())
      .then(result => {
          console.log(result)

          // show the add to cart button
          document.querySelector(`#add-btn-${id}`).style.display = "block";

          // show the quantity counter
          document.querySelector(`#quantity-counter-${id}`).style.display = "block";

          // hide the remove from cart button
          document.querySelector(`#remove-btn-${id}`).style.display = "none";
      })
      .catch(error => console.log('error', error));

}