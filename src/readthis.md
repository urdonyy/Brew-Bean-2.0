# 🛒 Shopping Cart Script (LocalStorage + Render)

This script handles a shopping cart system using **localStorage**.  
It allows adding items from forms and rendering them on the page.

---

## 📦 Features
- Saves cart items in **localStorage**  
- Renders cart items dynamically  
- Displays a message if the cart is empty  
- Handles multiple forms with `.addtocartForm` class  

---

## 💻 Code

```html
<script>
    // Load cart from localStorage or create an empty one
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Reference to the cart display container
    const cartText = document.querySelector('.text');

    // Function to render cart items in the UI
    function renderCart() {
        cartText.innerHTML = "";

        if (cart.length === 0) {
            cartText.innerHTML = `<p style="color: gray;">No cart items yet</p>`;
            return;
        }

        cart.forEach((item) => {
            cartText.innerHTML += `
                <div style="border: 1px solid red; margin: 4px; padding: 4px;">
                    <h5>Category: ${item.category}</h5>
                    <h5>Size: ${item.size}</h5>
                    <h5>Sugar: ${item.sugar}</h5>
                </div>
            `;
        });
    }

    // Attach event listeners to all forms with the class "addtocartForm"
    document.querySelectorAll(".addtocartForm").forEach(form => {
        form.addEventListener("submit", function(e) {
            e.preventDefault();

            const formData = new FormData(e.target);

            // Create a new item object
            const newItem = {
                category: formData.get("category"),
                size: formData.get("size"),
                sugar: formData.get("sugar")
            };

            // Add item to cart and save to localStorage
            cart.push(newItem);
            localStorage.setItem('cart', JSON.stringify(cart));

            // Re-render cart
            renderCart();
        });
    });

    // Initial render when page loads
    renderCart();
</script>
```
--Commit
## Modified Code
``` html
<form class="addtocartForm" method="POST">
    <div class="item-properties">
        <div class="item-properties-card">
            <p class="title">
                Size
            </p>
            <input type="hidden" name="category" value="<?php echo htmlspecialchars($prod['product_name']); ?>">
            <div class="ip-variety">
                <div class="ip-variety">
                    <label class="size-label">
                        <input style="display: none;" type="radio" name="size" value="S" hidden>
                        <span>S</span>
                    </label>

                    <label class="size-label">
                        <input style="display: none;" type="radio" name="size" value="M" hidden>
                        <span>M</span>
                    </label>

                    <label class="size-label">
                        <input style="display: none;" type="radio" name="size" value="L" hidden>
                        <span>L</span>
                    </label>
                </div>

            </div>
        </div>

        <div class="item-properties-card">
            <p class="title">
                Sugar (%)
            </p>
            <div class="ip-variety">
                <label class="size-label">
                    <input style="display: none;" type="radio" name="sugar" value="25" hidden>
                    <span>25</span>
                </label>

                <label class="size-label">
                    <input style="display: none;" type="radio" name="sugar" value="50" hidden>
                    <span>50</span>
                </label>

                <label class="size-label">
                    <input style="display: none;" type="radio" name="sugar" value="100" hidden>
                    <span>100</span>
                </label>
            </div>
        </div>
    </div>

    <div class="button_itemProperties">
        <button class="addToCartButton" type="submit" name="addToCart">+ Add</button>
    </div>
</form>
```
## Removed Elements From
``` html
<h2>Unfinished</h2>
``` 
## To 
``` html
<div class="text"></div>
``` 
## Added Styles 
``` html 
<style>
    .size-label {
        height: 40px;
        width: 40px;
        border: 2px solid #ccc;
        border-radius: 100%;
        cursor: pointer;
        user-select: none;
        transition: all 0.2s;
        overflow: hidden;
    }

    .size-label:hover {
        border-color: #666;
    }

    .size-label span {
        height: 100%;
        width: 100%;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .size-label input:checked+span {
        background: #007bff;
        color: #fff;
        border-color: #007bff;
    }
</style>

```