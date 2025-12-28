<?php
/*
Template Name: Add-ons
*/

get_header();

$basePrice = 29.99;
$packageName = "Basic Protection";

$basicFeatures = [
    "Smart Control Panel (7\" Touchscreen)",
    "3x Wireless Door/Window Sensors",
    "Wide-angle Motion Detector",
    "Official Yard Sign & Security Decals",
    "24/7 Professional Monitoring Ready"
];

$addOns = [
    ["id" => "smoke", "name" => "Smoke & Heat Detector", "price" => 30, "desc" => "Instant alerts during fire"],
    ["id" => "lock",  "name" => "Smart Deadbolt Lock",  "price" => 150, "desc" => "Keyless entry and remote lock"],
    ["id" => "cam",   "name" => "HD Night Vision Camera", "price" => 80, "desc" => "1080p live streaming"],
    ["id" => "glass", "name" => "Glass Break Sensor", "price" => 40, "desc" => "Detects shattered windows"],
];

// Safety check
if (!session_id()) {
    session_start();
}

$plan = $_SESSION['selected_plan'] ?? null;
?>


<section class="container mx-auto px-4">

    <div class="text-center max-w-2xl mx-auto mb-16">
        <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-5 leading-tight">Secure Your Peace of Mind
        </h1>
        <p class="text-base md:text-lg text-slate-600 px-4 mt-2">Choose our foundational security package or tailor
            it to your needs.</p>
    </div>

    <div class="flex flex-col lg:flex-row gap-10 items-start mb-10">

        <div class="w-full lg:w-[420px] shrink-0 bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden ">
            <div class="bg-[#045CB4]! p-8 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <span class="bg-blue-500/30 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-blue-400/50">Most Popular</span>
                    <h2 class="text-3xl text-white! mt-4! font-bold mb-0! "><?php echo $packageName; ?></h2>
                    <p class="text-blue-100">The foundation of home security.</p>
                </div>
            </div>

            <div class="p-8">
                <div class="flex items-baseline mb-6">
                    <span class="text-4xl font-bold text-slate-900">$<span
                            id="totalPriceDisplay"><?php echo number_format($basePrice, 2); ?></span></span>
                    <span class="text-slate-500 ml-2 font-medium">/month</span>
                </div>

                <ul id="packageFeatureList" class="space-y-4 mb-8">
                    <?php foreach ($basicFeatures as $feature): ?>
                        <li class="flex items-start">
                            <div class="mt-1 bg-green-100 rounded-full p-1 text-green-600 shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span
                                class="ml-3 text-slate-700 font-medium text-sm md:text-base"><?php echo $feature; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>



                <form method="post" action="<?php echo esc_url(site_url('/check-out')); ?>">

                    <!-- value="<?php echo esc_attr(json_encode($plan)); ?>" -->

                    <!-- <input type="hidden" name="selected_plan" > -->

                    <button type="submit"
                        class="w-full bg-[#045CB4] hover:bg-blue-700 text-white! py-4 rounded-2xl transition-all shadow-lg active:scale-[0.98] focus:outline-none focus:ring-0 focus:border-none">
                        <!-- <?php echo esc_html($plan['button']); ?> -->
                        Purchase Package
                    </button>
                </form>

               

            </div>
        </div>

        <div class=" w-full  rounded-2xl p-4 flex flex-col gap-2 shadow-2xl">
            <div class="flex flex-col gap-2">
                <h1>Customize Your Plan</h1>
                <p>You can add any product based on your nedd</p>
            </div>
            <button id="showAddonsBtn"
                class="w-full bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-bold py-4 rounded-2xl transition-all flex items-center justify-center gap-2 group">
                <span id="btnText">Add More Items</span>
                <svg id="arrowIcon"
                    class="w-5 h-5 transition-transform duration-300 group-hover:translate-y-1" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>


            <div id="toggleSection" class="relative w-full lg:w-[680px] bg-white rounded-3xl shadow-xl border border-slate-100 p-6 md:p-10" style="opacity:0;transform:translateY(1rem);max-height:0;overflow:hidden;transition:opacity .35s ease, transform .35s ease, max-height .45s ease;">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 leading-tight">Enhance Your Security</h3>
                    <p class="text-slate-500 mt-1">Add extra layers of protection to your plan.</p>
                </div>

                <div class="grid grid-cols-1 gap-4 max-h-[450px] overflow-y-scroll ">
                    <?php foreach ($addOns as $item): ?>
                        <div class="group relative addon-item-container peer ">


                            <lable for="<?php echo $item['id']; ?>"
                                class="flex flex-col items-start gap-2 p-2 border-2 border-slate-100 rounded-2xl cursor-pointer transition-all peer-checked:border-blue-500 peer-checked:bg-blue-50/50 hover:border-blue-200">

                                <div class="w-full flex justify-between items-center ">

                                    <div
                                        class="w-10 h-10  bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 peer-checked:bg-blue-100 group-hover:bg-[#045CB4]! transition-all duration-500! ease-in-out peer-checked:text-blue-600">
                                        <svg class="w-6 h-6 group-hover:text-white! transition-all duration-500! ease-in-out"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <span
                                        class="text-lg font-bold text-blue-600 item-price-display">+$<?php echo $item['price']; ?></span>
                                </div>


                                <div class="flex items-start gap-2 ">
                                    <div class="p-2">
                                        <input type="checkbox" class="addon-checkbox peer size-5 " id="<?php echo $item['id']; ?>"
                                            data-name="<?php echo $item['name']; ?>" data-price="<?php echo $item['price']; ?>">
                                    </div>

                                    <div class="flex flex-col justify-center gap-1">
                                        <div class="text-lg font-bold text-slate-900"><?php echo $item['name']; ?></div>
                                        <div class="text-base text-slate-500"><?php echo $item['desc']; ?></div>
                                    </div>
                                </div>


                                <div class="flex items-center space-x-1 ">


                                    <div
                                        class="qty-btn bg-gray-100 decrease-btn size-8 flex items-center justify-center  text-gray-900 text-lg shadow-xl rounded-md ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                        </svg>

                                    </div>
                                    <span class="qty-value w-6 text-center text-sm font-bold">1</span>
                                    <div
                                        class="qty-btn increase-btn bg-gray-100 size-8 flex items-center justify-center text-gray-900! shadow-xl rounded-md
                                        ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>

                                    </div>
                                </div>


                                </lab>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div
                    class="mt-8 pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <p class="text-sm text-slate-500 max-w-[300px]">Selected items will be added to your package
                        instantly.</p>
                    <button id="confirmBtn"
                        class="w-full sm:w-auto px-10 py-4 bg-slate-900 hover:bg-black text-white font-bold rounded-2xl transition-all shadow-lg active:scale-95">
                        Confirm & Update Total
                    </button>
                </div>
            </div>



        </div>


    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const basePrice = <?php echo $basePrice; ?>;
        const packageName = "<?php echo esc_js($packageName); ?>";
        const showBtn = document.getElementById('showAddonsBtn');
        const toggleSection = document.getElementById('toggleSection');
        const totalPriceDisplay = document.getElementById('totalPriceDisplay');
        const packageList = document.getElementById('packageFeatureList');
        const confirmBtn = document.getElementById('confirmBtn');
        const addonsForm = document.getElementById('addonsPostForm');
        const adsInput = document.getElementById('ads_data_input');

        // Toggle add-ons panel
        if (showBtn && toggleSection) {
            showBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const isOpen = toggleSection.classList.contains('open');
                if (!isOpen) {
                    // open: measure and set maxHeight for smooth animation
                    toggleSection.classList.add('open');
                    toggleSection.style.display = 'block';
                    const sh = toggleSection.scrollHeight;
                    // allow next frame for layout
                    requestAnimationFrame(() => {
                        toggleSection.style.maxHeight = sh + 'px';
                        toggleSection.style.opacity = '1';
                        toggleSection.style.transform = 'translateY(0)';
                    });
                    document.getElementById('btnText').innerText = 'Close Add-ons';
                    document.getElementById('arrowIcon').classList.add('rotate-180');
                } else {
                    // close
                    toggleSection.style.maxHeight = '0';
                    toggleSection.style.opacity = '0';
                    toggleSection.style.transform = 'translateY(1rem)';
                    toggleSection.classList.remove('open');
                    document.getElementById('btnText').innerText = 'Add More Items';
                    document.getElementById('arrowIcon').classList.remove('rotate-180');
                    // after transition, hide display to remove from flow
                    setTimeout(() => {
                        if (!toggleSection.classList.contains('open')) toggleSection.style.display = 'none';
                    }, 500);
                }
            });
            // keep hidden initially
            toggleSection.style.display = 'none';
        }

        // Quantity and selection handling
        document.querySelectorAll('.addon-item-container').forEach(container => {
            const decBtn = container.querySelector('.decrease-btn');
            const incBtn = container.querySelector('.increase-btn');
            const qtyValue = container.querySelector('.qty-value');
            const priceDisplay = container.querySelector('.item-price-display');
            const checkbox = container.querySelector('.addon-checkbox');
            const originalPrice = checkbox ? parseFloat(checkbox.dataset.price || 0) : 0;

            // Guard: ensure elements exist
            if (!qtyValue) return;

            if (incBtn) {
                incBtn.addEventListener('click', (ev) => {
                    ev.preventDefault();
                    ev.stopPropagation();
                    let val = parseInt(qtyValue.textContent) || 1;
                    val++;
                    qtyValue.textContent = val;
                    if (priceDisplay) priceDisplay.textContent = `+$${(originalPrice * val).toFixed(2)}`;
                });
            }

            if (decBtn) {
                decBtn.addEventListener('click', (ev) => {
                    ev.preventDefault();
                    ev.stopPropagation();
                    let val = parseInt(qtyValue.textContent) || 1;
                    if (val > 1) {
                        val--;
                        qtyValue.textContent = val;
                        if (priceDisplay) priceDisplay.textContent = `+$${(originalPrice * val).toFixed(2)}`;
                    }
                });
            }

            // Clicking the container should toggle the checkbox for accessibility
            container.addEventListener('click', function(ev) {
                // ignore clicks originating from qty buttons
                if (ev.target.closest('.qty-btn')) return;
                if (checkbox) checkbox.checked = !checkbox.checked;
            });
        });

        // Confirm button: build selection, update UI and submit to server
        if (confirmBtn) {
            confirmBtn.addEventListener('click', function(e) {
                e.preventDefault();

                let additionalPrice = 0;
                const selectedFeatures = [];
                const addons = [];

                // static features (only non-dynamic li)
                document.querySelectorAll('#packageFeatureList li:not(.dynamic-addon) span').forEach(span => {
                    selectedFeatures.push(span.innerText.trim());
                });

                // remove previously appended dynamic addons
                document.querySelectorAll('.dynamic-addon').forEach(el => el.remove());

                const checkedAddons = document.querySelectorAll('.addon-checkbox:checked');
                checkedAddons.forEach(addon => {
                    const container = addon.closest('.addon-item-container');
                    const qty = parseInt(container.querySelector('.qty-value').textContent) || 1;
                    const unitPrice = parseFloat(addon.dataset.price) || 0;
                    const name = addon.dataset.name || '';

                    const subTotal = unitPrice * qty;
                    additionalPrice += subTotal;

                    const li = document.createElement('li');
                    li.className = 'flex items-start dynamic-addon animate-fade-in';
                    li.innerHTML = `
                    <div class="mt-1 bg-blue-100 rounded-full p-1 text-blue-600 shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <span class="ml-3 text-blue-800 font-semibold text-sm md:text-base">${name} <span class="text-blue-500 font-bold">(x${qty})</span></span>
                `;
                    packageList.appendChild(li);

                    selectedFeatures.push(`${name} (x${qty})`);
                    addons.push({
                        id: addon.id || '',
                        name: name,
                        qty: qty,
                        unitPrice: unitPrice,
                        subTotal: subTotal
                    });
                });

                const finalTotal = (basePrice + additionalPrice).toFixed(2);
                if (totalPriceDisplay) totalPriceDisplay.innerText = finalTotal;

                const checkoutData = {
                    packageName: packageName,
                    totalPrice: `$${finalTotal}`,
                    features: selectedFeatures,
                    addons: addons
                };

                // If server form exists, submit JSON to update PHP session and redirect to checkout
                if (adsInput && addonsForm) {
                    try {
                        adsInput.value = JSON.stringify(checkoutData);
                        // visual feedback
                        const originalText = confirmBtn.innerText;
                        confirmBtn.innerText = 'Updating...';
                        addonsForm.submit();
                        return;
                    } catch (err) {
                        console.warn('Add-ons submit failed, falling back to localStorage', err);
                    }
                }

                // Fallback: store in localStorage and show confirmation
                try {
                    localStorage.setItem('securityCheckout', JSON.stringify(checkoutData));
                } catch (err) {
                    /* ignore */
                }
                window.scrollTo({
                    top: 100,
                    behavior: 'smooth'
                });
                const originalText = confirmBtn.innerText;
                confirmBtn.innerText = 'Updated!';
                setTimeout(() => {
                    confirmBtn.innerText = originalText;
                }, 2000);
            });
        }
    });
</script>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(-10px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.4s ease forwards;
    }

    #extraSecuritySection {
        opacity: 0;
        transform: translateY(1rem);
        transition: all 0.5s ease;
    }
</style>

<?php get_footer(); ?>