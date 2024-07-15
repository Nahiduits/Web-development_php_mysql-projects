const shop = document.getElementById('shop');
const shop1 = document.getElementById('shop1');
const shop2 = document.getElementById('shop2');
const shop3 = document.getElementById('shop3');

let basket = JSON.parse(localStorage.getItem('data')) || []

let generateShop = () => {
  shop.innerHTML = shopItemsData.map((x) => {
        
      let {id,name,price,desc,img} = x 

    return `
          <div class='shop_item'  id=prodcut-id-${id}>
           <span class=" px-2 mx-1 bg-success text-light text-capitalize fw-bold rounded-4">sell</span>
               <img src= '${img}' alt='' />
               <div class='product_info' >
                      <h5>${name}</h5>
                      <p  class='price'> <span>$:</span> ${price} </p>
                       <p> ${desc} </p>

                       <button  class="bg-success text-white fw-bold rounded"  onclick ="add_to_cart('${id}','${name}','${price}','${img}')" >Add to Cart </button>
               </div>
           </div>  
    `

   })
}

let generateShop1 = () => {
  shop1.innerHTML = shopItemsData1.map((x) => {
        
      let {id,name,price,desc,img} = x 

    return `
          <div class='shop_item'  id=prodcut-id-${id}>
           <span class=" px-2 mx-1 bg-success text-light text-capitalize fw-bold rounded-4">sell</span>
               <img src= '${img}' alt='' />
               <div class='product_info' >
                      <h5>${name}</h5>
                      <p  class='price'> <span>$:</span> ${price} </p>
                       <p> ${desc} </p>

                       <button  class="bg-success text-white fw-bold"  onclick ="add_to_cart('${id}','${name}','${price}','${img}')" >Add to Cart </button>
               </div>
           </div>  
    `

   })
}

let generateShop2 = () => {
  shop2.innerHTML = shopItemsData2.map((x) => {
        
      let {id,name,price,desc,img} = x 

    return `
          <div class='shop_item'  id=prodcut-id-${id}>
           <span class=" px-2 mx-1 bg-success text-light text-capitalize fw-bold rounded-4">sell</span>
               <img src= '${img}' alt='' />
               <div class='product_info' >
                      <h5>${name}</h5>
                      <p  class='price'> <span>$:</span> ${price} </p>
                       <p> ${desc} </p>

                       <button  class="bg-success text-white fw-bold"  onclick ="add_to_cart('${id}','${name}','${price}','${img}')" >Add to Cart </button>
               </div>
           </div>  
    `

   })
}

let generateShop3 = () => {
  shop3.innerHTML = shopItemsData3.map((x) => {
        
      let {id,name,price,desc,img} = x 

    return `
          <div class='shop_item'  id=prodcut-id-${id}>
           <span class=" px-2 mx-1 bg-success text-light text-capitalize fw-bold rounded-4">sell</span>
               <img src= '${img}' alt='' />
               <div class='product_info' >
                      <h5>${name}</h5>
                      <p  class='price'> <span>$:</span> ${price} </p>
                       <p> ${desc} </p>

                       <button  class="bg-success text-white fw-bold shadow border border-none"  onclick ="add_to_cart('${id}','${name}','${price}','${img}')" >Add to Cart </button>
               </div>
           </div>  
    `

   })
}

let add_to_cart = (id,name,price,img) => {
 
  basket.push({
    id: id,
    item: 1,
    name: name,
    price: price,
    img:img
    })
    alert(`${basket.length} Items Added`)

  localStorage.setItem('data',JSON.stringify(basket))

  calculate()
}

let calculate = () => {
  let cart_icon = document.getElementById('cart_amount')
  let cart_amount = basket.length

   cart_icon.innerHTML = cart_amount
}

calculate()
generateShop()
generateShop1()
generateShop2()
generateShop3()