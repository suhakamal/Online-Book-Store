
   /* update cart */
if(document.readyState == 'loading'){
    document.addEventListener(DOMContentLoaded, ready)
}else{
    ready()
}

function ready(){
    var RemoveCartButtons = document.getElementsByClassName("remove")
    console.log(RemoveCartButtons)
    for(var i= 0;i <RemoveCartButtons.length; i++){
        var button = RemoveCartButtons[i]
        button.addEventListener('click', RemoveCartItem)
    }

    var AddToCartButtons = document.getElementsByClassName("add")
    for(var i= 0;i <AddToCartButtons.length; i++){
         var button =AddToCartButtons[i]
         button.addEventListener('click',AddToCartClicked)
    }
    
}
   
function RemoveCartItem(event){
    var ButtonClicked = event.target
    ButtonClicked.parentElement.remove()
    UpdateCartTotal()
}

function AddToCartClicked(event){
    var button= event.target
    var AddButton = button.parentElement
    var BookName = AddButton.getElementsByClassName("BookName")[0].innerText
    var Author = AddButton.getElementsByClassName("Author")[0].innerText
    var Cost = AddButton.getElementsByClassName("price")[0].innerText
}


function addcart(BookName){
    var select =document.createElement('div')
}
function UpdateCartTotal() {
    var items = document.getElementsByClassName("cart")[0]
    rows = items.getElementsByClassName("row")
    for(var i= 0;i <rows.length; i++){
        var row = rows[i]
        var price= row.document.getElementsByID("price")[0]
        var pricenum = parseFloat(price.innerText)
        total =pricenum
    }
    document.getElementsByClassName("TotalPrice").innerText = total
}


function OpenCart() {
    document.getElementById("TheCart").style.display = "block";
    }

function CloseCart() {
    document.getElementById("TheCart").style.display = "none";
    }
