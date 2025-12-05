<?php include dirname(__FILE__).'/components/Header.php'; ?>

    <!-- Page Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Projects</h1>
            <p class="text-xl max-w-2xl mx-auto">Explore our portfolio of innovative digital solutions across various industries and technologies</p>
        </div>
    </section>

    <!-- Projects Filter -->
    <section class="py-8 bg-white border-b">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-btn active px-4 py-2 rounded-full bg-blue-100 text-blue-600 font-medium transition" data-filter="all">All Projects</button>
                <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-600 font-medium hover:bg-gray-200 transition" data-filter="web-apps">Web Apps</button>
                <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-600 font-medium hover:bg-gray-200 transition" data-filter="mobile-apps">Mobile Apps</button>
                <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-600 font-medium hover:bg-gray-200 transition" data-filter="ecommerce">E-commerce</button>
                <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-600 font-medium hover:bg-gray-200 transition" data-filter="ui-ux">UI/UX Design</button>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Web Apps Projects -->
            <div class="project-category active fade-in" data-category="web-apps">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Web Applications</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Custom web applications built with modern technologies for optimal performance and user experience</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="web-apps">
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
                                <a href="./project-nexus.php" class="text-blue-600 font-semibold hover:text-blue-800 transition flex items-center">
                                    View Details <i class="fas fa-arrow-right ml-1 text-sm"></i>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="web-apps">
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
                </div>
            </div>

            <!-- Mobile Apps Projects -->
            <div class="project-category" data-category="mobile-apps">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 mt-3">Mobile Applications</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Native and cross-platform mobile apps that deliver exceptional user experiences on iOS and Android</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
                </div>
            </div>

            <!-- E-commerce Projects -->
            <div class="project-category" data-category="ecommerce">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 mt-3">E-commerce Solutions</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Complete online stores with secure payment processing, inventory management, and customer analytics</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="ecommerce">
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
                </div>
            </div>

            <!-- UI/UX Design Projects -->
            <div class="project-category" data-category="ui-ux">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4 mt-3">UI/UX Design</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Beautiful, intuitive user interfaces and engaging user experiences that drive conversion and user satisfaction</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div class="project-card bg-white rounded-xl shadow-lg overflow-hidden" data-categories="ui-ux">
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
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <a href="./all-projects.php" class="bg-white border border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition inline-flex items-center">
                View All Projects <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                    <div class="text-gray-600">Projects Completed</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">35+</div>
                    <div class="text-gray-600">Happy Clients</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">15+</div>
                    <div class="text-gray-600">Industries Served</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600 mb-2">98%</div>
                    <div class="text-gray-600">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Client Testimonials</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">See what our clients have to say about working with us</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 font-bold">JS</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">John Smith</h4>
                            <p class="text-gray-500 text-sm">CEO, Nexus Platforms</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Code Zerra delivered beyond our expectations. Their technical expertise and attention to detail made our platform a success."</p>
                    <div class="flex text-yellow-400 mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 font-bold">SR</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-500 text-sm">Product Manager, EcoTrack</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"The team at Code Zerra understood our vision perfectly and created an app that our users love. Highly recommended!"</p>
                    <div class="flex text-yellow-400 mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 font-bold">MD</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Michael Davis</h4>
                            <p class="text-gray-500 text-sm">CTO, HealthTrack Pro</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Their ability to handle complex healthcare data and create an intuitive dashboard was impressive. Great partnership!"</p>
                    <div class="flex text-yellow-400 mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Have a Project in Mind?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss your next project and how we can bring your ideas to life with our expertise.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">Start a Project</a>
                <a href="services.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">Our Services</a>
            </div>
        </div>
    </section>
    <script>
        // Dynamic Filtering Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCategories = document.querySelectorAll('.project-category');
            const allProjectCards = document.querySelectorAll('.project-card');
            
            // Show all projects initially
            showCategory('all');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-blue-100', 'text-blue-600');
                        btn.classList.add('bg-gray-100', 'text-gray-600');
                    });
                    
                    // Add active class to clicked button
                    this.classList.remove('bg-gray-100', 'text-gray-600');
                    this.classList.add('active', 'bg-blue-100', 'text-blue-600');
                    
                    // Show selected category
                    showCategory(filter);
                });
            });
            
            function showCategory(category) {
                // Hide all categories
                projectCategories.forEach(cat => {
                    cat.classList.remove('active', 'fade-in');
                    cat.style.display = 'none';
                });
                
                if (category === 'all') {
                    // Show all categories
                    projectCategories.forEach(cat => {
                        cat.style.display = 'block';
                        setTimeout(() => {
                            cat.classList.add('active', 'fade-in');
                        }, 50);
                    });
                } else {
                    // Show specific category
                    const targetCategory = document.querySelector(`.project-category[data-category="${category}"]`);
                    if (targetCategory) {
                        targetCategory.style.display = 'block';
                        setTimeout(() => {
                            targetCategory.classList.add('active', 'fade-in');
                        }, 50);
                    }
                }
            }
            
            // Add animation to project cards on hover
            allProjectCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                    this.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)';
                });
            });
        });
    </script>
    

<?php include dirname(__FILE__).'/components/Footer.php'; ?>