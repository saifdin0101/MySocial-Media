import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



// Get all category filter buttons
const categoryItems = document.querySelectorAll('.category-item');

// Listen for clicks on the category items
categoryItems.forEach(item => {
    item.addEventListener('click', function() {
        // Get the category to filter by
        const selectedCategory = item.getAttribute('data-category');
        
        // Get all product cards
        const products = document.querySelectorAll('.product-card');
        
        // Filter products based on the selected category
        products.forEach(product => {
            const productCategory = product.getAttribute('data-category');
            
            if (selectedCategory === "" || productCategory === selectedCategory) {
                product.style.display = "block"; // Show the product
            } else {
                product.style.display = "none"; // Hide the product
            }
        });
    });
});
