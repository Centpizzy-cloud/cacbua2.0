# CACBUA 2.0 Production Migration Runbook

Status: prepared only. **Do not execute without written launch authorization.**

## Preconditions

- Approved launch window, named technical owner, hosting access, WordPress administrator access, and a tested rollback owner.
- Polylang Free downloaded from the official WordPress.org repository and tested in staging.
- English content approved; only reviewed translations marked `APPROVED` may be published.
- Redirect map signed off, forms tested, and no unresolved critical/high security findings.
- Backup storage must be outside the public web root and encrypted in transit/at rest.

## Chronological procedure

1. **Pre-launch backup** - record time, production commit/version, WordPress/core/plugin/theme versions, PHP version, and DNS/CDN/cache settings. Export the complete database. Archive all WordPress files, including `wp-content`, themes, plugins, MU-plugins, uploads, `wp-config.php`, `.htaccess`, and accessible server configuration. Export redirects, current robots output, sitemap URLs, and response headers. Generate checksums and test that the database dump opens and both archives list successfully.
2. **Maintenance strategy** - announce the maintenance window. Prefer a brief read-only/content freeze over a hard outage. If maintenance mode is required, return HTTP 503 with `Retry-After`; do not serve an indexable maintenance page as 200.
3. **File deployment** - deploy the reviewed CACBUA package to a versioned release directory or take a recoverable file snapshot first. Never upload local databases, logs, archives, `.env`, or development files. Preserve production uploads and environment-specific configuration.
4. **MU-plugin deployment** - deploy `cacbua-site` and its loader together. Confirm `cacbua-site.php`, templates, components, CSS, JS, and approved assets are readable. Keep the previous MU-plugin directory as a protected rollback artifact outside the web root.
5. **Database changes** - import only reviewed configuration/content changes. Do not overwrite users, production submissions, or uploads blindly. Use serialized-data-safe tools for URL replacements. Record every command and row-affecting operation.
6. **Multilingual configuration** - install the approved multilingual plugin from its official source; register the production license; set English as default; add French (`fr_FR`), Portuguese (`pt_PT`), and Arabic (`ar`); use directories; hide the English directory; enable front-page language handling; confirm Arabic is RTL. Do not publish empty language records.
7. **URL verification** - confirm `/`, `/fr/`, `/pt/`, `/ar/` behavior and all eleven page families. Missing/unapproved translations must not return indexable English content under a translated URL.
8. **Redirect activation** - implement only approved rows from `SEO-REDIRECT-MAP.md` as one-hop 301s. Keep unrelated missing content as 404/410. Test source, destination, query strings, loops, and chains.
9. **Production robots activation** - ensure `robots.txt` allows crawling of public content and references the production multilingual sitemap index. Do not copy preview `Disallow: /` rules.
10. **Remove noindex** - confirm WordPress “Discourage search engines” is off, SEO-plugin settings are production-ready, and no server/CDN/security layer emits `X-Robots-Tag: noindex`. Remove only the identified launch control.
11. **Clear caches** - purge WordPress, LiteSpeed/server, CDN, object, browser/service-worker, and translated-language caches. Warm each public language separately.
12. **Permalink flush** - save production permalink settings once or run the equivalent controlled WP-CLI rewrite flush. Do not flush on every request.
13. **Sitemap verification** - check sitemap index and language-specific entries; confirm only canonical, 200, indexable, approved translations appear.
14. **Hreflang verification** - on every translated set, confirm reciprocal `en`, `fr`, `pt`, `ar`, and `x-default` entries. Never point hreflang to redirects, errors, or untranslated pages.
15. **Schema verification** - validate one example of each used type: Organization, WebSite, WebPage/AboutPage/ProfilePage/CollectionPage, Article, BreadcrumbList, and Person. Confirm `inLanguage`, URL, name, breadcrumbs, and publisher relationships; eliminate duplicates from competing plugins.
16. **Form verification** - submit test inquiries in each published language. Verify labels, validation, success messages, routing, sender/recipient configuration, spam protection, privacy consent, email delivery, and record retention. Remove test submissions afterward where policy allows.
17. **Responsive smoke test** - test 1440, 1200, 900, 768, and 390 widths. Cover header, mobile navigation, switcher, homepage, About, Founder, Research, Publication 001, News, Cooperation, Opportunities, Events, Resources, Contact, 404, images, buttons, forms, and Arabic RTL.
18. **Search Console** - verify the HTTPS domain property, submit the sitemap index, inspect representative English and translated URLs, request indexing only for approved pages, and review Page Indexing and International Targeting signals.
19. **Analytics** - verify consent behavior, page views, form conversions, outbound contact actions, language dimension, cross-language navigation, and exclusion of internal/test traffic. Ensure no duplicate tags.
20. **Post-launch monitoring** - monitor 5xx/4xx rates, redirect loops, PHP logs, form delivery, uptime, cache behavior, Core Web Vitals, Search Console coverage, sitemap processing, and hreflang errors at launch, +1 hour, +24 hours, +72 hours, +7 days, and +30 days.

## Required launch evidence

- Backup paths, checksums, and restore-test result.
- Deployed source/MU-plugin version identifiers.
- Approved redirect file and test output.
- Header/meta/robots/sitemap/hreflang/schema checks.
- Form test references and responsive QA record.
- Named go/no-go approver and rollback owner.
