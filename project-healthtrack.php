<?php include dirname(__FILE__).'/components/Header.php'; ?>

    <!-- Project Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <nav class="flex items-center space-x-2 text-red-200 mb-4">
                    <a href="projects.php" class="hover:text-white transition">Projects</a>
                    <span class="text-red-300">/</span>
                    <span class="text-white">HealthTrack Pro Dashboard</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">HealthTrack Pro Dashboard</h1>
                <p class="text-xl mb-6">A healthcare analytics dashboard for medical professionals to track patient data and treatment outcomes.</p>
                <div class="flex flex-wrap gap-4">
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Healthcare</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Analytics</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Angular</span>
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
                        HealthTrack Pro is an advanced healthcare analytics platform designed for medical institutions 
                        to monitor patient health data, track treatment outcomes, and optimize healthcare delivery. 
                        The platform provides real-time insights into patient care and operational efficiency.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Built with Angular and Python, HealthTrack Pro offers HIPAA-compliant data handling, 
                        advanced visualization tools, and predictive analytics for proactive healthcare management.
                    </p>
                    <div class="flex items-center space-x-6">
                        <div>
                            <div class="text-2xl font-bold text-red-600">14 months</div>
                            <div class="text-gray-500">Development Time</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-red-600">75+</div>
                            <div class="text-gray-500">Healthcare Facilities</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-red-600">99.99%</div>
                            <div class="text-gray-500">Uptime</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-red-500 to-orange-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Key Achievements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>30% reduction in administrative workload for healthcare staff</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>Full HIPAA compliance with advanced security measures</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>Predictive analytics with 92% accuracy in patient outcomes</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>Seamless integration with 20+ medical devices and EMR systems</span>
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
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive healthcare analytics and patient management tools</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-heartbeat text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Patient Monitoring</h3>
                    <p class="text-gray-600">Real-time patient vital signs tracking with alert systems for abnormal readings and predictive health risk analysis.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-bar text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Treatment Analytics</h3>
                    <p class="text-gray-600">Advanced analytics on treatment effectiveness, patient outcomes, and healthcare facility performance metrics.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">HIPAA Compliance</h3>
                    <p class="text-gray-600">Full HIPAA compliance with encrypted data storage, access controls, and audit trails for all patient data interactions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Technology Stack</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Secure healthcare technologies powering HealthTrack Pro</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-angular text-red-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Angular</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-python text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Python</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-database text-green-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">PostgreSQL</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-chart-line text-purple-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">D3.js</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-lock text-orange-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Encryption</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-cloud text-blue-400 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Azure</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-red-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Need Healthcare Solutions?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss how we can build secure, compliant healthcare technology for your organization.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-red-50 transition">Start Your Project</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-600 transition">View More Projects</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__).'/components/Footer.php'; ?>