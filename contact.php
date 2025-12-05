<?php include dirname(__FILE__).'/components/Header.php'; ?>

    <!-- Page Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Get In Touch</h1>
            <p class="text-xl max-w-2xl mx-auto">Ready to start your next project? Let's discuss how we can help bring your ideas to life.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Contact Information -->
                <div class="lg:col-span-1">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Let's Start a Conversation</h2>
                    <p class="text-gray-600 mb-8">
                        We're here to answer any questions you may have about our services or discuss your next project. 
                        Reach out to us and we'll respond as soon as we can.
                    </p>
                    
                    <!-- Contact Methods -->
                    <div class="space-y-6">
                        <div class="contact-card bg-blue-50 p-6 rounded-xl">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-1 text-gray-800">Our Office</h3>
                                    <p class="text-gray-600">123 Innovation Drive<br>Tech Valley, CA 94025<br>United States</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-card bg-blue-50 p-6 rounded-xl">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-1 text-gray-800">Phone</h3>
                                    <p class="text-gray-600">+1 (555) 123-4567<br>Mon-Fri from 9am to 6pm</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-card bg-blue-50 p-6 rounded-xl">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-1 text-gray-800">Email</h3>
                                    <p class="text-gray-600">hello@codezerra.com<br>We'll respond within 24 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/profile.php?id=61584673917368/" class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 hover:bg-blue-600 hover:text-white transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/code-zerra/" class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 hover:bg-blue-600 hover:text-white transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/Code-Zierra/" class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 hover:bg-blue-600 hover:text-white transition">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-600 hover:bg-blue-600 hover:text-white transition">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Send us a Message</h3>
                        <form id="contactForm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="name" class="block text-gray-700 mb-2">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="John Doe">
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="john@example.com">
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <label for="company" class="block text-gray-700 mb-2">Company (Optional)</label>
                                <input type="text" id="company" name="company" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="Your Company Name">
                            </div>
                            
                            <div class="mb-6">
                                <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="What is this regarding?">
                            </div>
                            
                            <div class="mb-6">
                                <label for="service" class="block text-gray-700 mb-2">Service Interested In</label>
                                <select id="service" name="service" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition">
                                    <option value="">Select a service</option>
                                    <option value="web-dev">Web Development</option>
                                    <option value="mobile-apps">Mobile Apps</option>
                                    <option value="cloud-solutions">Cloud Solutions</option>
                                    <option value="ui-ux">UI/UX Design</option>
                                    <option value="consulting">Consulting</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 mb-2">Your Message</label>
                                <textarea id="message" name="message" rows="6" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition" placeholder="Tell us about your project..."></textarea>
                            </div>
                            
                            <div class="flex items-center mb-6">
                                <input type="checkbox" id="consent" name="consent" class="w-4 h-4 text-blue-600 rounded focus:ring-blue-500">
                                <label for="consent" class="ml-2 text-gray-700">I agree to the <a href="#" class="text-blue-600 hover:underline">privacy policy</a> and consent to being contacted by Code Zerra.</label>
                            </div>
                            
                            <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition flex items-center justify-center">
                                <span>Send Message</span>
                                <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-0">
        <div class="map-container bg-gray-200 h-96 w-full">
            <!-- This would typically be a Google Maps embed -->
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-blue-400 to-blue-600">
                <div class="text-center text-white">
                    <i class="fas fa-map-marked-alt text-4xl mb-4"></i>
                    <h3 class="text-xl font-bold">Our Location</h3>
                    <p class="mt-2">123 Innovation Drive, Tech Valley, CA</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Quick answers to common questions about working with us</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <button class="faq-toggle w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold text-gray-800">How long does a typical project take?</h3>
                            <i class="fas fa-chevron-down text-blue-600"></i>
                        </button>
                        <div class="faq-content mt-4 text-gray-600 hidden">
                            <p>Project timelines vary depending on complexity and scope. A simple website might take 4-6 weeks, while a complex web application could take 3-6 months. During our initial consultation, we'll provide a detailed timeline based on your specific requirements.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <button class="faq-toggle w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold text-gray-800">What is your pricing structure?</h3>
                            <i class="fas fa-chevron-down text-blue-600"></i>
                        </button>
                        <div class="faq-content mt-4 text-gray-600 hidden">
                            <p>We offer both fixed-price projects for well-defined scopes and time-and-materials pricing for more flexible engagements. After understanding your project requirements, we'll provide a detailed proposal with transparent pricing.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <button class="faq-toggle w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold text-gray-800">Do you provide ongoing support after project completion?</h3>
                            <i class="fas fa-chevron-down text-blue-600"></i>
                        </button>
                        <div class="faq-content mt-4 text-gray-600 hidden">
                            <p>Yes, we offer various support and maintenance packages to ensure your digital product continues to perform optimally. These include security updates, performance monitoring, and feature enhancements.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <button class="faq-toggle w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold text-gray-800">What technologies do you work with?</h3>
                            <i class="fas fa-chevron-down text-blue-600"></i>
                        </button>
                        <div class="faq-content mt-4 text-gray-600 hidden">
                            <p>We work with a wide range of modern technologies including React, Vue.js, Angular, Node.js, Python, .NET, Flutter, React Native, and various cloud platforms like AWS, Azure, and Google Cloud. We choose the best technology stack for each project's specific needs.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <button class="faq-toggle w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold text-gray-800">Can you work with our existing team?</h3>
                            <i class="fas fa-chevron-down text-blue-600"></i>
                        </button>
                        <div class="faq-content mt-4 text-gray-600 hidden">
                            <p>Absolutely! We frequently collaborate with in-house teams, providing specialized expertise where needed. We're experienced at integrating with existing workflows and communication tools.</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-8">
                    <p class="text-gray-600">Still have questions? <a href="#" class="text-blue-600 font-semibold hover:underline">Contact us directly</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Project?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss your ideas and create something amazing together.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">Get In Touch</a>
                <a href="./projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">View Our Work</a>
            </div>
        </div>
    </section>
    <script src="./server/middleware/validate.js"></script>
<?php include dirname(__FILE__).'/components/Footer.php'; ?>