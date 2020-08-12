        var items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];

        let output = "";
        for (let i = 0; i < items.length; i++) {
            output += `
            <div class="col-lg-4 mt-2">
                <div class="card h-100 p-3">
                    <img src=${items[i][4]} class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title" id="itemName${[i]}">${items[i][1]}</h5>
                        <p class="card-text" id="itemDesc">${items[i][3]}</p>
                        <p class="card-text" >Rp ${items[i][2]}</p>
                        <a href="#" class="btn btn-primary" id="addCart${[i]}">Tambahkan ke keranjang</a>
                    </div>
                </div>
            </div>
            `;
        }
        document.getElementById("listBarang").innerHTML = output


        //SEARCH FUNCTION
        var formSearch = document.getElementById("formItem")
        formSearch.addEventListener("submit", function (e) {
            e.preventDefault()
            var term = document.getElementById("keyword").value.toLowerCase()
            //alert(term);
            for (let i = 0; i < items.length; i++) {
                var name_id = "itemName" + i;
                var card_div = document.getElementById(name_id).parentElement.parentElement.parentElement
                var product_name = document.getElementById(name_id).innerHTML.toLowerCase()
                if (product_name.includes(term)) {
                    card_div.style.display = "block"
                } else {
                    card_div.style.display = "none"
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
                cartBtn.lastChild.nodeValue = "(" + num + ")";
            });
        }