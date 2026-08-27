// CACBUA redesign — minimal vanilla JS, no build step, no dependencies.

(function () {
	'use strict';

	// Mobile nav open/close
	var openBtn = document.querySelector('[data-menu-open]');
	var closeBtn = document.querySelector('[data-menu-close]');
	var mobileNav = document.getElementById('mobile-nav');

	if (openBtn && closeBtn && mobileNav) {
		openBtn.addEventListener('click', function () {
			mobileNav.hidden = false;
			openBtn.setAttribute('aria-expanded', 'true');
			document.body.style.overflow = 'hidden';
		});
		closeBtn.addEventListener('click', function () {
			mobileNav.hidden = true;
			openBtn.setAttribute('aria-expanded', 'false');
			document.body.style.overflow = '';
		});
		mobileNav.addEventListener('click', function (e) {
			if (e.target.tagName === 'A') {
				mobileNav.hidden = true;
				openBtn.setAttribute('aria-expanded', 'false');
				document.body.style.overflow = '';
			}
		});
	}

	// Newsletter signup — intentionally NOT wired to any delivery system yet.
	// See docs/content-status.md: "China–Africa Business Brief" is
	// CLIENT APPROVAL REQUIRED for the actual sending tool/provider.
	var newsletterForm = document.querySelector('[data-newsletter-form]');
	if (newsletterForm) {
		newsletterForm.addEventListener('submit', function (e) {
			e.preventDefault();
			var note = newsletterForm.querySelector('[data-newsletter-feedback]');
			if (note) {
				note.textContent = 'Thanks — signup isn\'t live yet. This is a design preview pending CACBUA\'s decision on a newsletter provider.';
			}
		});
	}
})();
