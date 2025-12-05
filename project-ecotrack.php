<?php include dirname(__FILE__).'/components/Header.php'; ?>
    <!-- Project Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <nav class="flex items-center space-x-2 text-green-200 mb-4">
                    <a href="projects.php" class="hover:text-white transition">Projects</a>
                    <span class="text-green-300">/</span>
                    <span class="text-white">EcoTrack Mobile App</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">EcoTrack Mobile App</h1>
                <p class="text-xl mb-6">A sustainability tracking app that helps users monitor their carbon footprint and make eco-friendly choices.</p>
                <div class="flex flex-wrap gap-4">
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Mobile Application</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Sustainability</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Flutter</span>
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
                        EcoTrack is a comprehensive mobile application designed to help environmentally conscious individuals 
                        track and reduce their carbon footprint. The app provides personalized sustainability insights, 
                        eco-friendly alternatives, and progress tracking toward environmental goals.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Built with Flutter for cross-platform compatibility, EcoTrack delivers a seamless user experience 
                        across both iOS and Android devices while maintaining native performance and smooth animations.
                    </p>
                    <div class="flex items-center space-x-6">
                        <div>
                            <div class="text-2xl font-bold text-green-600">6 months</div>
                            <div class="text-gray-500">Development Time</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-green-600">50,000+</div>
                            <div class="text-gray-500">Downloads</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-green-600">4.8★</div>
                            <div class="text-gray-500">App Store Rating</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Key Achievements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>Average 30% reduction in carbon footprint for active users</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>Featured in App Store's "Apps We Love" section</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>98% user retention after 3 months</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>Partnerships with 15+ environmental organizations</span>
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
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive sustainability tracking and eco-friendly lifestyle features</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-footprint text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Carbon Footprint Tracking</h3>
                    <p class="text-gray-600">Real-time tracking of carbon emissions from transportation, energy usage, and consumption habits with detailed analytics.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-leaf text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Eco Challenges</h3>
                    <p class="text-gray-600">Daily and weekly sustainability challenges with rewards and community competitions to encourage eco-friendly habits.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-map-marker-alt text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Green Locations</h3>
                    <p class="text-gray-600">Interactive map showing sustainable businesses, recycling centers, and eco-friendly services near user location.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Technology Stack</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Modern cross-platform technologies powering EcoTrack</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-flutter text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Flutter</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-fire text-orange-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Firebase</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-map text-green-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Google Maps</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-chart-pie text-purple-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Charts</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-bell text-yellow-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Notifications</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-cloud text-blue-400 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">REST API</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-green-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Inspired by EcoTrack?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss how we can build a similar mobile solution for your business needs.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-green-50 transition">Start Your Project</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition">View More Projects</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__).'/components/Footer.php'; ?>