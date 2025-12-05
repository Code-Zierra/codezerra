<?php include dirname(__FILE__).'/components/Header.php'; ?>

    <!-- Page Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <nav class="flex items-center space-x-2 text-green-200 mb-4">
                    <a href="services.php" class="hover:text-white transition">Services</a>
                    <span class="text-green-300">/</span>
                    <span class="text-white">Mobile Apps</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Mobile App Development</h1>
                <p class="text-xl mb-6">Native and cross-platform mobile applications that deliver exceptional user experiences on iOS and Android.</p>
                <a href="contact.php" class="bg-white text-green-600 px-6 py-3 rounded-lg font-semibold hover:bg-green-50 transition inline-flex items-center">
                    Start Your Project <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Engage Users on Their Favorite Devices</h2>
                    <p class="text-gray-600 mb-6">
                        With over 6.8 billion smartphone users worldwide, mobile apps have become essential for business growth 
                        and customer engagement. We create mobile experiences that users love and businesses rely on.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our mobile development team specializes in creating intuitive, high-performance applications 
                        that work seamlessly across iOS and Android platforms, delivering native-like experiences 
                        with optimized development cycles.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-green-50 px-4 py-2 rounded-lg">
                            <span class="text-green-600 font-semibold">✓ Cross-Platform</span>
                        </div>
                        <div class="bg-green-50 px-4 py-2 rounded-lg">
                            <span class="text-green-600 font-semibold">✓ Native Performance</span>
                        </div>
                        <div class="bg-green-50 px-4 py-2 rounded-lg">
                            <span class="text-green-600 font-semibold">✓ App Store Ready</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Why Choose Our Mobile Development?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>Expertise in both native and cross-platform development</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>Focus on user experience and interface design</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>App Store optimization and deployment assistance</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>Ongoing maintenance and updates</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-green-200"></i>
                            <span>Proven track record of successful app launches</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Platforms -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Development Platforms</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We offer flexible development approaches to match your project requirements and budget</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Platform 1 -->
                <div class="platform-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fab fa-apple text-gray-800 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">iOS Development</h3>
                    <p class="text-gray-600 mb-6">Native iOS applications built with Swift and SwiftUI for optimal performance on Apple devices.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Swift & SwiftUI</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Apple Human Interface Guidelines</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>App Store Deployment</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>iPhone & iPad Optimization</span>
                        </li>
                    </ul>
                    <div class="text-green-600 font-semibold">Best for performance-critical applications</div>
                </div>

                <!-- Platform 2 -->
                <div class="platform-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fab fa-android text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Android Development</h3>
                    <p class="text-gray-600 mb-6">Native Android applications using Kotlin and Jetpack Compose for diverse Android devices.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Kotlin & Jetpack Compose</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Material Design Principles</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Google Play Deployment</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Device Fragmentation Handling</span>
                        </li>
                    </ul>
                    <div class="text-green-600 font-semibold">Best for reaching the widest audience</div>
                </div>

                <!-- Platform 3 -->
                <div class="platform-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-mobile-alt text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Cross-Platform</h3>
                    <p class="text-gray-600 mb-6">Single codebase applications using React Native and Flutter for faster development and deployment.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>React Native & Flutter</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Single Codebase</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Faster Development</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Cost-Effective Solution</span>
                        </li>
                    </ul>
                    <div class="text-green-600 font-semibold">Best for budget and time efficiency</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Features -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Mobile App Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">End-to-end mobile app development solutions for various business needs</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shopping-bag text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">E-commerce Apps</h3>
                    <p class="text-gray-600 mb-4">Feature-rich shopping applications with secure payments, product catalogs, and order management.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Payment Integration</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Inventory Management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Push Notifications</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 2 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Social & Community</h3>
                    <p class="text-gray-600 mb-4">Engaging social platforms with user profiles, feeds, messaging, and content sharing.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Real-time Chat</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Content Sharing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>User Engagement</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 3 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Business & Productivity</h3>
                    <p class="text-gray-600 mb-4">Tools that streamline business processes, improve efficiency, and enhance productivity.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Workflow Automation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Data Synchronization</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Reporting & Analytics</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 4 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-gamepad text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Entertainment & Gaming</h3>
                    <p class="text-gray-600 mb-4">Immersive entertainment experiences and engaging mobile games with rich graphics.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>High-Performance Graphics</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>In-App Purchases</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Multiplayer Support</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 5 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-heartbeat text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Health & Fitness</h3>
                    <p class="text-gray-600 mb-4">Wellness applications that track health metrics, provide workouts, and promote healthy habits.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Health Data Integration</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Workout Tracking</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Progress Analytics</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 6 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-tools text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">App Maintenance</h3>
                    <p class="text-gray-600 mb-4">Ongoing support, updates, and optimization to keep your app performing at its best.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>OS Updates</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Bug Fixes</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Performance Monitoring</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Mobile Technology Stack</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We leverage modern technologies to build robust and scalable mobile applications</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <!-- Tech 1 -->
                <div class="tech-stack-item bg-white p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-swift text-orange-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Swift</span>
                </div>

                <!-- Tech 2 -->
                <div class="tech-stack-item bg-white p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-green-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-android text-green-600 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Kotlin</span>
                </div>

                <!-- Tech 3 -->
                <div class="tech-stack-item bg-white p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-react text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">React Native</span>
                </div>

                <!-- Tech 4 -->
                <div class="tech-stack-item bg-white p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-flutter text-blue-600 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Flutter</span>
                </div>

                <!-- Tech 5 -->
                <div class="tech-stack-item bg-white p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-red-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-fire text-red-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Firebase</span>
                </div>

                <!-- Tech 6 -->
                <div class="tech-stack-item bg-white p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-purple-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-database text-purple-600 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Realm</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Mobile App Development Process</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A comprehensive approach to delivering successful mobile applications</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <div class="process-step text-center">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Concept & Strategy</h3>
                    <p class="text-gray-600 text-sm">We define your app's purpose, target audience, and business objectives.</p>
                </div>
                <div class="process-step text-center">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-pencil-alt text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">UI/UX Design</h3>
                    <p class="text-gray-600 text-sm">We create intuitive user interfaces and engaging user experiences.</p>
                </div>
                <div class="process-step text-center">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Development</h3>
                    <p class="text-gray-600 text-sm">We build your app using the most suitable technology stack.</p>
                </div>
                <div class="process-step text-center">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-vial text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Testing & QA</h3>
                    <p class="text-gray-600 text-sm">We conduct thorough testing across devices and platforms.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Deployment</h3>
                    <p class="text-gray-600 text-sm">We publish your app to app stores and provide ongoing support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-green-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Build Your Mobile App?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss your mobile app idea and create an engaging experience for your users.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-green-50 transition">Start Your Project</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition">View Mobile Projects</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__) . '/components/Footer.php'; ?>