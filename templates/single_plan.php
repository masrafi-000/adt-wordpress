<?php
/*
Template Name: Single plan page
*/
get_header();
?>

<div class="bg-gray-50 min-h-screen w-full">
    <div class="container mx-auto mt-6 md:mt-10 px-4 pb-10">
        <div class="flex flex-col gap-6 md:gap-10 w-full  mx-auto">

            <!-- Plan Header -->
            <section class="w-full border border-gray-200 rounded-lg p-4 md:p-6 bg-white shadow-sm">
                <h1 class="text-xl md:text-2xl font-semibold text-gray-900">
                    Premium Business Plan
                </h1>
                <p class="mt-2 text-sm md:text-base text-gray-600">
                    Everything you need to grow your business with advanced features and priority support
                </p>
            </section>

            <!-- Main Content -->
            <section class="w-full flex flex-col gap-6 md:gap-10 border border-gray-200 rounded-lg p-4 md:p-6 bg-white shadow-sm">

                <!-- Plan Core Info -->
                <div class="w-full flex flex-col gap-6 items-center">
                    <h2 class="text-lg md:text-xl font-semibold text-gray-900 self-start">Plan Features</h2>

                    <!-- Plan Items -->
                    <div class="w-full border border-gray-200 rounded-md p-4 space-y-3">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900">Unlimited Projects</p>
                                <p class="text-sm text-gray-600">Create and manage unlimited projects</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900">Priority Support</p>
                                <p class="text-sm text-gray-600">24/7 dedicated support team</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900">Advanced Analytics</p>
                                <p class="text-sm text-gray-600">Detailed insights and reporting tools</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900">Team Collaboration</p>
                                <p class="text-sm text-gray-600">Up to 50 team members</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add-on Products & Pricing -->
                <div class="w-full flex flex-col gap-6 md:gap-8">
                    <h2 class="text-lg md:text-xl font-semibold text-gray-900">Customize Your Plan</h2>

                    <!-- Add Product Button -->
                    <div class="w-full flex flex-col gap-4">
                        <button
                            type="button"
                            id="addProductBtn"
                            class="self-start px-5 py-2.5 rounded-md border border-gray-300 bg-white hover:bg-gray-50 transition text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                            <span class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Add Additional Product
                            </span>
                        </button>

                        <!-- Selected Additional Products -->
                        <div id="selectedProducts" class="w-full max-h-64 md:max-h-80 overflow-y-auto flex flex-col gap-3 border border-gray-200 rounded-md p-4 bg-gray-50">
                            <p class="text-sm text-gray-500 text-center py-4" id="emptyMessage">
                                No additional products selected. Click "Add Additional Product" to get started.
                            </p>
                            <!-- Dynamic product cards will be inserted here -->
                        </div>
                    </div>

                    <!-- Pricing and Confirmation -->
                    <div class="w-full flex flex-col gap-6 border-t border-gray-200 pt-6">
                        <!-- Price Summary -->
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3">
                            <div class="flex flex-col gap-2">
                                <!-- Initial Price -->
                                <p class="text-sm md:text-base text-gray-600">
                                    Base Plan Price: <span class="font-semibold text-gray-900" id="basePrice">$99.00</span>
                                </p>

                                <!-- Add-ons Total -->
                                <p class="text-sm md:text-base text-gray-600">
                                    Add-ons Total: <span class="font-semibold text-gray-900" id="addonsTotal">$0.00</span>
                                </p>

                                <!-- Total Price -->
                                <p class="text-lg md:text-xl font-bold text-gray-900 pt-2 border-t border-gray-200">
                                    Total Price: <span id="totalPrice">$99.00</span>
                                </p>
                            </div>
                        </div>

                        <!-- Confirmation Button -->
                        <button
                            type="button"
                            id="confirmBtn"
                            class="w-full sm:w-auto px-8 py-3 rounded-md bg-primary text-white hover:bg-primary-dark transition font-medium text-sm md:text-base focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 shadow-sm">
                            Confirm & Continue
                        </button>
                    </div>

                    <!-- Plan Description -->
                    <div class="w-full border border-gray-200 rounded-md p-4 bg-gray-50">
                        <h3 class="font-semibold text-gray-900 mb-2">About This Plan</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            The Premium Business Plan is designed for growing teams that need advanced features and scalability.
                            With unlimited projects, priority support, and advanced analytics, you'll have everything you need to
                            take your business to the next level. Customize your plan with additional products to perfectly match
                            your unique requirements.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal for Product Selection -->
    <div id="productModal" class="hidden fixed inset-0 z-50 overflow-y-auto">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-black bg-opacity-50 modal-backdrop" id="modalBackdrop"></div>

        <!-- Modal Content -->
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white rounded-lg shadow-xl max-w-2xl w-full slide-in">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-4 md:p-6 border-b border-gray-200">
                    <h3 class="text-lg md:text-xl font-semibold text-gray-900">Select Additional Products</h3>
                    <button
                        type="button"
                        id="closeModalBtn"
                        class="text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-primary rounded-md p-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-4 md:p-6 max-h-[60vh] overflow-y-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" id="availableProducts">
                        <!-- Product cards will be dynamically generated -->
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="flex justify-end gap-3 p-4 md:p-6 border-t border-gray-200">
                    <button
                        type="button"
                        id="cancelModalBtn"
                        class="px-4 py-2 rounded-md border border-gray-300 bg-white hover:bg-gray-50 transition text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Available products database
    const availableProducts = [{
            id: 1,
            name: "Cloud Storage Pro",
            description: "2TB secure cloud storage",
            price: 29.99,
            icon: `<svg class="w-8 h-8 text-[#0060AA]!" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                </svg>`
        },
        {
            id: 2,
            name: "API Access Premium",
            description: "Unlimited API calls",
            price: 49.99,
            icon: `<svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>`
        },
        {
            id: 3,
            name: "Email Marketing Suite",
            description: "50K emails per month",
            price: 39.99,
            icon: `<svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>`
        },
        {
            id: 4,
            name: "Advanced Security",
            description: "Enhanced encryption & monitoring",
            price: 59.99,
            icon: `<svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>`
        },
        {
            id: 5,
            name: "White Label Solution",
            description: "Custom branding options",
            price: 99.99,
            icon: `<svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                </svg>`
        },
        {
            id: 6,
            name: "AI Assistant",
            description: "Smart automation tools",
            price: 79.99,
            icon: `<svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>`
        }
    ];

    // State management
    let selectedProducts = [];
    const basePlanPrice = 99.00;

    // DOM elements
    const addProductBtn = document.getElementById('addProductBtn');
    const productModal = document.getElementById('productModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const cancelModalBtn = document.getElementById('cancelModalBtn');
    const modalBackdrop = document.getElementById('modalBackdrop');
    const selectedProductsContainer = document.getElementById('selectedProducts');
    const emptyMessage = document.getElementById('emptyMessage');
    const availableProductsContainer = document.getElementById('availableProducts');
    const confirmBtn = document.getElementById('confirmBtn');

    // Initialize
    renderAvailableProducts();
    updatePrices();

    // Event listeners
    addProductBtn.addEventListener('click', openModal);
    closeModalBtn.addEventListener('click', closeModal);
    cancelModalBtn.addEventListener('click', closeModal);
    modalBackdrop.addEventListener('click', closeModal);
    confirmBtn.addEventListener('click', handleConfirm);

    // Functions
    function openModal() {
        productModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        productModal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    function renderAvailableProducts() {
        availableProductsContainer.innerHTML = availableProducts.map(product => {
            const isSelected = selectedProducts.some(p => p.id === product.id);
            return `
                    <div class="border border-gray-200 rounded-lg p-4 hover:border-primary transition cursor-pointer ${isSelected ? 'bg-blue-50 border-primary' : 'bg-white'}"
                         onclick="toggleProduct(${product.id})">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0">
                                ${product.icon}
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-gray-900 text-sm md:text-base">${product.name}</h4>
                                <p class="text-xs md:text-sm text-gray-600 mt-1">${product.description}</p>
                                <p class="text-base md:text-lg font-bold text-gray-900 mt-2">$${product.price.toFixed(2)}</p>
                            </div>
                            ${isSelected ? `
                                <svg class="w-6 h-6 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            ` : ''}
                        </div>
                    </div>
                `;
        }).join('');
    }

    function toggleProduct(productId) {
        const product = availableProducts.find(p => p.id === productId);
        const index = selectedProducts.findIndex(p => p.id === productId);

        if (index > -1) {
            selectedProducts.splice(index, 1);
        } else {
            selectedProducts.push(product);
        }

        renderAvailableProducts();
        renderSelectedProducts();
        updatePrices();
    }

    function removeProduct(productId) {
        selectedProducts = selectedProducts.filter(p => p.id !== productId);
        renderAvailableProducts();
        renderSelectedProducts();
        updatePrices();
    }

    function renderSelectedProducts() {
        if (selectedProducts.length === 0) {
            emptyMessage.classList.remove('hidden');
            return;
        }

        emptyMessage.classList.add('hidden');

        const productsHTML = selectedProducts.map(product => `
                <div class="flex items-center gap-3 border border-gray-200 p-3 md:p-4 rounded-lg bg-white fade-in">
                    <div class="flex-shrink-0">
                        ${product.icon}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-gray-900 text-sm md:text-base">${product.name}</p>
                        <p class="text-xs md:text-sm text-gray-600">${product.description}</p>
                        <span class="text-base md:text-lg font-bold text-gray-900 mt-1 inline-block">$${product.price.toFixed(2)}</span>
                    </div>
                    <button
                        onclick="removeProduct(${product.id})"
                        class="flex-shrink-0 p-2 rounded-full bg-red-50 hover:bg-red-100 transition focus:outline-none focus:ring-2 focus:ring-red-500">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                        </svg>
                    </button>
                </div>
            `).join('');

        selectedProductsContainer.innerHTML = productsHTML + `
                <p class="text-sm text-gray-500 text-center py-4 hidden" id="emptyMessage">
                    No additional products selected. Click "Add Additional Product" to get started.
                </p>
            `;
    }

    function updatePrices() {
        const addonsTotal = selectedProducts.reduce((sum, product) => sum + product.price, 0);
        const totalPrice = basePlanPrice + addonsTotal;

        document.getElementById('basePrice').textContent = `$${basePlanPrice.toFixed(2)}`;
        document.getElementById('addonsTotal').textContent = `$${addonsTotal.toFixed(2)}`;
        document.getElementById('totalPrice').textContent = `$${totalPrice.toFixed(2)}`;
    }

    function handleConfirm() {
        const totalPrice = basePlanPrice + selectedProducts.reduce((sum, p) => sum + p.price, 0);
        const productNames = selectedProducts.map(p => p.name).join(', ') || 'None';

        alert(`Plan Confirmation\n\nBase Plan: Premium Business Plan ($${basePlanPrice.toFixed(2)})\nAdditional Products: ${productNames}\nTotal: $${totalPrice.toFixed(2)}\n\nThank you for your selection!`);
    }

    // ESC key to close modal
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !productModal.classList.contains('hidden')) {
            closeModal();
        }
    });
</script>


<?php get_footer(); ?>