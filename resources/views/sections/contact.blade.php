<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Let's discuss opportunities and collaborations</p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Email</h3>
                        <p>khianeaquino054@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Phone</h3>
                        <p>+63 999 999 9999</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Location</h3>
                        <p>Padada, Davao Del Sur, Philippines</p>
                    </div>
                </div>
                <div class="social-links">
                    <a href="https://github.com/yumiiie" class="social-link" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/khianeaquino04" class="social-link" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/imkhianeaquino/" class="social-link" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="mailto:khianeaquino054@gmail.com" class="social-link" target="_blank">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
            <form name="contact" method="POST" action="/contact">
                @csrf
                <input type="hidden" name="form-name" value="contact" />
                <p style="display:none">
                    <label>Don't fill this out if you're human: <input name="bot-field" /></label>
                </p>
                <div class="form-group">
                    <input type="text" id="name" name="name" required>
                    <label for="name">Your Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Your Email</label>
                </div>
                <div class="form-group">
                    <input type="text" id="subject" name="subject" required>
                    <label for="subject">Subject</label>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" rows="5" required></textarea>
                    <label for="message">Your Message</label>
                </div>
                <button type="submit" class="btn btn-primary">
                    <span class="btn-text">Send Message</span>
                </button>
            </form>
        </div>
    </div>
</section>

