<?php

function package_section_shortcode()
{
    $packages = [
        [
            'title' => 'Basic Protection',
            'subtitle' => 'Essential security for small homes and apartments',
            'features' => [
                'Control Panel',
                '3 Door/Window Sensors',
                'Motion Detector',
                'Yard Sign & Window Decals',
            ],
        ],
        [
            'title' => 'Total Protection',
            'subtitle' => 'Expanded security with smart features',
            'features' => [
                'Everything in Basic',
                '2 Security Cameras',
                'Smart Home Integration',
                'Fire & Carbon Monoxide Detection',
            ],
        ],
        [
            'title' => 'Premium Smart Home',
            'subtitle' => 'Ultimate protection with advanced smart home features',
            'features' => [
                'Everything in Total',
                'Video Doorbell Pro',
                'Smart Lock & Thermostat',
                '24/7 Video Monitoring',
            ],
        ],
    ];

    ob_start();
    ?>

    <div class="max-w-7xl mx-auto px-4 py-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold! text-[#0060AA]!! mb-4">
                ADT Security Packages
            </h1>
            <p class="text-gray-600 text-lg">
                Choose from our professionally designed security packages
            </p>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($packages as $package): ?>
                <div class="bg-white! rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all transform duration-400! hover:scale-105 flex flex-col h-full">

                    <div class="bg-[#0060AA] text-white! p-6 text-center">
                        <h2 class="text-2xl font-bold text-white!">
                            <?php echo esc_html($package['title']); ?>
                        </h2>
                    </div>

                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div class="text-xl! font-semibold mb-4">
                            <?php echo esc_html($package['subtitle']); ?>
                        </div>

                        <div class="space-y-1 mb-8">
                            <?php foreach ($package['features'] as $feature): ?>
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5 text-[#0060AA]! flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-gray-700">
                                        <?php echo esc_html($feature); ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <button class="w-full bg-[#0060AA] border hover:bg-white! hover:border! text-white! hover:text-black! font-bold py-3 px-4 rounded-2xl! transition-all duration-400">
                            Select Package
                        </button>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('package_section', 'package_section_shortcode');
