# CACBUA 2.0 Multilingual Implementation Plan

Status: implementation decision recorded; production deployment is not authorized.

## Decision

Use **Polylang Free** as the production multilingual layer. Build the CACBUA WordPress integration against Polylang's public functions and WordPress internationalization APIs, while failing safely in English when Polylang is unavailable.

Polylang Free is preferred because it provides a native WordPress content-per-language model, directory-based language URLs, language-aware menus, hreflang support, RTL scripts, editor-controlled translations, Yoast compatibility, and a relatively small integration surface without a subscription.

No paid multilingual plugin is planned. No machine-generated institutional translation will be published automatically.

## Options considered

| Option | Fit | Cost/licensing | Decision |
|---|---|---|---|
| Polylang Free | Unlimited languages, translated posts/pages, directory URLs, language switchers, RTL scripts, and Yoast compatibility; content stays in WordPress. | Free/open-source plugin from WordPress.org. | Recommended. |
| WPML Multilingual CMS | Comprehensive translation management, string translation, page-builder support, machine translation credits, and mature SEO support. | EUR 99/year at the time of review; machine translation beyond included credits can add usage cost. | Viable alternative, but heavier than needed for the current custom MU-plugin and more operationally complex. |
| TranslatePress | Friendly visual translation workflow and good compatibility with rendered content. | Paid tier required for multiple additional languages and multilingual SEO features. | Not preferred because the project needs structured content governance and independent editorial records rather than primarily front-end string overlays. |
| Custom translation engine | Maximum control. | High build, QA, security, migration, and maintenance cost. | Rejected. Only a thin compatibility adapter will be custom. |

## URL architecture

- English remains the source/default language and keeps existing URLs, for example `/research/`.
- French uses `/fr/`, Portuguese uses `/pt/`, and Arabic uses `/ar/`.
- Because sharing the exact same slug across translations is a Pro-only convenience, the free implementation may use approved translated slugs such as `/fr/recherche/` and `/pt/pesquisa/`. English remains `/research/`; the final Arabic slug will be selected during translation review.
- No separate domains and no query-string language URLs.
- A language page is published only when its translation is approved. Missing translations must not masquerade as translated pages.
- The language switcher should preserve the equivalent translated page. If no approved equivalent exists, that language is shown as unavailable rather than silently sending the visitor to a different page.

## Content model and workflow

1. English WordPress pages/posts are the source records.
2. Polylang relationships connect each approved translation to the source record.
3. MU-plugin interface strings use WordPress internationalization functions with the `cacbua-site` text domain.
4. Repeated structured content moves out of template markup into translation-ready data/functions or WordPress content records.
5. Translation status is tracked as: `SOURCE - ENGLISH`, `MACHINE DRAFT`, `HUMAN REVIEW REQUIRED`, `APPROVED`, `PUBLISHED`.
6. Only `APPROVED` material may become publicly accessible and indexable.

High-risk content requiring human review includes the Founder biography, mission and vision, achievements, partner descriptions, policies, Publication 001, and privacy/legal wording.

## Integration boundaries

- `cacbua-site.php` loads a multilingual compatibility component before templates.
- The component supplies current-language, direction, equivalent-URL, language-switcher, and translated-string helpers.
- When Polylang is active, helpers use Polylang APIs. Without it, the local site remains functional in English and the unapproved languages remain unavailable.
- Do not duplicate page templates by language.
- Let the multilingual plugin/SEO plugin own canonical, hreflang, Open Graph locale, and multilingual sitemap output in production; custom output must detect those plugins and avoid duplicate tags.

## Arabic and RTL

- WordPress/Polylang sets the Arabic locale and RTL state.
- Output must use `lang="ar"` and `dir="rtl"` through WordPress language attributes.
- Load a small RTL stylesheet only when `is_rtl()` or the adapter reports Arabic.
- Use logical CSS properties where practical; mirror directional arrows/icons only when they convey direction.
- Use system Arabic-capable fallbacks (`Tahoma`, `Arial`, sans-serif); do not redistribute proprietary fonts.

## SEO and indexing

- Every published translation self-canonicalizes.
- Hreflang is emitted only among published equivalents, plus `x-default` pointing to English.
- Metadata, breadcrumbs, schema `inLanguage`, and Open Graph locale must match the page language.
- Unapproved or absent translations produce no indexable language URL and do not enter the sitemap.
- Local, preview, and staging environments remain `noindex`.

## Implementation sequence

1. Add the compatibility layer and translation-ready helpers to the MU-plugin.
2. Replace the current Chinese-only header link with accessible EN/FR/PT/AR switchers in desktop and mobile navigation.
3. Internationalize shared navigation, footer, buttons, forms, validation text, breadcrumbs, and reusable datasets.
4. Add conditional RTL styling and test all supported templates.
5. Install/configure Polylang Free locally from WordPress.org; do not create public translations yet.
6. Create language records and test pages using explicitly labelled QA-only text.
7. Configure multilingual SEO integration and validate canonical/hreflang/schema/sitemaps.
8. Migrate only after backup, security, redirect, and rollback checks pass.

## Current blockers

- Polylang Free is selected but has not yet been installed in the final WordPress migration environment.
- Approved French, Portuguese, and Arabic translations have not been supplied.
- The Local WordPress web server was not running during the initial audit, so browser QA cannot begin until it is started.
- Production server and WordPress admin access are not available for identifying the exact live `X-Robots-Tag` source.
