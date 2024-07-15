let label = document.getElementById("label");
let ShoppingCart = document.getElementById("shopping_cart");

let basket = JSON.parse(localStorage.getItem("data")) || [];

let calculate = () => {
  let cartIcon = document.getElementById("cart_amount");
};

calculate();

let generateCartItems = () => {
  if (basket.length !== 0) {
    return (ShoppingCart.innerHTML = basket
      .map((x) => {
        let { id,name,price,item,img } = x;
        return `
      <div class="cart_item shadow border border-top-0 border-bottom-0"  id=prodcut-id-${id}>
                <p>${name}</p>
         <div class='cart_item_img'>
           <img width="100" src=${img} alt="" />
         </div>
                <p >$ ${price}</p>
      
        <button  class='rmv_btn'  onclick="removeItem(${id})">Remove</button>
      </div>
      `;
      }).join(""));
  }else {
    ShoppingCart.innerHTML = `<h3>Shopping cart is empty</h3>`;
  }
};
  generateCartItems();

let removeItem = (id) => {
  alert("Remove Item")
  basket = basket.filter((x) => x.id != id);
  localStorage.setItem("data", JSON.stringify(basket));
  calculate();
  generateCartItems()
};


let Total_amount = () => {
  let total_amount = 0;
  basket.map((item) => {
    total_amount += item.item * item.price;
  });
  label.innerHTML = `
    <div class='checkout_area'>
       <h2>Total Price : $ ${total_amount} </h2>
       <button class='update' onClick=window.location.reload()>
         Update cart
       </button>
    <button class='checkout' onClick="location.href = 'login_form.php'  " >Checkout</button>
    </div>
  `
};

Total_amount();
