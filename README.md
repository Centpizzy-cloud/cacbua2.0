# CACBUA 2.0 — Digital Platform Rebuild

Internal working name for the CACBUA website redesign and rebuild. The public organization name remains **CACBUA**. This is a separate, standalone project and does not touch `cacbua.org`, its database, `cacbua-current-snapshot`, or any other baseline files.

## What this is

Plain PHP templates, no framework, no build step, no database, no npm dependency tree. Every file is something you can open directly in VS Code and read top to bottom. It's built this way on purpose: the eventual destination is WordPress, via the same `mu-plugin` pattern already live in production (`wp-content/mu-plugins/cacbua-site/`), which also renders hand-written PHP template functions rather than using a page builder or custom post types. Building the prototype the same way means "integrating it into WordPress" later is closer to a copy than a rewrite.

## How to run it

You need PHP installed locally (no WordPress, no MySQL, nothing else).

```
cd cacbua-redesign
php -S localhost:8000
```

Then open **http://localhost:8000/** in a browser.

## What's built vs. what's a placeholder

**Built:** the full homepage plus About, Leadership, Research, Publication 001, Cooperation, Opportunities, News & Insights, Events, Resources, Contact, and the shared responsive header/footer.

**Not real yet:** the newsletter signup doesn't send anywhere (there's no provider set up); the 中文 toggle and search icon are visually present but non-functional. All of this is intentional and logged in `docs/content-status.md`, not an oversight.

## File layout

```
cacbua-redesign/
├── index.php                    — entry point, serves the homepage
├── about.php, research.php, …   — interior page entry points
├── templates/
│   ├── partials/
│   │   ├── head.php             — <head>, page <title>, CSS link
│   │   ├── header.php           — nav + mobile menu markup
│   │   └── footer.php           — footer + closing </body></html>
│   ├── sections/                — one file per homepage section (10 total)
│   └── pages/
│       ├── home.php             — assembles the homepage from the 10 sections
│       └── stub.php             — generic renderer for the interior placeholders
├── content/
│   ├── trade-monitor-stats.php  — the 4 Trade Monitor figures, as a plain array
│   └── opportunities-data.php   — the 6 Opportunities cards, as a plain array
├── assets/
│   ├── css/site.css             — design tokens + every component style
│   ├── js/site.js               — mobile menu + newsletter-form intercept (vanilla JS, no deps)
│   └── images/
│       ├── approved/            — images actually in use, sorted by section
│       └── reference-only/      — reserved for future license-cleared candidates not yet downloaded
└── docs/
    ├── content-status.md        — governance label for every section
    └── image-sources.md         — full attribution register for every image
```

## Updating content later

To change a Trade Monitor figure or an Opportunities card, edit the plain PHP array in `content/trade-monitor-stats.php` or `content/opportunities-data.php` — the templates just loop over whatever's there. No other file needs to change.

## Path back into WordPress (when approved)

When a section is signed off, its `templates/sections/*.php` file is very close to becoming (or replacing) the matching function in the live mu-plugin's `templates/interior-pages.php` / `homepage.php` — same PHP-function-per-section pattern, same CSS token names. The main translation work is wiring WordPress's own URLs (`home_url()`, etc.) in place of this project's plain relative links, and moving images into WordPress's media library / the mu-plugin's `assets/images/` folder with the same filenames used here.

## Known limitation this session

The photography research (see the investigation report) identified 10 fully license-cleared stock photos (Unsplash/Pexels). They could not actually be downloaded into this project — the sandbox this was built in has no general outbound internet access for binary files. Four of the six Opportunities cards use a plain gradient placeholder instead of an unlicensed photo as a result. See `docs/image-sources.md` for the exact candidates and how to add them once downloaded manually.
