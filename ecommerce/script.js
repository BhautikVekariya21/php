// script.js

// Update Cart Item Count
function updateCartCount() {
    const cartCount = document.getElementById('cart-count');
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartCount.innerText = cart.length;
}

// Add to Cart
function addToCart(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    alert('Product added to cart!');
}

// Remove from Cart
function removeFromCart(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(id => id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    alert('Product removed from cart!');
}

// Toggle Cart Visibility
function toggleCart() {
    const cartContainer = document.getElementById('cart-container');
    cartContainer.classList.toggle('hidden');
}

// Fetch Products with Filters and Sorting
function fetchProducts() {
    const filterCategory = document.getElementById('filter-category').value;
    const sortBy = document.getElementById('sort-by').value;

    fetch(`products.php?category=${filterCategory}&sort=${sortBy}`)
        .then(response => response.json())
        .then(data => displayProducts(data))
        .catch(error => console.error('Error fetching products:', error));
}

// Display Products
function displayProducts(products) {
    const productContainer = document.getElementById('product-list');
    productContainer.innerHTML = ''; // Clear previous products

    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product');
        productElement.innerHTML = `
            <img src="images/${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>$${product.price}</p>
            <button onclick="addToCart(${product.id})" class="btn">Add to Cart</button>
        `;
        productContainer.appendChild(productElement);
    });
}

// Form Validation for Login/Register
function validateForm(event) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const email = document.getElementById('email') ? document.getElementById('email').value : '';

    if (!username || !password || (email && !validateEmail(email))) {
        event.preventDefault();
        alert('Please fill in all fields correctly.');
    }
}

// Validate Email
function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return emailPattern.test(email);
}

// Initialize Cart Count on Page Load
window.onload = function() {
    updateCartCount();

    // Add event listener for form validation on submit
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', validateForm);
    }

    // Fetch products on page load for dynamic filtering/sorting
    fetchProducts();
};
