<?php include dirname(__FILE__).'/components/Header.php'; ?>

    <!-- Page Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <nav class="flex items-center space-x-2 text-purple-200 mb-4">
                    <a href="services.php" class="hover:text-white transition">Services</a>
                    <span class="text-purple-300">/</span>
                    <span class="text-white">Cloud Solutions</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Cloud Solutions & Infrastructure</h1>
                <p class="text-xl mb-6">Scalable, secure, and reliable cloud infrastructure to power your digital transformation and business growth.</p>
                <a href="contact.php" class="bg-white text-purple-600 px-6 py-3 rounded-lg font-semibold hover:bg-purple-50 transition inline-flex items-center">
                    Start Your Cloud Journey <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Accelerate Your Business with Cloud Power</h2>
                    <p class="text-gray-600 mb-6">
                        Cloud computing has revolutionized how businesses operate, offering unprecedented scalability, 
                        flexibility, and cost-efficiency. We help organizations harness the full potential of cloud 
                        technologies to drive innovation and growth.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Our cloud experts design, implement, and manage robust cloud infrastructures that ensure 
                        high availability, security, and performance for your applications and services.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-purple-50 px-4 py-2 rounded-lg">
                            <span class="text-purple-600 font-semibold">✓ Scalable Infrastructure</span>
                        </div>
                        <div class="bg-purple-50 px-4 py-2 rounded-lg">
                            <span class="text-purple-600 font-semibold">✓ Cost Optimization</span>
                        </div>
                        <div class="bg-purple-50 px-4 py-2 rounded-lg">
                            <span class="text-purple-600 font-semibold">✓ Enterprise Security</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Why Choose Our Cloud Solutions?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Multi-cloud expertise across AWS, Azure, and Google Cloud</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Proven methodologies for cloud migration and optimization</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Focus on security, compliance, and cost management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>24/7 monitoring and proactive maintenance</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Expert guidance on cloud strategy and architecture</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Cloud Providers -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Cloud Partners</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We work with leading cloud providers to deliver the best solutions for your business needs</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Provider 1 -->
                <div class="cloud-provider-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fab fa-aws text-orange-500 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Amazon Web Services</h3>
                    <p class="text-gray-600 mb-6">Comprehensive cloud services with global infrastructure and extensive service catalog.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>EC2 & Lambda Compute</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>S3 & RDS Storage</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>VPC Networking</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>IAM Security</span>
                        </li>
                    </ul>
                    <div class="text-purple-600 font-semibold">Best for enterprise-scale applications</div>
                </div>

                <!-- Provider 2 -->
                <div class="cloud-provider-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fab fa-microsoft text-blue-500 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Microsoft Azure</h3>
                    <p class="text-gray-600 mb-6">Hybrid cloud solutions with strong enterprise integration and Microsoft ecosystem.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Azure Virtual Machines</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Azure SQL Database</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Azure Active Directory</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Azure DevOps</span>
                        </li>
                    </ul>
                    <div class="text-purple-600 font-semibold">Best for Microsoft ecosystem integration</div>
                </div>

                <!-- Provider 3 -->
                <div class="cloud-provider-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fab fa-google text-blue-500 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Google Cloud Platform</h3>
                    <p class="text-gray-600 mb-6">Data-driven cloud services with advanced AI/ML capabilities and global network.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Compute Engine & GKE</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Cloud Storage & BigQuery</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>AI & Machine Learning</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Firebase Integration</span>
                        </li>
                    </ul>
                    <div class="text-purple-600 font-semibold">Best for data analytics and AI/ML</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Features -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Cloud Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive cloud solutions to support your digital transformation journey</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cloud-upload-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Cloud Migration</h3>
                    <p class="text-gray-600 mb-4">Seamless migration of applications and data from on-premises to cloud infrastructure.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Assessment & Planning</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Data Migration</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Application Refactoring</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 2 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-network-wired text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Cloud Architecture</h3>
                    <p class="text-gray-600 mb-4">Design and implementation of scalable, secure, and cost-effective cloud architectures.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Microservices Design</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Serverless Architecture</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>High Availability Setup</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 3 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Cloud Security</h3>
                    <p class="text-gray-600 mb-4">Comprehensive security measures to protect your cloud infrastructure and data.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Identity & Access Management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Network Security</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Compliance & Governance</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 4 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-tachometer-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">DevOps & CI/CD</h3>
                    <p class="text-gray-600 mb-4">Automated deployment pipelines and infrastructure as code for efficient development.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Infrastructure as Code</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Continuous Deployment</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Container Orchestration</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 5 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-database text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Data & Analytics</h3>
                    <p class="text-gray-600 mb-4">Cloud-based data solutions for storage, processing, and advanced analytics.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Data Warehousing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Big Data Processing</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Business Intelligence</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 6 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-hands-helping text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Managed Services</h3>
                    <p class="text-gray-600 mb-4">24/7 monitoring, maintenance, and optimization of your cloud environment.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Performance Monitoring</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Cost Optimization</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Disaster Recovery</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Architecture Example -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Sample Cloud Architecture</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A typical high-availability cloud infrastructure we design for our clients</p>
            </div>
            <div class="architecture-diagram rounded-2xl p-8 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <!-- Web Tier -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-globe text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Web Tier</h3>
                        <p class="text-sm text-gray-600">Load Balancers<br>Content Delivery<br>Web Servers</p>
                    </div>
                    
                    <!-- Application Tier -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-server text-green-600"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Application Tier</h3>
                        <p class="text-sm text-gray-600">Microservices<br>Containers<br>Serverless Functions</p>
                    </div>
                    
                    <!-- Data Tier -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-database text-purple-600"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Data Tier</h3>
                        <p class="text-sm text-gray-600">Databases<br>Caching<br>Data Warehouses</p>
                    </div>
                </div>
                
                <div class="text-center mt-8">
                    <div class="inline-flex items-center space-x-2 bg-white px-4 py-2 rounded-lg shadow-sm">
                        <i class="fas fa-shield-alt text-green-500"></i>
                        <span class="text-sm text-gray-700">Security & Monitoring Across All Layers</span>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Our cloud architectures are designed for scalability, security, and cost-efficiency, 
                    incorporating best practices from years of experience across multiple industries.
                </p>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Cloud Technology Stack</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We leverage modern cloud technologies and tools to build robust solutions</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <!-- Tech 1 -->
                <div class="tech-stack-item bg-gray-50 p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-orange-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-docker text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Docker</span>
                </div>

                <!-- Tech 2 -->
                <div class="tech-stack-item bg-gray-50 p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-kubernetes text-blue-600 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Kubernetes</span>
                </div>

                <!-- Tech 3 -->
                <div class="tech-stack-item bg-gray-50 p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-yellow-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-linux text-black text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Terraform</span>
                </div>

                <!-- Tech 4 -->
                <div class="tech-stack-item bg-gray-50 p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-red-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-jenkins text-red-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Jenkins</span>
                </div>

                <!-- Tech 5 -->
                <div class="tech-stack-item bg-gray-50 p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fab fa-git-alt text-orange-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">GitLab CI</span>
                </div>

                <!-- Tech 6 -->
                <div class="tech-stack-item bg-gray-50 p-6 rounded-xl text-center shadow-sm">
                    <div class="w-16 h-16 bg-green-50 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-code-branch text-green-600 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Ansible</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Cloud Implementation Process</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A structured approach to successful cloud adoption and optimization</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="process-step text-center">
                    <div class="w-20 h-20 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Assessment & Strategy</h3>
                    <p class="text-gray-600">We analyze your current infrastructure and define a cloud strategy aligned with your business goals.</p>
                </div>
                <div class="process-step text-center">
                    <div class="w-20 h-20 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Architecture Design</h3>
                    <p class="text-gray-600">We design a scalable, secure cloud architecture tailored to your specific requirements.</p>
                </div>
                <div class="process-step text-center">
                    <div class="w-20 h-20 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Implementation & Migration</h3>
                    <p class="text-gray-600">We implement the cloud infrastructure and migrate your applications with minimal downtime.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Optimization & Support</h3>
                    <p class="text-gray-600">We continuously monitor, optimize, and support your cloud environment for peak performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-purple-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Infrastructure?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss your cloud strategy and build a scalable foundation for your business growth.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-purple-50 transition">Start Your Cloud Journey</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-purple-600 transition">View Cloud Projects</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__).'/components/Footer.php'; ?>