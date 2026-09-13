# CACBUA SEO Production Launch Checklist

**Critical:** Live `cacbua.org` currently returns `X-Robots-Tag: noindex, follow`. Do not remove it before the controlled production launch.

## Required launch gates

- [ ] Determine exactly where the live `X-Robots-Tag` header is generated: web server, host panel, WordPress/plugin, CDN/cache, or application code.
- [ ] Record the current configuration and a rollback procedure.
- [ ] Remove the production `noindex` header only when approved pages are live.
- [ ] Verify page HTML contains the intended production meta robots directive; remove pre-production `noindex, nofollow` only at launch.
- [ ] Verify HTTP responses no longer contain an unintended `X-Robots-Tag` on indexable HTML, images, or PDFs.
- [ ] Replace the pre-production blocking `robots.txt` with approved production rules.
- [ ] Verify Googlebot is not blocked from pages or render-critical CSS, JavaScript, and images.
- [ ] Verify `sitemap.xml` is valid, public, and contains only canonical, indexable, HTTP 200 URLs.
- [ ] Add Publication 001 to the sitemap only after institutional approval.
- [ ] Verify each canonical is absolute, production-domain, self-referencing, and consistent with internal links and the sitemap.
- [ ] Verify all production pages return the intended 200 response.
- [ ] Activate and test every approved redirect in `docs/SEO-REDIRECT-MAP.md`; confirm one hop and final 200 response.
- [ ] Confirm HTTP and `www` variants redirect to `https://cacbua.org/`.
- [ ] Validate JSON-LD with the Rich Results Test/Schema.org validator and compare it with visible content.
- [ ] Crawl the deployed site for broken links, duplicate titles/descriptions, multiple H1s, orphan pages, and accidental drafts.
- [ ] Verify social previews for pages with approved images and Publication 001 without an invented image.
- [ ] Verify Search Console Domain property ownership; submit the sitemap and inspect priority URLs.
- [ ] Verify analytics/consent only if separately approved.
- [ ] Save launch evidence: response headers, crawl export, sitemap, redirect tests, and deployment identifier.

## Rollback triggers

- Indexable pages still return `noindex`.
- Canonicals point to preview, localhost, `.php`, or the wrong hostname.
- Important legacy URLs return 404 or redirect to irrelevant content.
- Sitemap URLs are blocked, redirected, non-canonical, or non-200.
- Structured data contains unverified facts.
- Production pages are materially broken or slower than the approved baseline.
