<?php include dirname(__FILE__).'/components/Header.php'; ?>

<!-- Page Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">All Projects</h1>
            <p class="text-xl max-w-2xl mx-auto">Complete portfolio of our digital solutions across various industries and technologies</p>
        </div>
    </section>

    <!-- All Projects Grid -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="one">
                <!-- Include all project cards from projects.html here -->
                <!-- Nexus Platform -->
                <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600 relative">
                        <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                            <span class="text-white text-xl font-bold">Nexus Platform</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Nexus Business Platform</h3>
                        <p class="text-gray-600 mb-4">A comprehensive SaaS platform for business management with integrated CRM, project management, and analytics.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">React</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">Node.js</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">MongoDB</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="project-nexus.php" class="text-blue-600 font-semibold hover:text-blue-800 transition flex items-center">
                                View Details <i class="fas fa-arrow-right ml-1 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="web-apps" id="two">
                        <div class="h-48 bg-gradient-to-r from-green-500 to-teal-600 relative">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                <span class="text-white text-xl font-bold">HealthTrack Pro</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">HealthTrack Pro Dashboard</h3>
                            <p class="text-gray-600 mb-4">A healthcare analytics dashboard for medical professionals to track patient data and treatment outcomes.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full">Angular</span>
                                <span class="px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full">Python</span>
                                <span class="px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full">PostgreSQL</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="project-healthtrack.php" class="text-blue-600 font-semibold hover:text-blue-800 transition flex items-center">
                                    View Details <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="web-apps">
                        <div class="h-48 bg-gradient-to-r from-purple-500 to-pink-600 relative">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                <span class="text-white text-xl font-bold">LearnHub</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">LearnHub Education Platform</h3>
                            <p class="text-gray-600 mb-4">An interactive online learning platform with video courses, quizzes, and progress tracking for students and educators.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-purple-100 text-purple-600 text-sm rounded-full">Next.js</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-600 text-sm rounded-full">GraphQL</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-600 text-sm rounded-full">PostgreSQL</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="project-learnhub.php" class="text-blue-600 font-semibold hover:text-blue-800 transition flex items-center">
                                    View Details <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 1 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="mobile-apps">
                        <div class="h-48 bg-gradient-to-r from-green-500 to-emerald-600 relative">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                <span class="text-white text-xl font-bold">EcoTrack</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">EcoTrack Mobile App</h3>
                            <p class="text-gray-600 mb-4">A sustainability tracking app that helps users monitor their carbon footprint and make eco-friendly choices.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full">Flutter</span>
                                <span class="px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full">Firebase</span>
                                <span class="px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full">Google Maps API</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="project-ecotrack.php" class="text-blue-600 font-semibold hover:text-blue-800 transition flex items-center">
                                    View Details <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="fab fa-app-store-ios"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="mobile-apps">
                        <div class="h-48 bg-gradient-to-r from-blue-500 to-indigo-600 relative">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                <span class="text-white text-xl font-bold">FinWise</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">FinWise Mobile Banking</h3>
                            <p class="text-gray-600 mb-4">A secure mobile banking application with budgeting tools, investment tracking, and financial insights.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">React Native</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">Node.js</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">Plaid API</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="project-finwise.php" class="text-blue-600 font-semibold hover:text-blue-800 transition flex items-center">
                                    View Details <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="fab fa-google-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 1 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="ecommerce" id="three">
                        <div class="h-48 bg-gradient-to-r from-purple-500 to-pink-600 relative">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                <span class="text-white text-xl font-bold">Artisan Market</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">Artisan Market E-commerce</h3>
                            <p class="text-gray-600 mb-4">An online marketplace connecting local artisans with buyers worldwide, featuring secure payments and inventory management.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-purple-100 text-purple-600 text-sm rounded-full">Vue.js</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-600 text-sm rounded-full">Laravel</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-600 text-sm rounded-full">Stripe</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="project-artisan-market.php" class="text-blue-600 font-semibold hover:text-blue-800 transition flex items-center">
                                    View Details <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 1 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="ui-ux" id="next">
                        <div class="h-48 bg-gradient-to-r from-pink-500 to-rose-600 relative">
                            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                                <span class="text-white text-xl font-bold">StyleGuide Pro</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2 text-gray-800">StyleGuide Pro Design System</h3>
                            <p class="text-gray-600 mb-4">A comprehensive design system and component library for enterprise applications with accessibility compliance.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-pink-100 text-pink-600 text-sm rounded-full">Figma</span>
                                <span class="px-3 py-1 bg-pink-100 text-pink-600 text-sm rounded-full">Design Systems</span>
                                <span class="px-3 py-1 bg-pink-100 text-pink-600 text-sm rounded-full">WCAG 2.1</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="project-styleguide.php" class="text-blue-600 font-semibold hover:text-blue-800 transition flex items-center">
                                    View Details <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    
                <!-- Add all other project cards similarly -->
                <!-- EcoTrack, Artisan Market, HealthTrack Pro, FinWise, LearnHub, StyleGuide Pro -->

            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12 space-x-2">
                <a href="#one" class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold">1</a>
                <a href="#two" class="px-4 py-2 bg-white border border-gray-300 text-gray-600 rounded-lg font-semibold hover:bg-gray-50">2</a>
                <a href="#three" class="px-4 py-2 bg-white border border-gray-300 text-gray-600 rounded-lg font-semibold hover:bg-gray-50">3</a>
                <a href="#next" class="px-4 py-2 bg-white border border-gray-300 text-gray-600 rounded-lg font-semibold hover:bg-gray-50">Next</a>
            </div>
        </div>
    </section>


<?php include dirname(__FILE__).'/components/Footer.php'; ?>