<?php include dirname(__FILE__).'/components/Header.php'; ?>

    <!-- Project Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <nav class="flex items-center space-x-2 text-blue-200 mb-4">
                    <a href="projects.html" class="hover:text-white transition">Projects</a>
                    <span class="text-blue-300">/</span>
                    <span class="text-white">FinWise Mobile Banking</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">FinWise Mobile Banking</h1>
                <p class="text-xl mb-6">A secure mobile banking application with budgeting tools, investment tracking, and financial insights.</p>
                <div class="flex flex-wrap gap-4">
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Mobile Banking</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">FinTech</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">React Native</span>
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
                        FinWise is a next-generation mobile banking application that combines traditional banking services 
                        with advanced financial planning tools. The app empowers users to take control of their finances 
                        with intelligent budgeting, investment tracking, and personalized financial advice.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Built with React Native for cross-platform performance, FinWise delivers bank-grade security 
                        while providing an intuitive and engaging user experience across iOS and Android devices.
                    </p>
                    <div class="flex items-center space-x-6">
                        <div>
                            <div class="text-2xl font-bold text-blue-600">8 months</div>
                            <div class="text-gray-500">Development Time</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-blue-600">150,000+</div>
                            <div class="text-gray-500">Active Users</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-blue-600">$2.5B</div>
                            <div class="text-gray-500">Assets Managed</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Key Achievements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-blue-200"></i>
                            <span>Zero security incidents with military-grade encryption</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-blue-200"></i>
                            <span>Average 25% improvement in user savings rates</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-blue-200"></i>
                            <span>4.9★ rating across both app stores</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-blue-200"></i>
                            <span>Integration with 50+ financial institutions</span>
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
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive financial management and banking tools</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-wallet text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Smart Budgeting</h3>
                    <p class="text-gray-600">AI-powered budgeting tools that analyze spending patterns and provide personalized savings recommendations.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Investment Tracking</h3>
                    <p class="text-gray-600">Real-time portfolio tracking with performance analytics, market insights, and investment recommendations.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Bank-Grade Security</h3>
                    <p class="text-gray-600">Multi-layer security with biometric authentication, encryption, and real-time fraud detection systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Technology Stack</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Secure financial technologies powering FinWise</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-react text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">React Native</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-node-js text-green-600 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Node.js</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-database text-green-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">MongoDB</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-aws text-orange-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">AWS</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-fingerprint text-purple-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Biometrics</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-robot text-blue-400 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">AI Analytics</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Need FinTech Solutions?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss how we can build secure, compliant financial technology for your business.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">Start Your Project</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">View More Projects</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__).'/components/Footer.php'; ?>