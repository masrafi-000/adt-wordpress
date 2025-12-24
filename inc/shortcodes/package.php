<?php

function package_section_shortcode()
{
    ob_start();
?>




    <div class="max-w-7xl mx-auto px-4 py-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold! text-[#0060AA]!!  mb-4">ADT Security Packages</h1>
            <p class="text-gray-600 text-lg">Choose from our professionally designed security packages to match your home and lifestyle needs</p>
        </div>

        <!-- Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Summer Safety Special -->
            <div class="bg-white! rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all transform duration-400! hover:scale-105 relative flex flex-col h-full  ">
                <div class="bg-[#0060AA] text-white! p-6 text-center">
                    <h2 class="text-2xl font-bold mb-1 text-white!">Basic Protection</h2>
                </div>
                <div class=" p-6 flex flex-col justify-between flex-1">
                    <div class="text-xl! font-semibold">
                        Essential security for small homes and apartments
                    </div>
                    <div class="space-y-1 mb-8">
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Control Panel</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">3 Door/Window Sensors</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Motion Detector</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Yard Sign & Window Decals</span>
                        </div>
                    </div>
                    <button class="w-full bg-[#0060AA] border hover:bg-white! hover:border! text-white! hover:text-black! font-bold py-3 px-4 rounded-2xl!  transform transition-all duration-400 ease-in-out">
                        Select Package
                    </button>
                </div>
            </div>

            <!-- Card 2: Smart Home Bundle -->
            <div class="bg-white! rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all transform duration-400! hover:scale-105 relative flex flex-col h-full">
                <div class="bg-[#0060AA] text-white! p-6 text-center">
                    <h2 class="text-2xl font-bold mb-1 text-white!">Total Protection</h2>
                </div>
                <div class="p-6 flex flex-col justify-between flex-1">
                    <div class="text-xl! font-semibold">
                        Essential security for small homes and apartments
                    </div>
                    <div class="space-y-1 mb-8">
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Everything in Basic</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">2 Security Cameras</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Smart Home Integration</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Fire & Carbon Monoxide Detection</span>
                        </div>
                    </div>
                    <button class="w-full bg-[#0060AA] border hover:bg-white! hover:border! text-white! hover:text-black! font-bold py-3 px-4 rounded-2xl!  transform transition-all duration-400 ease-in-out">
                        Select Package
                    </button>
                </div>
            </div>

            <!-- Card 3: Senior Safety Package -->
            <div class="bg-white! rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all transform duration-400! hover:scale-105 relative flex flex-col h-full">
                <div class="bg-[#0060AA] text-white! p-6 text-center">
                    <h2 class="text-2xl font-bold mb-1 text-white!">Premium Smart Home</h2>
                </div>
                <div class="p-6 flex flex-col justify-between flex-1">
                    <div class="text-xl! font-semibold">
                        Ultimate protection with advanced smart home features
                    </div>
                    <div class="space-y-1 mb-8">
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Everything in Total</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Video Doorbell Pro</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Smart Lock & Thermostat</span>
                        </div>
                        <div class="flex items-center justify-start gap-3">
                            <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">24/7 Video Monitoring</span>
                        </div>
                    </div>
                    <button class="w-full bg-[#0060AA] border hover:bg-white! hover:border! text-white! hover:text-black! font-bold py-3 px-4 rounded-2xl!  transform transition-all duration-400 ease-in-out">
                        Select Package
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php return ob_get_clean();
}

add_shortcode('package_section', 'package_section_shortcode');
