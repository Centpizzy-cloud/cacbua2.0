# CACBUA Pre-Launch Performance Audit

## Current strengths

- No third-party font files or font-loading scripts; the design uses a system font stack.
- One shared stylesheet and one small shared JavaScript file; no duplicate framework bundles.
- Hero uses responsive `srcset`, explicit dimensions, and an optimized web image.
- Event archive/gallery images below the fold already use native lazy loading.
- Approved Opportunities images have 900px web variants and WebP alternatives.
- Opportunity cards/detail images now use WebP sources with JPG fallbacks, intrinsic dimensions, lazy loading, and asynchronous decoding.
- Event cards/gallery images now reserve intrinsic dimensions and use lazy loading/asynchronous decoding.
- Founder portrait has explicit width and height.

## Findings and actions

| Priority | Finding | Safe action |
|---|---|---|
| High | Several templates use CSS `background-image` for editorial banners, preventing normal image discovery and intrinsic sizing. | At implementation refinement, convert meaningful banners to `<img>`/`<picture>` with positioned overlays, preserving the approved visual design. |
| Medium | Some approved event assets have narrow or portrait source dimensions and are cropped into landscape cards. | Keep current `object-fit` behavior but review visual quality per card; do not upscale originals into large editorial heroes. |
| Medium | The single stylesheet contains page-specific CSS for all templates. | Measure compressed transfer size before splitting; avoid extra requests unless the measured benefit is material. |
| Low | Inline style attributes appear on several components. | Consolidate during a later maintainability pass; this is not currently a major performance risk. |
| Launch | Cache/compression behavior depends on the eventual production server. | Verify Brotli/gzip, HTTP/2+, long-lived versioned asset caching, HTML revalidation, and CDN behavior at launch. |

## Performance QA checklist

- Test homepage, Research, Publication 001, Events, Opportunities, Founder, and Contact at mobile and desktop sizes.
- Measure LCP, INP, and CLS with lab tools before launch and field data after launch.
- Do not lazy-load the homepage LCP image.
- Lazy-load only below-fold images and confirm content remains crawlable.
- Keep image dimensions/aspect ratios reserved before download.
- Test menu, inquiry links, gallery, newsletter interception, and analytics overhead.
- Confirm there are no duplicate CSS/JS requests, missing assets, console errors, or redirect chains.
- Do not remove approved imagery or interaction merely to improve a synthetic score; optimize delivery first.
