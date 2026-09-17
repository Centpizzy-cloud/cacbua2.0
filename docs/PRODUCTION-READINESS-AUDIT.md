# CACBUA 2.0 Production Readiness Audit

Audit date: 16 September 2026. No production changes were made.

## Current conclusion

**NOT READY FOR SERVER MIGRATION.** The English redesign and migration documentation are advancing, but the multilingual plugin decision requires authorization, translated content is not approved, local browser QA is blocked because the Local site is not running, and production backup/restore access has not been demonstrated.

## Multilingual status

- Recommended solution: Polylang Free. No multilingual subscription is planned.
- Languages: English source; French, Portuguese, and Arabic configured in architecture only. No fabricated translations were published.
- URL decision: default English at root; `/fr/`, `/pt/`, `/ar/`; stable interior slugs initially.
- MU-plugin: compatibility adapter, accessible switcher, unavailable-language state, language body classes, and conditional RTL stylesheet implemented locally.
- Arabic: RTL code foundation exists; visual QA has not run.
- SEO: production plan covers self-canonicals, reciprocal hreflang, `x-default`, translated metadata/OG/breadcrumbs/schema, and multilingual sitemaps. Final output depends on the selected plugin and approved translations.

## Local WordPress findings

- Custom functionality is concentrated in `wp-content/mu-plugins/cacbua-site` and contains substantial English template content.
- The local web server was not reachable during this audit, so responsive and browser-level integration tests are pending.
- A pre-existing Publication 001 parse/runtime risk caused by smart quotes in PHP/HTML attributes was corrected locally; PHP lint now passes.
- `WP_DEBUG` is false and `WP_ENVIRONMENT_TYPE` is `local` in the inspected configuration.
- No Polylang/WPML/TranslatePress installation was found. No paid plugin was installed.

## Live indexing investigation

At the audit time, `https://cacbua.org/` returned HTTP 200 without an `X-Robots-Tag` header. Its HTML contained `robots: index, follow`, and `robots.txt` allowed crawling and referenced `https://cacbua.org/sitemap_index.xml` through Yoast.

Therefore the previously observed `X-Robots-Tag: noindex, follow` is **not currently reproducible**. It may have come from an earlier WordPress setting, plugin/server/cache rule, or a cached response. Production access and historical configuration are required to identify its former source. Do not remove any header blindly. Recheck origin and uncached responses immediately before launch.

## Security and migration checks

- Source `.gitignore` excludes SQL, `wp-config.php`, logs, archives, `.env`, editor files, and OS metadata.
- No tracked sensitive/archive filenames were detected in the redesign tree.
- No SQL, log, ZIP, `.env`, or `wp-config.php` file was found inside the custom MU-plugin directory.
- Production plugin/core versions, users, permissions, vulnerability status, backups, database integrity, server configuration, and restore ability remain unverified without production access.
- Do not commit credentials or copy the local `wp-config.php` into a migration package.

## Remaining gates

1. Install and configure Polylang Free in the final WordPress staging environment.
2. Start Local and complete EN plus RTL responsive/browser QA.
3. Create and human-review FR/PT/AR translations before publication.
4. Confirm forms, privacy text, recipient routing, analytics, and consent requirements.
5. Verify production WordPress/core/plugin versions, accounts, permissions, vulnerabilities, and backups.
6. Approve redirects still marked `REVIEW REQUIRED`.
7. Perform a staging restore rehearsal and record evidence.
8. Recheck production headers, robots, sitemap, cache, canonical, and noindex controls immediately before launch.
