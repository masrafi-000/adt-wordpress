<?php

function plan_section_shortcode()
{
    ob_start();
?>


    <div class="max-w-7xl mx-auto px-4 py-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold  mb-4">Current Security Promotions</h1>
            <p class="text-gray-600 text-lg">Take advantage of these limited-time offers to secure your home with ADT's premium technology</p>
        </div>

        <!-- Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Summer Safety Special -->
            <div class="bg-white! rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="bg-[#0060AA] text-white! p-6 text-center">
                    <h2 class="text-2xl font-bold mb-1 text-white!">Summer Safety Special</h2>
                    <p class="text-blue-100!">Limited Time Offer</p>
                </div>
                <div class="p-6">
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Free Security System Installation</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">First Month Monitoring Free</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Wireless Doorbell Camera Included</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">24/7 Professional Monitoring</span>
                        </li>
                    </ul>
                    <div class="mb-6">
                        <p class="text-3xl! font-bold! text-[#0060AA]!">$0 Down</p>
                    </div>
                    <button class="w-full bg-[#0060AA] hover:bg-blue-800 text-white! font-bold py-3 px-4 rounded transition-colors">
                        Claim This Offer
                    </button>
                </div>
            </div>

            <!-- Card 2: Smart Home Bundle -->
            <div class="bg-white! rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="bg-[#0060AA] text-white! p-6 text-center">
                    <h2 class="text-2xl font-bold mb-1 text-white!">Smart Home Bundle</h2>
                    <p class="text-blue-100">Most Popular</p>
                </div>
                <div class="p-6">
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Complete Smart Home Security</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Smart Lock & Thermostat</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Indoor/Outdoor Camera Package</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Mobile App Control</span>
                        </li>
                    </ul>
                    <div class="mb-6">
                        <p class="text-3xl! font-bold! text-[#0060AA]!"><span class="text-2xl">$</span>49.99<span class="text-2xl">/mo</span></p>
                    </div>
                    <button class="w-full bg-[#0060AA] hover:bg-blue-800 text-white font-bold py-3 px-4 rounded transition-colors">
                        Get Smart Home Security
                    </button>
                </div>
            </div>

            <!-- Card 3: Senior Safety Package -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="bg-[#0060AA] text-white p-6 text-center">
                    <h2 class="text-2xl font-bold mb-1 text-white!">Senior Safety Package</h2>
                    <p class="text-blue-100">Specialized Protection</p>
                </div>
                <div class="p-6">
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Medical Alert Integration</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Fall Detection Sensors</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">24/7 Emergency Response</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Simplified Control Panel</span>
                        </li>
                    </ul>
                    <div class="mb-6">
                        <p class="text-3xl! font-bold! text-[#0060AA]!"><span class="text-2xl">$</span>39.99<span class="text-2xl">/mo</span></p>
                    </div>
                    <button class="w-full bg-[#0060AA] hover:bg-blue-800 text-white font-bold py-3 px-4 rounded transition-colors">
                        Protect Your Loved Ones
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php return ob_get_clean();
}

add_shortcode('plan_section', 'plan_section_shortcode');
