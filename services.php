<?php include dirname(__FILE__).'/components/Header.php'; ?>

    <!-- Page Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Services</h1>
            <p class="text-xl max-w-2xl mx-auto">Comprehensive digital solutions to bring your ideas to life</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-laptop-code text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Web Development</h3>
                    <p class="text-gray-600 mb-6">Custom web applications built with modern technologies and best practices for optimal performance and user experience.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Responsive Design</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Progressive Web Apps</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>E-commerce Solutions</span>
                        </li>
                    </ul>
                    <a href="./web.php" class="text-blue-600 font-semibold hover:text-blue-800 transition">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Mobile Apps</h3>
                    <p class="text-gray-600 mb-6">Cross-platform mobile applications for iOS and Android devices with native performance and intuitive interfaces.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>iOS & Android Development</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>React Native & Flutter</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>App Store Deployment</span>
                        </li>
                    </ul>
                    <a href="./mobile.php" class="text-blue-600 font-semibold hover:text-blue-800 transition">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cloud text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Cloud Solutions</h3>
                    <p class="text-gray-600 mb-6">Scalable cloud infrastructure and deployment solutions to ensure your applications run smoothly and efficiently.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>AWS & Azure Deployment</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>DevOps & CI/CD</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Scalable Architecture</span>
                        </li>
                    </ul>
                    <a href="./cloud.php" class="text-blue-600 font-semibold hover:text-blue-800 transition">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-palette text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">UI/UX Design</h3>
                    <p class="text-gray-600 mb-6">User-centered design solutions that create engaging, intuitive, and beautiful digital experiences for your customers.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>User Research & Testing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Wireframing & Prototyping</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Design Systems</span>
                        </li>
                    </ul>
                    <a href="./uxui.php" class="text-blue-600 font-semibold hover:text-blue-800 transition">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <!-- Service 5 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Digital Strategy</h3>
                    <p class="text-gray-600 mb-6">Comprehensive digital strategy consulting to help you navigate the technology landscape and achieve your business goals.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Technology Consulting</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Digital Transformation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Product Roadmapping</span>
                        </li>
                    </ul>
                    <a href="./digital-strategy.php" class="text-blue-600 font-semibold hover:text-blue-800 transition">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
                </div>

                <!-- Service 6 -->
                <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-tools text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Maintenance & Support</h3>
                    <p class="text-gray-600 mb-6">Ongoing maintenance, updates, and support services to keep your digital products running smoothly and securely.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>24/7 Monitoring</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Security Updates</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Performance Optimization</span>
                        </li>
                    </ul>
                    <a href="./maintenance-support.php" class="text-blue-600 font-semibold hover:text-blue-800 transition">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Development Process</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We follow a structured approach to ensure quality and efficiency in every project we undertake.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Discovery</h3>
                    <p class="text-gray-600">We begin by understanding your goals, audience, and requirements.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Design</h3>
                    <p class="text-gray-600">We create wireframes and prototypes to visualize the solution.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Development</h3>
                    <p class="text-gray-600">We build your solution using the latest technologies and best practices.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Delivery</h3>
                    <p class="text-gray-600">We deploy, test, and provide ongoing support for your solution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Get Started?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss your project and how we can help bring your ideas to life.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="./contact.php" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">Contact Us</a>
                <a href="./projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">View Our Work</a>
            </div>
        </div>
    </section>
<?php include dirname(__FILE__).'/components/Footer.php'; ?>