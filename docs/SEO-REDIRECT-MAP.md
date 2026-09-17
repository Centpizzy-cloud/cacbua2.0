# CACBUA Pre-Launch Redirect Map

**Status:** Prepared only. No redirects are active. Production approval is required.

Use one-hop server-side redirects. Test every source and destination immediately before activation. Do not redirect unrelated content to the homepage.

| OLD URL | PROPOSED NEW URL | HTTP STATUS | Reason / action |
|---|---|---:|---|
| `https://cacbua.org/` | `https://cacbua.org/` | 200 | Keep canonical homepage; replace content only at approved launch. |
| `https://cacbua.org/cooperation/contact/` | `https://cacbua.org/contact/` | 301 | Contact content moves to the top-level Contact page. |
| `https://cacbua.org/cooperation/about/` | `https://cacbua.org/about/` | 301 | About content moves to the top-level About page. |
| `https://cacbua.org/%e4%b8%ad%e6%96%87/` | `https://cacbua.org/zh/` | REVIEW REQUIRED | Do not redirect until equivalent, approved Chinese content exists. |
| `https://cacbua.org/upcoming-events/` | `https://cacbua.org/events/` | 301, REVIEW REQUIRED | Activate only after confirming the new archive satisfies both historical and upcoming-event intent. |
| `https://cacbua.org/resources/` | `https://cacbua.org/resources/` | 200 | Keep the URL; replace its content with the completed CACBUA Resource Hub at launch. |
| `https://cacbua.org/policy-insight/` | `https://cacbua.org/research/` | 301, REVIEW REQUIRED | Activate only after confirming the Research hub preserves the relevant policy content. |
| `https://cacbua.org/cooperation/` | `https://cacbua.org/cooperation/` | 200 | Keep canonical Cooperation page. |
| `https://cacbua.org/outlook/` | `https://cacbua.org/leadership/` | 301 | Old Founder content moves to the new Leadership page; activate after biography/content approval. |

## Prototype route normalization at launch

| Prototype route | Production canonical | Action |
|---|---|---|
| `/index.php` | `/` | Rewrite internally; redirect any public `.php` request to `/`. |
| `/about.php` | `/about/` | Rewrite and 301 public `.php` requests. |
| `/founder.php` | `/leadership/` | Rewrite and 301 public `.php` requests. |
| `/research.php` | `/research/` | Rewrite and 301 public `.php` requests. |
| `/publication-zero-tariff-2026.php` | `/research/publications/china-zero-tariff-africa-2026/` | Activate only after institutional approval. |
| `/cooperation.php` | `/cooperation/` | Rewrite and 301 public `.php` requests. |
| `/opportunities.php` | `/opportunities/` | Rewrite and 301 public `.php` requests. |
| `/news.php` | `/news/` | Rewrite and 301 public `.php` requests. |
| `/events.php` | `/events/` | Rewrite and 301 public `.php` requests. |
| `/contact.php` | `/contact/` | Rewrite and 301 public `.php` requests. |

Implementation must be translated into the chosen production server/CMS configuration only after approval. This document is not an executable redirect file.
