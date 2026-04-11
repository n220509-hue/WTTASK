let cart = [];
let total = 0;

function addToCart(itemName, price) {
    // 1. ఐటమ్‌ను లిస్ట్‌లో యాడ్ చేయడం
    cart.push({ name: itemName, price: price });
    total += price;

    // 2. స్క్రీన్ మీద కౌంట్ మార్చడం
    document.getElementById('cart-count').innerText = cart.length;

    // 3. కార్ట్ విండోలో లిస్ట్ అప్‌డేట్ చేయడం
    const list = document.getElementById('cart-items-list');
    list.innerHTML = ""; // పాత దాన్ని క్లియర్ చేయడం

    cart.forEach((item) => {
        const li = document.createElement('li');
        li.className = "list-group-item d-flex justify-content-between";
        li.innerHTML = `<span>${item.name}</span> <span>₹${item.price}</span>`;
        list.appendChild(li);
    });

    // 4. టోటల్ ప్రైస్ అప్‌డేట్
    document.getElementById('total-price').innerText = total;
    
    alert(itemName + " యాడ్ అయింది!");
}
       let count = 0;
        function addToCart() {
            count++;
            document.getElementById('cart-count').innerText = count;
            alert("Item added to cart!");
        }
    