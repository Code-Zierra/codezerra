
<?php include dirname(__FILE__).'/components/Header.php'; ?>
    <!-- Project Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <nav class="flex items-center space-x-2 text-pink-200 mb-4">
                    <a href="projects.php" class="hover:text-white transition">Projects</a>
                    <span class="text-pink-300">/</span>
                    <span class="text-white">StyleGuide Pro Design System</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">StyleGuide Pro Design System</h1>
                <p class="text-xl mb-6">A comprehensive design system and component library for enterprise applications with accessibility compliance.</p>
                <div class="flex flex-wrap gap-4">
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">UI/UX Design</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Design System</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Figma</span>
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
                        StyleGuide Pro is an enterprise-grade design system that provides comprehensive guidelines, 
                        reusable components, and design principles for creating consistent, accessible, and beautiful 
                        digital experiences across multiple platforms and devices.
                    </p>
                    <p class="text-gray-600 mb-8">
                        The system includes detailed documentation, code components, design assets, and accessibility 
                        guidelines that ensure brand consistency and development efficiency across large organizations.
                    </p>
                    <div class="flex items-center space-x-6">
                        <div>
                            <div class="text-2xl font-bold text-pink-600">7 months</div>
                            <div class="text-gray-500">Development Time</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-pink-600">200+</div>
                            <div class="text-gray-500">Components</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-pink-600">WCAG 2.1 AA</div>
                            <div class="text-gray-500">Compliance</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Key Achievements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-pink-200"></i>
                            <span>40% reduction in design and development time for new features</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-pink-200"></i>
                            <span>Full WCAG 2.1 AA compliance across all components</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-pink-200"></i>
                            <span>Seamless integration with React, Vue, and Angular frameworks</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-pink-200"></i>
                            <span>Adopted by 15+ enterprise teams across the organization</span>
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
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive design system components and guidelines</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-palette text-pink-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Design Tokens</h3>
                    <p class="text-gray-600">Centralized design tokens for colors, typography, spacing, and elevation with platform-specific implementations.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-puzzle-piece text-pink-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Component Library</h3>
                    <p class="text-gray-600">200+ reusable UI components with variants, states, and accessibility features for consistent implementation.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-universal-access text-pink-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Accessibility</h3>
                    <p class="text-gray-600">Comprehensive accessibility guidelines, audit tools, and WCAG 2.1 AA compliant components for inclusive design.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Design Tools & Technologies</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Professional design tools and development technologies</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-figma text-purple-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Figma</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-react text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">React</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-vuejs text-green-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Vue.js</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-angular text-red-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Angular</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-book text-orange-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Storybook</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-code text-gray-600 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">TypeScript</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-pink-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Need Design System Solutions?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss how we can create a comprehensive design system for your organization.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-pink-600 px-8 py-3 rounded-lg font-semibold hover:bg-pink-50 transition">Start Your Project</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-pink-600 transition">View More Projects</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__).'/components/Footer.php'; ?>