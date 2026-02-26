<?php include 'includes/head.php'; ?>

<?php
// Formspree: substitua SEU_FORM_ID pelo ID do formulário que você cria em formspree.io
$formspreeId = 'mwvnwwbn';
$redirectUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . '?success=1';
?>

<main>
    <!-- Contato Hero -->
    <section class="sobre-hero">
        <div class="container">
            <!-- Breadcrumb -->
            <nav class="breadcrumb__nav" aria-label="Breadcrumb">
                <ol class="breadcrumb__list">
                    <li class="breadcrumb__item">
                        <a href="./" class="breadcrumb__link">Home</a>
                    </li>
                    <li class="breadcrumb__item breadcrumb__item--active" aria-current="page">
                        Contact
                    </li>
                </ol>
            </nav>
            
            <div class="sobre-hero__content">
                <div class="section__header">
                    <h1 class="section__title">Contact <span class="section__title--golden">Us</span></h1>
                    <div class="section__divider"></div>
                    <p class="section__subtitle">Get in touch for a free consultation and quote on your construction project</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section class="contato-form">
        <div class="container">
            <div class="contato-form__content">
                <div class="contato-form__info">
                    <h2 class="contato-form__title">Get in Touch</h2>
                    <p class="contato-form__text">
                        Fill out the form and our team will contact you as soon as possible. You can also reach us directly using the contact information below.
                    </p>
                    
                    <div class="contato-form__contacts">
                        <div class="contato-form__contact-item">
                            <a href="tel:+18436021986" class="contato-form__contact-icon contato-form__contact-icon--link" aria-label="Call us">
                                <i class="fas fa-phone"></i>
                            </a>
                            <div class="contato-form__contact-info">
                                <h3 class="contato-form__contact-title">Phone</h3>
                                <a href="tel:+18436021986" class="contato-form__contact-link">+1 (843) 602-1986</a>
                            </div>
                        </div>
                        
                        <div class="contato-form__contact-item">
                            <a href="#contactForm" class="contato-form__contact-icon contato-form__contact-icon--link" aria-label="Go to contact form">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <div class="contato-form__contact-info">
                                <h3 class="contato-form__contact-title">Email</h3>
                                <a href="mailto:maltaconstruction9@gmail.com" class="contato-form__contact-link">maltaconstruction9@gmail.com</a>
                            </div>
                        </div>
                        
                        <div class="contato-form__contact-item">
                            <a href="https://www.facebook.com/share/1BitXzcxXe/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="contato-form__contact-icon contato-form__contact-icon--link" aria-label="Visit our Facebook page">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <div class="contato-form__contact-info">
                                <h3 class="contato-form__contact-title">Facebook</h3>
                                <a href="https://www.facebook.com/share/1BitXzcxXe/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="contato-form__contact-link">Visit Our Page</a>
                            </div>
                        </div>
                        
                        <div class="contato-form__contact-item">
                            <div class="contato-form__contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contato-form__contact-info">
                                <h3 class="contato-form__contact-title">Service Area</h3>
                                <p class="contato-form__contact-text">Serving clients nationwide</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contato-form__form-wrapper">
                    <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                    <div class="contato-form__success" role="alert">
                        <i class="fas fa-check-circle"></i>
                        <p>Thank you for your inquiry! We will contact you soon.</p>
                    </div>
                    <?php endif; ?>
                    <form class="contato-form__form" id="contactForm" action="https://formspree.io/f/<?php echo htmlspecialchars($formspreeId); ?>" method="POST">
                        <input type="hidden" name="_next" value="<?php echo htmlspecialchars($redirectUrl); ?>">
                        <input type="hidden" name="_subject" value="Malta Construction - New Contact Form Submission">
                        <div class="contato-form__field">
                            <label for="nome" class="contato-form__label">Full Name *</label>
                            <input type="text" id="nome" name="nome" class="contato-form__input" required>
                        </div>
                        
                        <div class="contato-form__field">
                            <label for="email" class="contato-form__label">Email *</label>
                            <input type="email" id="email" name="email" class="contato-form__input" required>
                        </div>
                        
                        <div class="contato-form__field">
                            <label for="telefone" class="contato-form__label">Phone *</label>
                            <input type="tel" id="telefone" name="telefone" class="contato-form__input" required>
                        </div>
                        
                        <div class="contato-form__field">
                            <label for="assunto" class="contato-form__label">Service Type *</label>
                            <select id="assunto" name="assunto" class="contato-form__select" required>
                                <option value="">Select a service</option>
                                <option value="residential">Residential Construction</option>
                                <option value="commercial">Commercial Construction</option>
                                <option value="renovation">Renovation & Remodeling</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="contato-form__field">
                            <label for="mensagem" class="contato-form__label">Message *</label>
                            <textarea id="mensagem" name="mensagem" class="contato-form__textarea" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn--primary contato-form__submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contato">
        <div class="container">
            <div class="cta-section__content">
                <h2 class="cta-section__title">Ready to Start Your Project?</h2>
                <p class="cta-section__text">
                    Contact us today for a free consultation and quote. Let's bring your construction vision to life.
                </p>
                <div class="cta-section__buttons">
                    <a href="contact" class="btn btn--primary">Get a Quote</a>
                    <a href="tel:+18436021986" class="btn btn--secondary">Call Us Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Frequently Asked <span class="section__title--golden">Questions</span></h2>
                <div class="section__divider"></div>
                <p class="section__subtitle">Find quick and reliable answers to common questions about our construction services</p>
            </div>
            
            <div class="faq-section__list">
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">How quickly can you start a construction project?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            Project start times vary based on scope, permits, and current workload. After our initial consultation and contract signing, we typically begin within 2-4 weeks. We'll provide a detailed timeline during your consultation.
                        </p>
                    </div>
                </div>
                
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">What is included in a free consultation?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            Our free consultation includes a site visit, discussion of your project goals, preliminary assessment, timeline estimates, and a detailed quote. We'll answer all your questions and provide professional recommendations.
                        </p>
                    </div>
                </div>
                
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">Do you provide written estimates?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            Yes, we provide detailed written estimates that break down all costs including materials, labor, permits, and any additional fees. Our estimates are transparent with no hidden costs.
                        </p>
                    </div>
                </div>
                
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">What payment methods do you accept?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            We accept various payment methods including cash, checks, and bank transfers. Payment schedules are typically structured with an initial deposit and progress payments throughout the project. Terms will be detailed in your contract.
                        </p>
                    </div>
                </div>
                
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text">How do I get started with my project?</h3>
                        <span class="faq-section__icon">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text">
                            Getting started is easy! Simply contact us through our form, phone, or email. We'll schedule a free consultation to discuss your project, answer questions, and provide a detailed quote. Once you approve, we'll begin planning and scheduling.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

</body>
</html>

