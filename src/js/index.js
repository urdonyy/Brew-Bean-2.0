// function showForm(formId) {
//     document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
//     document.getElementById(formId).classList.add("active");
// }

//=============================
//initialize cart from localStorage
//=============================
let itemsInCart = JSON.parse(localStorage.getItem("cartItems")) || [];

//select the container where cart items will be displayed
const orderItems = document.querySelector('.orderItems');
// orderItems.innerHTML = `hello world`; --test line

//=============================
//function: Render all cart items in the DOM
//=============================
function renderCartItems() {
    //clear previous cart HTML 
    orderItems.innerHTML = ``; /*safe*/

    //if cart is empty, show "No items"
    if (itemsInCart.length === 0) {
        orderItems.innerHTML = `
                <div class="noItemInCart"><p>No Items in Cart.</p></div>
                `;
        return;
    } 

    //loop through cart items and display them
    itemsInCart.forEach((item) => {
        orderItems.innerHTML += /*html*/`
                <div class="cartContainer">
                    <div class="leftPartitionCart">
                        <div class="coffeeName">
                            <h4> ${item.name}</h4>
                        </div> 
                        <div class="qntt"> 
                            <button class="decrease">-</button>
                            <p><?= "1"; ?></p><!-- hardcoded quantity, needs fixing later -->
                            <button class="increase">+</button>
                            <button class="deleteBtn">
                                <!-- trashcan SVG -->
                                <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.70465 1.48859C5.07964 1.11349 5.58826 0.902701 6.11865 0.902588H10.1187C10.6491 0.902588 11.1578 1.1133 11.5329 1.48837C11.9079 1.86345 12.1187 2.37215 12.1187 2.90259V4.90259H15.1187C15.3839 4.90259 15.6382 5.00795 15.8258 5.19548C16.0133 5.38302 16.1187 5.63737 16.1187 5.90259C16.1187 6.1678 16.0133 6.42216 15.8258 6.60969C15.6382 6.79723 15.3839 6.90259 15.1187 6.90259V18.9026C15.1187 19.433 14.9079 19.9417 14.5329 20.3168C14.1578 20.6919 13.6491 20.9026 13.1187 20.9026H3.11865C2.58822 20.9026 2.07951 20.6919 1.70444 20.3168C1.32937 19.9417 1.11865 19.433 1.11865 18.9026V6.90259C0.853436 6.90259 0.599082 6.79723 0.411546 6.60969C0.224009 6.42216 0.118652 6.1678 0.118652 5.90259C0.118652 5.63737 0.224009 5.38302 0.411546 5.19548C0.599082 5.00795 0.853436 4.90259 1.11865 4.90259H4.11865V2.90259C4.11877 2.3722 4.32955 1.86357 4.70465 1.48859ZM6.11865 4.90259H10.1187V2.90259H6.11865V4.90259ZM7.11865 8.90259C7.11865 8.63737 7.0133 8.38302 6.82576 8.19548C6.63822 8.00795 6.38387 7.90259 6.11865 7.90259C5.85344 7.90259 5.59908 8.00795 5.41155 8.19548C5.22401 8.38302 5.11865 8.63737 5.11865 8.90259V16.9026C5.11865 17.1678 5.22401 17.4222 5.41155 17.6097C5.59908 17.7972 5.85344 17.9026 6.11865 17.9026C6.38387 17.9026 6.63822 17.7972 6.82576 17.6097C7.0133 17.4222 7.11865 17.1678 7.11865 16.9026V8.90259ZM11.1187 8.90259C11.1187 8.63737 11.0133 8.38302 10.8258 8.19548C10.6382 8.00795 10.3839 7.90259 10.1187 7.90259C9.85344 7.90259 9.59908 8.00795 9.41155 8.19548C9.22401 8.38302 9.11865 8.63737 9.11865 8.90259V16.9026C9.11865 17.1678 9.22401 17.4222 9.41155 17.6097C9.59908 17.7972 9.85344 17.9026 10.1187 17.9026C10.3839 17.9026 10.6382 17.7972 10.8258 17.6097C11.0133 17.4222 11.1187 17.1678 11.1187 16.9026V8.90259Z" fill="#FF0000"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                     
                    <div class="centerPartitionCart">
                        <p>- additional info -</p>
                        <h5>Size: ${item.size}</h5>
                        <h5>Sugar: ${item.sugar}</h5>
                        <h5>Price: ${item.price}</h5>
                    </div>

                    <div class="rightPartitionCart">
                        <button class="confirmDelete">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.7793 25.8514C14.4208 25.8514 16.0463 25.5281 17.5628 24.8999C19.0794 24.2718 20.4574 23.351 21.6181 22.1903C22.7789 21.0295 23.6996 19.6516 24.3278 18.135C24.956 16.6184 25.2793 14.993 25.2793 13.3514C25.2793 11.7099 24.956 10.0845 24.3278 8.5679C23.6996 7.05133 22.7789 5.67334 21.6181 4.51261C20.4574 3.35187 19.0794 2.43113 17.5628 1.80295C16.0463 1.17476 14.4208 0.85144 12.7793 0.85144C9.46409 0.85144 6.28467 2.1684 3.94046 4.51261C1.59626 6.85681 0.279297 10.0362 0.279297 13.3514C0.279297 16.6666 1.59626 19.8461 3.94046 22.1903C6.28467 24.5345 9.46409 25.8514 12.7793 25.8514ZM12.4571 18.407L19.4015 10.0737L17.2682 8.29588L11.296 15.4612L8.20569 12.3695L6.2418 14.3334L10.4085 18.5001L11.4835 19.5751L12.4571 18.407Z"
                                fill="white" />
                            </svg>
                        </button>
                        <button class="cancelDelete">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                d="M8.72168 19.6014L13.2217 15.1014L17.7217 19.6014L19.4717 17.8514L14.9717 13.3514L19.4717 8.85144L17.7217 7.10144L13.2217 11.6014L8.72168 7.10144L6.97168 8.85144L11.4717 13.3514L6.97168 17.8514L8.72168 19.6014ZM13.2217 25.8514C11.4925 25.8514 9.86751 25.5231 8.34668 24.8664C6.82584 24.2098 5.50293 23.3194 4.37793 22.1952C3.25293 21.071 2.36251 19.7481 1.70668 18.2264C1.05085 16.7048 0.722515 15.0798 0.721681 13.3514C0.720848 11.6231 1.04918 9.99811 1.70668 8.47644C2.36418 6.95477 3.2546 5.63186 4.37793 4.50769C5.50126 3.38352 6.82418 2.49311 8.34668 1.83644C9.86918 1.17977 11.4942 0.85144 13.2217 0.85144C14.9492 0.85144 16.5742 1.17977 18.0967 1.83644C19.6192 2.49311 20.9421 3.38352 22.0654 4.50769C23.1888 5.63186 24.0796 6.95477 24.7379 8.47644C25.3962 9.99811 25.7242 11.6231 25.7217 13.3514C25.7192 15.0798 25.3908 16.7048 24.7367 18.2264C24.0825 19.7481 23.1921 21.071 22.0654 22.1952C20.9388 23.3194 19.6158 24.2102 18.0967 24.8677C16.5775 25.5252 14.9525 25.8531 13.2217 25.8514Z"
                                fill="white" />
                            </svg>
                        </button>
                    </div>
                </div>
                `;
    })

    attachCartEvents();
}

