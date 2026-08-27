# Design Notes — Phase 1 Visual Refinement (Aug 26, 2026)

Record of what was studied in `cacbua-current-snapshot`'s real, shipped CSS (not the live GitHub Pages render — the actual source file, `wp-content/mu-plugins/cacbua-site/assets/css/site.css`) and what was or wasn't carried into `cacbua-redesign`.

## What the snapshot's CSS actually contains

- **Hero** (`.hero-premium`): full-bleed background image, huge display type (`clamp(64px,7vw,100px)`, line-height .92, letter-spacing -.055em), a slow "breathing" zoom (`scale(1)` → `scale(1.025)` over 18s, alternating), and a fade/rise reveal on load (`opacity 0→1`, `translateY(18px)→0`, .75s ease-out). Gradient shade graduates from 12% opacity at top to 92% at bottom.
- **Buttons** (`.button`): a straightforward background/border/colour swap on hover+focus. No rotation, no translateX arrow-slide, no icon movement exists anywhere in this file — checked by direct search, not assumption.
- **Cards**: two real lift patterns exist — a plain `translateY(-4px)` + shadow on `.topic-card`/`.content-card`, and a more elaborate one on `.contact-routes article`: a 4px gradient bar (`::before`, accent→teal) that wipes in via `scaleX(0)→scaleX(1)` on hover, plus a `translateY(-6px)` lift and a border-colour change.
- **Header**: `104px` tall, absolute/transparent over the hero, nav links turn gold (`#ffd69d`) on hover, search is a plain borderless icon button.
- **Mobile nav**: a white card (`background:#fff`), not a dark full-screen takeover.
- **Reduced motion**: a single global rule kills all transitions, plus explicit `animation:none` on the hero's breathing/reveal.

## What was carried into cacbua-redesign, and how

| Snapshot behaviour | Where it landed | Notes |
|---|---|---|
| Huge tight-tracked hero type, gold eyebrow | `.hero-copy h1`/`.eyebrow` | Scaled down from the snapshot's 100px to fit a narrower text panel (`clamp(34px,3.9vw,54px)`), same tightening (-.03em) and weight |
| Breathing zoom | `.hero-media img` (`hero-breathe` keyframe) | Applied to the photo itself, not the whole section — since text is off the photo, the zoom can't affect legibility |
| Reveal fade/rise | `.hero-copy`, `.hero-media` (`hero-reveal` keyframe) | Staggered slightly (photo 0.1s after text) |
| Gradient bar hover wipe | `.opportunity-card`, `.topic-card`, `.news-card`, `.event-card` | Same mechanic (`::before`, `scaleX`), applied to every card type on the homepage for consistency, not just contact cards |
| Card lift + shadow | Same four card types | `translateY(-5px)`, matching the snapshot's stronger (-6px) variant rather than the plainer (-4px) one |
| Button hover lift + tinted shadow | `.button-primary/-outline/-ghost-dark`, header's `.partner-link` | The snapshot's own buttons don't lift — this specific detail is carried over from the snapshot's WPForms submit button instead, applied consistently across all CTAs since the brief asked for one coherent interaction language |
| Gold header hover, 100px header height | `.primary-nav a`, `.site-header-bar` | Matched closely |
| White mobile nav card | `.mobile-nav` | Restyled from a dark full-screen takeover to a white dropdown card; kept the redesign's own (more robust) open/close JS rather than reverting to any old markup |
| Global reduced-motion kill switch | Top of `site.css` | Same rule, applied globally |

## What was deliberately NOT copied, and why

- **Full-bleed hero with text overlaid on the photo.** This is the snapshot's actual hero structure, but it's exactly what caused the "faces covered by text" problem fixed in the previous round (the photo has no empty space to place text over). The split layout (text panel + uncropped photo card) stays. Everything else about the hero's *feel* — scale, motion, hierarchy — was brought back in around that constraint.
- **Rotation on button/icon hover.** Not implemented, because it doesn't exist in the snapshot's CSS. Adding it would have been inventing a behavior and attributing it to the reference, which isn't accurate.
- **Arrow/icon nudge on hover** (`.topic-card b`, `.news-card .read-more`) — these two *are* new additions in this round, not found in the snapshot. They're a small, tasteful extension of the same "something moves" language the brief asked about, but should be understood as new, not "retained."
- **Old mobile nav markup/positioning.** Only the visual style (white card) was taken; the underlying open/close behavior is the redesign's own, since the brief explicitly said not to copy any broken old responsive behavior.

## Known remaining issues

- Opportunity cards have no interactive element inside them (no link/button), so their hover treatment only shows for mouse users — keyboard users won't see it via `:focus-within` since there's nothing focusable to focus. Not a bug, since the cards aren't meant to be clickable yet, but worth revisiting once/if a "Learn more" link is added in a later phase.
- Cannot be verified in an actual browser in this environment (no PHP, no headless browser available in this sandbox) — verified structurally (asset paths, PHP require paths, CSS/PHP brace balance) instead. Recommend a real visual pass in an actual browser before sign-off.
