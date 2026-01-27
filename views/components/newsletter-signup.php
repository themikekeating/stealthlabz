<?php
/**
 * Newsletter Signup Component
 * Posts to Stealth Portal webhook
 */
?>
<div class="card bg-card border-subtle mb-4">
    <div class="card-body">
        <h5 class="text-white mb-2">Stay Updated</h5>
        <p class="small text-secondary mb-3">Get insights on AI, marketing, and growth delivered to your inbox.</p>
        <form id="newsletter-form" class="d-flex flex-column gap-2">
            <input type="email"
                   name="email"
                   class="form-control bg-tertiary border-subtle text-white"
                   placeholder="your@email.com"
                   required>
            <button type="submit" class="btn btn-outline-pink">Subscribe</button>
        </form>
        <p id="newsletter-message" class="small mt-2 mb-0" style="display: none;"></p>
    </div>
</div>

<script>
document.getElementById('newsletter-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    const form = this;
    const email = form.email.value;
    const msg = document.getElementById('newsletter-message');
    const btn = form.querySelector('button');

    btn.disabled = true;
    btn.textContent = 'Subscribing...';

    try {
        const response = await fetch('https://portal.stealthlabz.com/source/internal/f0ece97b-9673-4eff-911b-4eed1e4ba1dd', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: email, source: 'blog_sidebar' })
        });

        msg.style.display = 'block';
        if (response.ok) {
            msg.className = 'small mt-2 mb-0 text-accent-green';
            msg.textContent = 'Subscribed!';
            form.reset();
        } else {
            msg.className = 'small mt-2 mb-0 text-danger';
            msg.textContent = 'Something went wrong. Try again.';
        }
    } catch (err) {
        msg.style.display = 'block';
        msg.className = 'small mt-2 mb-0 text-danger';
        msg.textContent = 'Connection error. Try again.';
    }

    btn.disabled = false;
    btn.textContent = 'Subscribe';
});
</script>
