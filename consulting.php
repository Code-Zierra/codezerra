<?php include dirname(__FILE__).'/components/Header.php'; ?>
    <!-- Page Header -->
    <section class="hero-bg text-white py-16 pt-24 mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <nav class="flex items-center space-x-2 text-red-200 mb-4">
                    <a href="services.php" class="hover:text-white transition">Services</a>
                    <span class="text-red-300">/</span>
                    <span class="text-white">Consulting</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Technology Consulting</h1>
                <p class="text-xl mb-6">Strategic technology guidance to help you make informed decisions, optimize processes, and drive digital transformation.</p>
                <a href="contact.php" class="bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-50 transition inline-flex items-center">
                    Schedule Consultation <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Navigate Technology with Confidence</h2>
                    <p class="text-gray-600 mb-6">
                        In today's rapidly evolving digital landscape, making the right technology decisions can be challenging. 
                        Our consulting services provide the expert guidance you need to align technology with business objectives, 
                        mitigate risks, and maximize returns on your technology investments.
                    </p>
                    <p class="text-gray-600 mb-8">
                        With years of experience across multiple industries and technology stacks, we offer unbiased advice 
                        and practical solutions that drive real business value and competitive advantage.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-red-50 px-4 py-2 rounded-lg">
                            <span class="text-red-600 font-semibold">✓ Strategic Planning</span>
                        </div>
                        <div class="bg-red-50 px-4 py-2 rounded-lg">
                            <span class="text-red-600 font-semibold">✓ Technology Assessment</span>
                        </div>
                        <div class="bg-red-50 px-4 py-2 rounded-lg">
                            <span class="text-red-600 font-semibold">✓ Implementation Guidance</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-red-500 to-orange-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Why Choose Our Consulting Services?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>Deep expertise across multiple technology domains and industries</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>Practical, actionable recommendations tailored to your business</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>Focus on ROI and measurable business outcomes</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>Vendor-neutral advice based on your specific needs</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3 text-red-200"></i>
                            <span>Ongoing support and guidance throughout implementation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Consulting Approaches -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Consulting Approaches</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Flexible engagement models to meet your specific consulting needs</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Approach 1 -->
                <div class="consulting-approach-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Strategy & Planning</h3>
                    <p class="text-gray-600 mb-6">High-level technology strategy and digital transformation roadmaps.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Technology Roadmapping</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Digital Transformation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>IT Governance</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Business-IT Alignment</span>
                        </li>
                    </ul>
                    <div class="text-red-600 font-semibold">Best for executive leadership</div>
                </div>

                <!-- Approach 2 -->
                <div class="consulting-approach-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-cogs text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Technical Assessment</h3>
                    <p class="text-gray-600 mb-6">In-depth analysis of your current technology stack and architecture.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Architecture Review</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Code Quality Assessment</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Performance Analysis</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Security Audit</span>
                        </li>
                    </ul>
                    <div class="text-red-600 font-semibold">Best for technical teams</div>
                </div>

                <!-- Approach 3 -->
                <div class="consulting-approach-card bg-white p-8 rounded-xl shadow-md text-center">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-rocket text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Implementation Guidance</h3>
                    <p class="text-gray-600 mb-6">Hands-on guidance during technology implementation and adoption.</p>
                    <ul class="space-y-2 text-gray-600 text-left mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Technology Selection</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Implementation Planning</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Team Mentoring</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Best Practices</span>
                        </li>
                    </ul>
                    <div class="text-red-600 font-semibold">Best for project teams</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Features -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Consulting Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive consulting solutions to address your technology challenges</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-road text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Technology Strategy</h3>
                    <p class="text-gray-600 mb-4">Comprehensive technology roadmaps aligned with your business objectives and growth plans.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Digital Transformation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>IT Governance</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Innovation Strategy</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 2 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-search text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Technical Due Diligence</h3>
                    <p class="text-gray-600 mb-4">Comprehensive assessment of technology stacks for mergers, acquisitions, and investments.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Code Quality Analysis</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Architecture Assessment</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Technical Debt Evaluation</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 3 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cloud text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Cloud Adoption</h3>
                    <p class="text-gray-600 mb-4">Strategic guidance for cloud migration, architecture, and optimization across platforms.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Cloud Strategy</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Migration Planning</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Cost Optimization</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 4 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Security & Compliance</h3>
                    <p class="text-gray-600 mb-4">Comprehensive security assessments and compliance guidance for regulatory requirements.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Security Architecture</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Compliance Assessment</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Risk Management</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 5 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-users-cog text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">DevOps & Agile Transformation</h3>
                    <p class="text-gray-600 mb-4">Process improvement and cultural transformation for faster, more reliable software delivery.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>CI/CD Implementation</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Agile Coaching</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Process Optimization</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 6 -->
                <div class="service-feature bg-gray-50 p-8 rounded-xl shadow-md transition">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800">Digital Innovation</h3>
                    <p class="text-gray-600 mb-4">Identifying and implementing emerging technologies to create competitive advantages.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>AI/ML Strategy</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>IoT Solutions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2 text-sm"></i>
                            <span>Blockchain Applications</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Consulting Methodology</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A structured approach to delivering actionable insights and measurable results</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-white rounded-xl p-6 shadow-md mb-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Discovery & Assessment</h3>
                        <p class="text-gray-600">We begin by thoroughly understanding your business context, challenges, and objectives through stakeholder interviews and data analysis.</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-md mb-6">
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Analysis & Planning</h3>
                        <p class="text-gray-600">We analyze your current state, identify gaps and opportunities, and develop a comprehensive strategy with clear recommendations.</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Implementation Support</h3>
                        <p class="text-gray-600">We provide ongoing guidance and support during implementation, ensuring successful adoption and measurable business outcomes.</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800">Deliverables You Can Expect</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-file-alt text-red-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Comprehensive Assessment Report</h4>
                                <p class="text-gray-600 text-sm">Detailed analysis of current state with identified risks and opportunities</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-map text-red-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Strategic Roadmap</h4>
                                <p class="text-gray-600 text-sm">Phased implementation plan with timelines, resources, and milestones</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-chart-bar text-red-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">ROI Analysis</h4>
                                <p class="text-gray-600 text-sm">Financial analysis showing expected returns and cost savings</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-tasks text-red-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Implementation Plan</h4>
                                <p class="text-gray-600 text-sm">Detailed action plan with responsibilities and success metrics</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Client Success Stories</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">See how our consulting services have helped organizations achieve their technology goals</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="testimonial-card bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-red-600 font-bold">TC</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Thomas Chen</h4>
                            <p class="text-gray-500 text-sm">CTO, Financial Services</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Code Zerra's cloud migration strategy saved us 40% in infrastructure costs while improving system performance. Their expertise was invaluable."</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-card bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-red-600 font-bold">SP</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Sarah Peterson</h4>
                            <p class="text-gray-500 text-sm">VP Technology, Retail</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"The digital transformation roadmap provided clear direction and helped us prioritize initiatives that delivered the most business value."</p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-card bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-red-600 font-bold">MJ</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Michael Johnson</h4>
                            <p class="text-gray-500 text-sm">CEO, Healthcare Tech</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Their technical due diligence during our acquisition process identified critical issues that saved us from a costly mistake."</p>
                    <div class="flex text-yellow-400">
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

    <!-- Process Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Consulting Engagement Process</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">A collaborative approach to ensure successful outcomes</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="process-step text-center">
                    <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Discovery Call</h3>
                    <p class="text-gray-600">We discuss your challenges and objectives to understand how we can help.</p>
                </div>
                <div class="process-step text-center">
                    <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Proposal & Planning</h3>
                    <p class="text-gray-600">We create a customized proposal with scope, timeline, and deliverables.</p>
                </div>
                <div class="process-step text-center">
                    <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Engagement & Delivery</h3>
                    <p class="text-gray-600">We execute the consulting engagement with regular progress updates.</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Follow-up & Support</h3>
                    <p class="text-gray-600">We ensure successful implementation and provide ongoing support as needed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-red-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Technology Strategy?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss your challenges and create a strategic plan to achieve your technology goals.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="contact.php" class="bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-red-50 transition">Schedule Consultation</a>
                <a href="projects.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-600 transition">View Case Studies</a>
            </div>
        </div>
    </section>

<?php include dirname(__FILE__).'/components/Footer.php'; ?>