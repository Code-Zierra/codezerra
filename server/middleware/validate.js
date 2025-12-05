// Client-side form validation for Code Zerra contact forms
class FormValidator {
    constructor() {
        this.errors = {};
    }

    // Validate email format
    validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Validate required fields
    validateRequired(value, fieldName) {
        if (!value || value.trim() === '') {
            this.errors[fieldName] = `${fieldName} is required`;
            return false;
        }
        return true;
    }

    // Validate contact form
    validateContactForm(formData) {
        this.errors = {};

        // Name validation
        this.validateRequired(formData.name, 'Name');
        if (formData.name && formData.name.length > 100) {
            this.errors.name = 'Name must be less than 100 characters';
        }

        // Email validation
        this.validateRequired(formData.email, 'Email');
        if (formData.email && !this.validateEmail(formData.email)) {
            this.errors.email = 'Please enter a valid email address';
        }
        if (formData.email && formData.email.length > 100) {
            this.errors.email = 'Email must be less than 100 characters';
        }

        // Subject validation
        this.validateRequired(formData.subject, 'Subject');
        if (formData.subject && formData.subject.length > 200) {
            this.errors.subject = 'Subject must be less than 200 characters';
        }

        // Message validation
        this.validateRequired(formData.message, 'Message');
        if (formData.message && formData.message.length > 2000) {
            this.errors.message = 'Message must be less than 2000 characters';
        }

        // Company validation (optional)
        if (formData.company && formData.company.length > 100) {
            this.errors.company = 'Company name must be less than 100 characters';
        }

        // Consent validation
        if (!formData.consent) {
            this.errors.consent = 'You must agree to the privacy policy';
        }

        return Object.keys(this.errors).length === 0;
    }

    // Display errors in form
    displayErrors(formElement) {
        // Clear previous errors
        const existingErrors = formElement.querySelectorAll('.error-message');
        existingErrors.forEach(error => error.remove());

        const existingErrorFields = formElement.querySelectorAll('.error-field');
        existingErrorFields.forEach(field => field.classList.remove('error-field'));

        // Display new errors
        Object.keys(this.errors).forEach(fieldName => {
            const field = formElement.querySelector(`[name="${fieldName}"]`);
            if (field) {
                field.classList.add('error-field');
                
                const errorElement = document.createElement('div');
                errorElement.className = 'error-message text-red-500 text-sm mt-1';
                errorElement.textContent = this.errors[fieldName];
                
                // Insert after the field
                field.parentNode.appendChild(errorElement);
            } else if (fieldName === 'consent') {
                // Special handling for consent checkbox
                const consentGroup = formElement.querySelector('.consent-group');
                if (consentGroup) {
                    const errorElement = document.createElement('div');
                    errorElement.className = 'error-message text-red-500 text-sm mt-1';
                    errorElement.textContent = this.errors.consent;
                    consentGroup.appendChild(errorElement);
                }
            }
        });
    }
}

// Initialize form validation when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    const validator = new FormValidator();
    
    // FAQ Toggle Functionality
    const faqToggles = document.querySelectorAll('.faq-toggle');
    faqToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    
                    // Toggle content visibility
                    content.classList.toggle('hidden');
                    
                    // Rotate icon
                    if (content.classList.contains('hidden')) {
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });

    // Contact form validation
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                name: document.getElementById('name')?.value || '',
                email: document.getElementById('email')?.value || '',
                company: document.getElementById('company')?.value || '',
                subject: document.getElementById('subject')?.value || '',
                service: document.getElementById('service')?.value || '',
                message: document.getElementById('message')?.value || '',
                consent: document.getElementById('consent')?.checked || false
            };

            console.log('Form data to submit:', formData);

            if (validator.validateContactForm(formData)) {
                submitContactForm(formData);
            } else {
                validator.displayErrors(contactForm);
            }
        });
    }

    // AJAX form submission function
    function submitContactForm(formData) {
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Sending...';
        submitBtn.disabled = true;

        // Show loading state
        showMessage('info', 'Sending your message...');

        // Compute endpoint relative to this script file so it works whether the site is
        // served at the webroot or under a subpath (vhost vs /codezerra.io/)
        let endpoint;
        try {
            // Try to locate the <script> element that loaded this file
            const scriptEl = document.currentScript || Array.from(document.getElementsByTagName('script')).find(s => s.src && (s.src.includes('/middleware/validate.js') || s.src.endsWith('validate.js')));
            if (scriptEl && scriptEl.src) {
                const scriptUrl = new URL(scriptEl.src, window.location.href);
                // Replace /middleware/validate.js with /model/contact.php
                endpoint = scriptUrl.origin + scriptUrl.pathname.replace(/\/middleware\/validate\.js$/, '/model/contact.php');
            } else {
                // Fallback to origin + standard path
                endpoint = `${window.location.origin}/server/model/contact.php`;
            }
        } catch (err) {
            console.warn('Could not derive endpoint from script src, falling back to origin path', err);
            endpoint = `${window.location.origin}/server/model/contact.php`;
        }

        fetch(endpoint, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                action: 'contact',
                ...formData
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Server response:', data);
            if (data.success) {
                showMessage('success', data.message);
                contactForm.reset();
            } else {
                showMessage('error', data.message || 'Sorry, there was an error sending your message.');
                // Display server-side validation errors
                if (data.errors) {
                    Object.keys(data.errors).forEach(fieldName => {
                        const field = contactForm.querySelector(`[name="${fieldName}"]`);
                        if (field) {
                            field.classList.add('error-field');
                            const errorElement = document.createElement('div');
                            errorElement.className = 'error-message text-red-500 text-sm mt-1';
                            errorElement.textContent = data.errors[fieldName];
                            field.parentNode.appendChild(errorElement);
                        }
                    });
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showMessage('error', 'Network error: Unable to send message. Please try again later.');
        })
        .finally(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
    }

    function showMessage(type, message) {
        // Remove existing messages
        const existingMessages = document.querySelectorAll('.form-message');
        existingMessages.forEach(msg => msg.remove());

        // Create new message
        const messageDiv = document.createElement('div');
        messageDiv.className = `form-message p-4 rounded-lg mb-4 ${
            type === 'success' ? 'bg-green-100 text-green-700 border border-green-300' : 
            type === 'error' ? 'bg-red-100 text-red-700 border border-red-300' :
            'bg-blue-100 text-blue-700 border border-blue-300'
        }`;
        messageDiv.innerHTML = `
            <div class="flex items-center">
                <i class="fas fa-${
                    type === 'success' ? 'check-circle' : 
                    type === 'error' ? 'exclamation-triangle' : 
                    'info-circle'
                } mr-2"></i>
                <span>${message}</span>
            </div>
        `;

        // Insert message at the top of the form
        if (contactForm) {
            contactForm.insertBefore(messageDiv, contactForm.firstChild);
            
            // Auto-remove success messages after 5 seconds
            if (type === 'success') {
                setTimeout(() => {
                    messageDiv.remove();
                }, 5000);
            }
        }
    }
});

// Add CSS for error states
const style = document.createElement('style');
style.textContent = `
    .error-field {
        border-color: #ef4444 !important;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1) !important;
    }
    .error-message {
        color: #ef4444;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }
`;
document.head.appendChild(style);