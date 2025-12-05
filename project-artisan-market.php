<?php include dirname(__FILE__).'/components/Header.php'; ?>
    <!-- Project Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <nav class="flex items-center space-x-2 text-purple-200 mb-4">
                    <a href="projects.php" class="hover:text-white transition">Projects</a>
                    <span class="text-purple-300">/</span>
                    <span class="text-white">Artisan Market E-commerce</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Artisan Market E-commerce</h1>
                <p class="text-xl mb-6">An online marketplace connecting local artisans with buyers worldwide, featuring secure payments and inventory management.</p>
                <div class="flex flex-wrap gap-4">
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">E-commerce</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Marketplace</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Vue.js</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Project Overview</h2>
                    <p class="text-gray-600 mb-6">
                        Artisan Market is a sophisticated e-commerce platform designed to empower local artisans and craftspeople 
                        by providing them with a global marketplace to showcase and sell their unique products. The platform 
                        bridges the gap between traditional craftsmanship and modern e-commerce technology.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Built with Vue.js and Laravel, Artisan Market offers a seamless shopping experience with advanced 
                        search, secure payments, and comprehensive seller management tools.
                    </p>
                    <div class="flex items-center space-x-6">
                        <div>
                            <div class="text-2xl font-bold text-purple-600">9 months</div>
                            <div class="text-gray-500">Development Time</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-purple-600">2,500+</div>
                            <div class="text-gray-500">Active Artisans</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-purple-600">$3.2M</div>
                            <div class="text-gray-500">Annual Sales</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Key Achievements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>95% seller satisfaction rate with platform tools</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Zero security breaches with robust payment processing</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Average 45% increase in artisan income</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Mobile-optimized design with 60% mobile traffic</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Features -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Key Features</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive e-commerce platform tailored for artisan marketplaces</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-store text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Vendor Dashboard</h3>
                    <p class="text-gray-600">Comprehensive seller tools including inventory management, order processing, and sales analytics for artisans.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Secure Payments</h3>
                    <p class="text-gray-600">Multi-gateway payment processing with escrow services, dispute resolution, and secure transaction handling.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-search text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Advanced Search</h3>
                    <p class="text-gray-600">AI-powered search with filters for materials, techniques, location, and artisan reputation ratings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Technology Stack</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Modern e-commerce technologies powering Artisan Market</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-vuejs text-green-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Vue.js</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-laravel text-red-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Laravel</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-database text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">MySQL</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-stripe text-purple-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Stripe</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-cloud text-blue-400 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">AWS</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-robot text-orange-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">AI Search</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-purple-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Need an E-commerce Solution?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss how we can build a custom e-commerce platform for your business.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-purple-50 transition">Start Your Project</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-purple-600 transition">View More Projects</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__).'/components/Footer.php'; ?>