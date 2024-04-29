let iconcart = document.querySelector(".icon-cart");
let closecart = document.querySelector(".close");
let body = document.querySelector("body");
let listCartHTML = document.querySelector(".listcart");
let oranges = document.querySelector(".oranges");
let pineapple = document.querySelector(".pineapple");
let strawberry = document.querySelector(".strawberry");
let banana = document.querySelector(".banana");
let mango = document.querySelector(".mango");
let watermelon = document.querySelector(".watermelon");
let iconCartSpan = document.querySelector(".icon-cart span");
let top_cont = document.querySelector(".top_cont")

let listproducts = [];
let orangesLists = []
let pineappleLists = []
let strawberryLists = []
let watermelonLists = []
let mangoLists = []
let bananaLists = []

let carts = [];
iconcart.addEventListener( "click", () => {
    body.classList.toggle("showcart")
    top_cont.style.right="30%"
})
closecart.addEventListener( "click", () => {
    top_cont.style.right="5%"
    body.classList.toggle("showcart")
})

const addDataToHTML = (products)  => {
    oranges.innerHTML = "";
    if(listproducts.length > 0 ){
        products.forEach(product => {
            let newproduct  = document.createElement("div");
            newproduct.classList.add("item");
            newproduct.dataset.id = product.id;
            newproduct.innerHTML = ` 
        <img src="${product.image}" alt="">
        <h2>${product.name}</h2>
        <div class="price">N${product.price}</div>
        <button class="addcart">Add To Cart</button>
        `;
        oranges.appendChild(newproduct)
        })
    }
}

oranges.addEventListener("click", (event) => {
    let positionclick = event.target;
    if(positionclick.classList.contains("addcart")){
       let product_id = positionclick.parentElement.dataset.id;
       addTocart(product_id);
    }
})
const addDataToHTML2 = (products)  => {
    pineapple.innerHTML = "";
    if(listproducts.length > 0 ){
        products.forEach(product => {
            let newproduct  = document.createElement("div");
            newproduct.classList.add("item");
            newproduct.dataset.id = product.id;
            newproduct.innerHTML = ` 
        <img src="${product.image}" alt="">
        <h2>${product.name}</h2>
        <div class="price">N${product.price}</div>
        <button class="addcart">Add To Cart</button>
        `;
        pineapple.appendChild(newproduct)
        })
    }
}

pineapple.addEventListener("click", (event) => {
    let positionclick = event.target;
    if(positionclick.classList.contains("addcart")){
       let product_id = positionclick.parentElement.dataset.id;
       addTocart(product_id);
    }
})
const addDataToHTML3 = (products)  => {
    strawberry.innerHTML = "";
    if(listproducts.length > 0 ){
        products.forEach(product => {
            let newproduct  = document.createElement("div");
            newproduct.classList.add("item");
            newproduct.dataset.id = product.id;
            newproduct.innerHTML = ` 
        <img src="${product.image}" alt="">
        <h2>${product.name}</h2>
        <div class="price">N${product.price}</div>
        <button class="addcart">Add To Cart</button>
        `;
        strawberry.appendChild(newproduct)
        })
    }
}

strawberry.addEventListener("click", (event) => {
    let positionclick = event.target;
    if(positionclick.classList.contains("addcart")){
       let product_id = positionclick.parentElement.dataset.id;
       addTocart(product_id);
    }
})
const addDataToHTML4 = (products)  => {
    banana.innerHTML = "";
    if(listproducts.length > 0 ){
        products.forEach(product => {
            let newproduct  = document.createElement("div");
            newproduct.classList.add("item");
            newproduct.dataset.id = product.id;
            newproduct.innerHTML = ` 
        <img src="${product.image}" alt="">
        <h2>${product.name}</h2>
        <div class="price">N${product.price}</div>
        <button class="addcart">Add To Cart</button>
        `;
        banana.appendChild(newproduct)
        })
    }
}

banana.addEventListener("click", (event) => {
    let positionclick = event.target;
    if(positionclick.classList.contains("addcart")){
       let product_id = positionclick.parentElement.dataset.id;
       addTocart(product_id);
    }
})

const addDataToHTML5 = (products)  => {
    mango.innerHTML = "";
    if(listproducts.length > 0 ){
        products.forEach(product => {
            let newproduct  = document.createElement("div");
            newproduct.classList.add("item");
            newproduct.dataset.id = product.id;
            newproduct.innerHTML = ` 
        <img src="${product.image}" alt="">
        <h2>${product.name}</h2>
        <div class="price">N${product.price}</div>
        <button class="addcart">Add To Cart</button>
        `;
        mango.appendChild(newproduct)
        })
    }
}

mango.addEventListener("click", (event) => {
    let positionclick = event.target;
    if(positionclick.classList.contains("addcart")){
       let product_id = positionclick.parentElement.dataset.id;
       addTocart(product_id);
    }
})
const addDataToHTML6 = (products)  => {
    watermelon.innerHTML = "";
    if(listproducts.length > 0 ){
        products.forEach(product => {
            let newproduct  = document.createElement("div");
            newproduct.classList.add("item");
            newproduct.dataset.id = product.id;
            newproduct.innerHTML = ` 
        <img src="${product.image}" alt="">
        <h2>${product.name}</h2>
        <div class="price">N${product.price}</div>
        <button class="addcart">Add To Cart</button>
        `;
        watermelon.appendChild(newproduct)
        })
    }
}

