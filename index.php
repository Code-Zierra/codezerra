<?php include dirname(__FILE__).'/components/Header.php'; ?>

<!-- Hero Section with padding for fixed header -->
    <section class="hero-bg text-white pt-24 pb-20 mt-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Code Zerra</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Passion ignites creativity</p>
            <div class="flex justify-center space-x-4">
                <a href="contact.php">
                    <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300 transform hover:-translate-y-1">
                    Get Started
                   </button>
                </a>
                <a href="services.php">
                    <button class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-1">
                    Learn More
                   </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Code Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Approach</h2>
                <div class="code-display p-6 rounded-lg mb-8">
                    <div class="flex text-gray-400 text-sm mb-4">
                        <div class="mr-4">1</div>
                        <div class="mr-4">2</div>
                        <div class="mr-4">3</div>
                        <div class="mr-4">4</div>
                        <div class="mr-4">5</div>
                        <div class="mr-4">6</div>
                    </div>
                    <pre class="text-green-400 font-mono overflow-x-auto">
<span class="text-blue-400">if</span> (<span class="text-yellow-300">code</span>) {
    <span class="text-purple-400">return</span> <span class="text-yellow-300">Zerra</span>;
} <span class="text-blue-400">else</span> {
    <span class="text-purple-400">return</span> <span class="text-gray-500">null</span>;
}</pre>
                </div>
                <p class="text-gray-600 text-center max-w-2xl mx-auto">
                    At Code Zerra, we believe in writing clean, efficient code that solves real-world problems. 
                    Our passion for technology drives our creativity to build innovative solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-lg">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-laptop-code text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Web Development</h3>
                    <p class="text-gray-600">Custom web applications built with modern technologies and best practices.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-lg">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-mobile-alt text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mobile Apps</h3>
                    <p class="text-gray-600">Cross-platform mobile applications for iOS and Android devices.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-2 hover:shadow-lg">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-cloud text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Cloud Solutions</h3>
                    <p class="text-gray-600">Scalable cloud infrastructure and deployment solutions for your applications.</p>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="services.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 transform hover:-translate-y-1 inline-block">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Project?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's work together to bring your ideas to life with innovative solutions.</p>
            <a href="contact.php">
              <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300 transform hover:-translate-y-1">
                Contact Us Today
              </button>
            </a>
        </div>
    </section>
<?php include dirname(__FILE__).'/components/Footer.php'; ?>