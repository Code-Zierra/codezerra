
<?php include dirname(__FILE__).'/components/Header.php'; ?>
    <!-- Project Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <nav class="flex items-center space-x-2 text-purple-200 mb-4">
                    <a href="projects.php" class="hover:text-white transition">Projects</a>
                    <span class="text-purple-300">/</span>
                    <span class="text-white">LearnHub Education Platform</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">LearnHub Education Platform</h1>
                <p class="text-xl mb-6">An interactive online learning platform with video courses, quizzes, and progress tracking for students and educators.</p>
                <div class="flex flex-wrap gap-4">
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">EdTech</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Learning Platform</span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-lg">Next.js</span>
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
                        LearnHub is a comprehensive online learning platform that brings together students, educators, 
                        and educational institutions in a collaborative digital environment. The platform supports 
                        various learning formats including video courses, interactive quizzes, and live virtual classrooms.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Built with Next.js and GraphQL, LearnHub offers lightning-fast performance, seamless content delivery, 
                        and scalable architecture to support millions of learners worldwide.
                    </p>
                    <div class="flex items-center space-x-6">
                        <div>
                            <div class="text-2xl font-bold text-purple-600">10 months</div>
                            <div class="text-gray-500">Development Time</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-purple-600">500,000+</div>
                            <div class="text-gray-500">Registered Learners</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-purple-600">15,000+</div>
                            <div class="text-gray-500">Courses Available</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Key Achievements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>95% course completion rate with gamified learning</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Support for 50+ languages with AI-powered translation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>98% uptime with global CDN distribution</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-purple-200"></i>
                            <span>Integration with 100+ educational tools and LMS systems</span>
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
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive educational tools for modern learning experiences</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-video text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Video Learning</h3>
                    <p class="text-gray-600">High-quality video streaming with interactive transcripts, playback controls, and note-taking capabilities.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-tasks text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Interactive Quizzes</h3>
                    <p class="text-gray-600">Adaptive assessment system with various question types, instant feedback, and progress tracking.</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-users text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Virtual Classroom</h3>
                    <p class="text-gray-600">Live interactive sessions with whiteboard, screen sharing, breakout rooms, and real-time collaboration.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Technology Stack</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Modern educational technologies powering LearnHub</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fab fa-react text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">Next.js</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-project-diagram text-pink-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">GraphQL</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-database text-blue-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">PostgreSQL</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-video text-red-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">WebRTC</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-cloud text-blue-400 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">AWS</span>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 shadow-sm">
                        <i class="fas fa-robot text-orange-500 text-2xl"></i>
                    </div>
                    <span class="font-medium text-gray-700">AI Analytics</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-purple-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Need EdTech Solutions?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss how we can build innovative educational technology for your institution.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-purple-50 transition">Start Your Project</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-purple-600 transition">View More Projects</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__).'/components/Footer.php'; ?>