watermelon.addEventListener("click", (event) => {
    let positionclick = event.target;
    if(positionclick.classList.contains("addcart")){
       let product_id = positionclick.parentElement.dataset.id;
       addTocart(product_id);
    }
})


const addTocart = (product_id) => {
    let positionThisProductInCart = carts.findIndex((value) => value.product_id == product_id);
   if(carts.length <= 0){
    carts = [{
        product_id: product_id,
        quantity: 1
    }]
   }else if(positionThisProductInCart < 0){
        carts.push({
             product_id: product_id,
             quantity: 1
        });
   }else{
    carts[positionThisProductInCart].quantity = carts[positionThisProductInCart].quantity + 1;
   }
   addCartToHTML();
   addCartToMemory();
 }
 const addCartToMemory = () => {
    localStorage.setItem("cart", JSON.stringify(carts));
 }

const addCartToHTML = () => {
    listCartHTML.innerHTML = "";
    let totalQuantity = 0;
    if(carts.length > 0){
        carts.forEach(cart => {
            totalQuantity = totalQuantity + cart.quantity
            let newcart = document.createElement("div");
            newcart.classList.add("item");
            newcart.dataset.id = cart.product_id;
            let positionProduct = listproducts.findIndex((value) => value.id == cart.product_id);
            if (positionProduct !== -1) {
                let info = listproducts[positionProduct];
                newcart.innerHTML = `
                    <div class="image">
                        <img src="${info.image}" alt="">
                    </div>
                    <div class="names">${info.name}</div>
                    <div class="totalprice">N${info.price * cart.quantity}</div>
                    <div class="quantity">
                        <span class="minus">-</span>
                        <span>${cart.quantity}</span>
                        <span class="plus">+</span>
                    </div>
                `;
            }  
            listCartHTML.appendChild(newcart);
        })
    }
    iconCartSpan.innerText = totalQuantity;
}
listCartHTML.addEventListener('click', (event) => {
    let positionclick = event.target;
    if(positionclick.classList.contains('minus') || positionclick.classList.contains('plus')){
    let product_id = positionclick.parentElement.parentElement.dataset.id;
    let type = 'minus';
    if(positionclick.classList.contains('plus')){
        type ='plus';
        }
        changeQuantity(product_id, type);
    }
})
const changeQuantity = (product_id, type) => {
    let positionItemInCart = carts.findIndex((value) => value.product_id == product_id);
    if(positionItemInCart >= 0){
        switch (type) {
            case 'plus':
                carts[positionItemInCart].quantity = carts[positionItemInCart].quantity + 1;
                break;
            default:
                let valueChange = carts[positionItemInCart].quantity - 1;
                if(valueChange > 0){
                    carts[positionItemInCart].quantity = valueChange;
                }else{
                    carts.splice(positionItemInCart, 1);
                }
                break;
        }
    }
    addCartToMemory();
    addCartToHTML();
}

    //get data from json
    fetch("oranges.json")
    .then(Response => Response.json())
    .then(data => {
        listproducts = data;
      addDataToHTML(listproducts);
      //GET Cart from memory
      if(localStorage.getItem("cart")){
          carts = JSON.parse(localStorage.getItem("cart"));
          addCartToHTML();
      }
    })

    //get data from json
    fetch("pineapple.json")
    .then(Response => Response.json())
    .then(data => {
        listproducts = data;
      addDataToHTML2(listproducts);
      //GET Cart from memory
      if(localStorage.getItem("cart")){
          carts = JSON.parse(localStorage.getItem("cart"));
          addCartToHTML();
      }
    })
    //get data from json
    fetch("strawberry.json")
    .then(Response => Response.json())
    .then(data => {
        listproducts = data;
      addDataToHTML3(listproducts);
      //GET Cart from memory
      if(localStorage.getItem("cart")){
          carts = JSON.parse(localStorage.getItem("cart"));
          addCartToHTML();
      }
    })
    //get data from json
    fetch("banana.json")
    .then(Response => Response.json())
    .then(data => {
        listproducts = data;
      addDataToHTML4(listproducts);
      //GET Cart from memory
      if(localStorage.getItem("cart")){
          carts = JSON.parse(localStorage.getItem("cart"));
          addCartToHTML();
      }
    })
    //get data from json
    fetch("mango.json")
    .then(Response => Response.json())
    .then(data => {
        listproducts = data;
      addDataToHTML5(listproducts);
      //GET Cart from memory
      if(localStorage.getItem("cart")){
          carts = JSON.parse(localStorage.getItem("cart"));
          addCartToHTML();
      }
    })
    //get data from json
    fetch("watermelon.json")
    .then(Response => Response.json())
    .then(data => {
        listproducts = data;
      addDataToHTML6(listproducts);
      //GET Cart from memory
      if(localStorage.getItem("cart")){
          carts = JSON.parse(localStorage.getItem("cart"));
          addCartToHTML();
      }
    })

  