//rightPartition shows/hide
function attachCartEvents() {
    // if(e.target.classList.contains("confirmDelete")) {
    //     const id = parseInt(cartItem.dataset.id, 10);
    //     itemsInCart = itemsInCart.filter(item => item.id !== id);
    //     // itemsInCart.splice(index, 1);
    //     localStorage.setItem("cartItems", JSON.stringify(itemsInCart));
    //     renderCartItems();
    // } 

    document.querySelectorAll(".cartContainer").forEach((cartItem, index) => {
        const deleteBtn = cartItem.querySelector(".deleteBtn");
        const confirmBtn = cartItem.querySelector(".confirmDelete");
        const cancelBtn = cartItem.querySelector(".cancelDelete");

        deleteBtn.addEventListener("click", () => {
            cartItem.classList.add("showDeleteConfirm");
        });
        
        confirmBtn.addEventListener("click", () => {
            itemsInCart.splice(index, 1);
            localStorage.setItem("cartItems", JSON.stringify(itemsInCart));
            attachCartEvents();
            renderCartItems();
        });

        cancelBtn.addEventListener("click", () => {
            cartItem.classList.remove("showDeleteConfirm");
        });
    });

}
    

// document.querySelectorAll('.cartItem').forEach(cart => {
//     const btn = cart.querySelector('button');
//     btn.addEventListener('click', () => {
//         alert('test')
//         cart.remove();

//         cartData.splice(index, 1);
//         localStorage.setItem("cart", JSON.stringify(cartData));
//         renderCart()
//     });
// })

//=============================
//handle add-to-cart form submission
//=============================
document.querySelectorAll(".addToCartForm").forEach(form => {
    form.addEventListener("submit", function (event) {
        event.preventDefault(); //stop page reload

        //collect form data
        let formData = new FormData(event.target);
        console.log(formData.get("size"), formData.get("sugar"));

        //push new item to cart array
        itemsInCart.push({
            // id: Date.now(),
            name: formData.get("name"),
            price: formData.get("price"),
            size: formData.get("size"),
            sugar: formData.get("sugar"),
        })

        //save updated cart to localstorage
        localStorage.setItem("cartItems", JSON.stringify(itemsInCart));

        //re-render cart
        renderCartItems();
    });
});

//=============================
//handle print receipt button
//=============================
let printRcpt = document.querySelector(".print")
printRcpt.addEventListener("click", function (event) {
    //prnt rcpt btn is clicked while no itemsincart show alert
    if (itemsInCart.length === 0) {
        alert("No orders to print.")
        return;
    }

    //clear cart
    itemsInCart = [];
    //remove from localstorage
    localStorage.removeItem("cartItems")

    //clear checked inputs (radio)
    document.querySelectorAll(".addToCartForm").forEach(form => {
        form.reset();
    });

    alert("Receipt Printed.");
    renderCartItems();
})

//initial render when page loads
renderCartItems();
//
attachCartEvents();