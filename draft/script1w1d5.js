var kalimat4 = 'Sanbercode';
var contohKataPertama4 = kalimat4.substring(6, 10);
alert(contohKataPertama4);


var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
];

//DISPLAY CARDS
for (let i = 0; i < items.length; i++) {
    var image_id = "img" + i;
    var name_id = "itemName" + i;
    var desc_id = "itemDesc" + i;
    var harga_id = "harga" + i;
    document.getElementById(image_id).src = items[i][4];
    document.getElementById(name_id).innerHTML = items[i][1];
    document.getElementById(desc_id).innerHTML = items[i][3];
    document.getElementById(harga_id).innerHTML = "Rp " + items[i][2];
}

//SEARCH FUNCTION
var formBalikString = document.getElementById("formItem")
formBalikString.addEventListener("submit", function (e) {
    e.preventDefault()
    var term = document.getElementById("keyword").value.toLowerCase()
    //alert(term);
    for (let i = 0; i < items.length; i++) {
        var name_id = "itemName" + i;
        var card_id = "card" + i;
        var product_name = document.getElementById(name_id).innerHTML.toLowerCase()
        if (product_name.includes(term)) {
            document.getElementById(card_id).style.display = "block"
        } else {
            document.getElementById(card_id).style.display = "none"
        }

    }
})

//ADD TO CART
var cartBtn = document.getElementById("cart");
var num = parseInt(cartBtn.lastChild.nodeValue[2]);
//alert(num)
for (let i = 0; i < items.length; i++) {
    var addBtn = "addCart" + i
    document.getElementById(addBtn).addEventListener("click", function (e) {
        e.preventDefault()
        num += 1;
        cartBtn.lastChild.nodeValue = "("+num+")";
    });
}

