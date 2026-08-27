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

	// Small toast for controls that aren't built yet (site search, language
	// switch). Clicking used to do nothing at all, which reads as broken —
	// this makes clear it's a planned feature, not a bug.
	function showComingSoonToast(message) {
		var existing = document.querySelector('.coming-soon-toast');
		if (existing) { existing.remove(); }
		var toast = document.createElement('div');
		toast.className = 'coming-soon-toast';
		toast.setAttribute('role', 'status');
		toast.textContent = message;
		document.body.appendChild(toast);
		window.setTimeout(function () {
			toast.classList.add('is-hiding');
			window.setTimeout(function () { toast.remove(); }, 200);
		}, 2400);
	}

	var searchToggle = document.querySelector('.search-toggle');
	if (searchToggle) {
		searchToggle.addEventListener('click', function () {
			showComingSoonToast('Site search — coming soon.');
		});
	}

	var langLink = document.querySelector('.lang-link');
	if (langLink) {
		langLink.addEventListener('click', function (e) {
			e.preventDefault();
			showComingSoonToast('中文版 — coming soon.');
		});
	}

	// Research library search — no backend wired up yet.
	var librarySearch = document.querySelector('.library-search');
	if (librarySearch) {
		librarySearch.addEventListener('submit', function (e) {
			e.preventDefault();
			showComingSoonToast('Research search — coming soon. Browse topics below in the meantime.');
		});
	}
})();
