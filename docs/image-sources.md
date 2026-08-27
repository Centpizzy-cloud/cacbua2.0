# Image Sources Register

Every image used (or considered and rejected) in the `cacbua-redesign` prototype is logged here. Nothing is used without an entry in this file. See `content-status.md` for the same governance labels applied to text content.

Legend for status: `VERIFIED / READY`, `CACBUA EXISTING CONTENT`, `RESEARCHED EXTERNAL CONTENT`, `CLIENT APPROVAL REQUIRED`, `CLIENT CONTENT REQUIRED`, `LICENSE/PERMISSION REQUIRED`.

---

## In use — Homepage Phase 1

### 0. Site logo (header, mobile menu, footer)

| Field | Value |
|---|---|
| Filename | `assets/images/approved/brand/cacbua-logo.jpg` (300×155, header/footer display size), `cacbua-logo@2x.jpg` (768×397, retina `srcset`) |
| Description | Official CACBUA logo — green wordmark over a globe graphic highlighting Africa, with the "China & Africa Cross-Border United Association" tagline |
| Creator | CACBUA (own brand asset) |
| Original source | `wp-content/uploads/2023/01/CACBUA-rectangle-300x155.jpg` and `-768x397.jpg`, the same files already used as the real site logo on production/Local WordPress |
| License | CACBUA's own content |
| Attribution required | No |
| Modification permitted | Yes — displayed inside a small white rounded badge (`.site-logo` CSS) so it reads cleanly on the dark header/footer background; no cropping or recolor of the artwork itself |
| Suggested use | Header brand link, mobile-menu header, footer brand block |
| Date accessed | Aug 27, 2026 |
| **Status** | **CACBUA EXISTING CONTENT** — this is CACBUA's real, already-in-use logo, not a placeholder. Fixes an earlier gap where the prototype shipped with a plain "CACBUA." text wordmark instead of the real logo image (the text version was never logged in this register, which was itself an oversight — flagging it here now). |

### 1. Hero — delegation photo

| Field | Value |
|---|---|
| Filename | `assets/images/approved/hero/hero-delegation-original.jpg` (untouched original), `hero-web-1920.jpg` / `-1200.jpg` / `-800.jpg` + `.webp` variants (optimized/cropped) |
| Description | CACBUA delegation group photo in an official meeting room, portrait of Nigerian President Bola Tinubu visible on the wall |
| Creator | Unknown — not recorded anywhere in the project |
| Original source | Found in `redesign/2026-07-30-redesign-package/homepage-prototype/assets/hero.jpg`, itself copied into the live mu-plugin on Aug 26, 2026. No provenance earlier than that exists in project files. |
| Original URL | None on file |
| License | **Unknown** |
| Attribution required | Unknown |
| Modification permitted | Unknown — cropping/brightness adjustments have been applied in this prototype pending confirmation |
| Suggested use | Homepage hero |
| Date accessed | Aug 26, 2026 (copied from prototype folder into this project) |
| **Status** | **CLIENT APPROVAL REQUIRED** — need CACBUA to confirm this is their own photo (or properly licensed) before it can be used on the live/public site. Used in this prototype only because it's the identity CACBUA has already approved directionally; not cleared for production. |

### 2. Opportunities — "Africa → China Market Access" card

| Field | Value |
|---|---|
| Filename | `assets/images/approved/opportunities/market-access-original.jpg`, `market-access-web.jpg/.webp` |
| Description | China–Africa trade expo booth: African wood carvings/crafts on display, Chinese and African attendees, "Republic of Guinea" pavilion signage visible |
| Creator | Unknown |
| Original source | Already present in the live mu-plugin (`assets/images/editorial/china-africa-trade-expo-cropped.jpg`) before this session; no provenance recorded there either |
| Original URL | None on file |
| License | **Unknown** |
| Attribution required | Unknown |
| Modification permitted | Unknown — resized for this prototype |
| Suggested use | Opportunities: Africa → China Market Access |
| Date accessed | Aug 26, 2026 |
| **Status** | **CLIENT APPROVAL REQUIRED** — same gap as the hero photo. |

### 3. Opportunities — "Manufacturing & Industrial Cooperation" card

| Field | Value |
|---|---|
| Filename | `assets/images/approved/opportunities/manufacturing-original.jpg`, `manufacturing-web.jpg/.webp` |
| Description | Construction site, workers in hard hats, high-rise building under construction |
| Creator | Unknown |
| Original source | Already present in the live mu-plugin (`assets/images/editorial/china-africa-construction-cropped.jpg`) |
| Original URL | None on file |
| License | **Unknown** |
| Attribution required | Unknown |
| Modification permitted | Unknown — resized for this prototype |
| Suggested use | Opportunities: Manufacturing & Industrial Cooperation |
| Date accessed | Aug 26, 2026 |
| **Status** | **CLIENT APPROVAL REQUIRED**. Important caption note: the workforce and architecture in this photo do not visibly read as an African construction site. It is captioned in the prototype as a generic illustrative industrial-construction image — **it must not be captioned or implied as being located in Africa**, since that would be geographically misleading per the project's own photography rule. |

### 4. Events — full archive (28 real photos: 15 event cards + 1 featured banner + 12 gallery images)

| Field | Value |
|---|---|
| Filenames | `assets/images/approved/events/*-web.jpg` (+ `-original.jpg`, unresized) — one pair per event, plus `tour-fashion-banner-2023-*` (feature banner) and `gallery-01` through `gallery-12` |
| Description | The full real CACBUA event archive: Mex Export (1st & 3rd editions), Home Appliance Expo, Membership Support, Machine Cooperation, Fashion & Tour, Commodity, Bizwise Opportunity, Shanghai Trade Office meeting, Shanghai Consulate meeting, two E-Commerce Forums, Education Support, Legal Status Forum, Healthcare Activity, plus 12 additional gallery photos |
| Creator | Not individually recorded, but these are CACBUA's own event-archive photos (originally from `wp-content/uploads/2023/02/` in the production WordPress media library, confirmed as a genuine restore of the real cacbua.org site) |
| Original source | Production WordPress media library (`cacbua-local`), the same files already used on `cacbua-current-snapshot`'s live Events page |
| License | CACBUA's own content |
| Attribution required | No |
| Modification permitted | Yes — resized for web use here (originals kept separately) |
| Suggested use | Homepage Events preview (3 of the 15) and the full `events.php` archive page (all 15 + banner + gallery) |
| Date accessed | Aug 26, 2026 (copied from production uploads into this project) |
| **Status** | **VERIFIED / READY** — this whole event archive was explicitly confirmed by the client earlier in this project ("we have verified all these"). Different status from the hero/Opportunities images above, which still need an ownership check. |

### 5. Opportunities — "Nigeria → China Opportunities" card

| Field | Value |
|---|---|
| Filename | `assets/images/approved/opportunities/nigeria-original.jpg` (2670×4000, untouched download), `nigeria-web.jpg` / `.webp` (900×570, cropped) |
| Description | Lagos Island skyline — dusk view over mixed low- and high-rise buildings |
| Creator | Emmanuel Ikwuegbu |
| Original source | https://unsplash.com/photos/a-view-of-a-city-with-tall-buildings-t96rE_EZffE |
| Original URL | https://unsplash.com/photos/a-view-of-a-city-with-tall-buildings-t96rE_EZffE |
| License | Unsplash License — independently confirmed by opening the photo's license page directly (not assumed) |
| Attribution required | No (not required by Unsplash License; photographer credited here anyway) |
| Modification permitted | Yes — cropped from portrait to the card's landscape ratio |
| Suggested use | Opportunities: Nigeria → China Opportunities |
| Date accessed | Aug 27, 2026 |
| **Status** | **VERIFIED / READY** |

### 6. Opportunities — "Agriculture" card

| Field | Value |
|---|---|
| Filename | `assets/images/approved/opportunities/agriculture-original.jpg` (7008×4672, untouched download), `agriculture-web.jpg` / `.webp` (900×570, cropped) |
| Description | Joyful group of farmers harvesting cassava in a field, Anambra, Nigeria |
| Creator | Victor Chijioke |
| Original source | https://www.pexels.com/photo/joyful-african-farmers-harvesting-cassava-in-nigeria-36846177 |
| Original URL | https://www.pexels.com/photo/joyful-african-farmers-harvesting-cassava-in-nigeria-36846177 |
| License | Pexels License — independently confirmed by opening the photo's license page directly (not assumed) |
| Attribution required | No (not required by Pexels License; photographer credited here anyway) |
| Modification permitted | Yes — cropped to the card's landscape ratio |
| Suggested use | Opportunities: Agriculture |
| Date accessed | Aug 27, 2026 |
| **Status** | **VERIFIED / READY** |

### 7. Opportunities — "Investment & Projects" card

| Field | Value |
|---|---|
| Filename | `assets/images/approved/opportunities/investment-original.jpg` (7953×5305, untouched download), `investment-web.jpg` / `.webp` (900×570, cropped) |
| Description | Nairobi cityscape skyline at daytime |
| Creator | Ken Mwaura |
| Original source | https://www.pexels.com/photo/skyline-view-of-nairobi-cityscape-at-daytime-29069344 |
| Original URL | https://www.pexels.com/photo/skyline-view-of-nairobi-cityscape-at-daytime-29069344 |
| License | Pexels License — independently confirmed by opening the photo's license page directly (not assumed) |
| Attribution required | No (not required by Pexels License; photographer credited here anyway) |
| Modification permitted | Yes — cropped to the card's landscape ratio |
| Suggested use | Opportunities: Investment & Projects |
| Date accessed | Aug 27, 2026 |
| **Status** | **VERIFIED / READY** |

### 8. Opportunities — "Renewable Energy & Emerging Industries" card

| Field | Value |
|---|---|
| Filename | `assets/images/approved/opportunities/renewable-energy-original.jpg` (5120×3840, untouched download), `renewable-energy-web.jpg` / `.webp` (900×570, cropped) |
| Description | Rooftop solar panel installation on a red tile roof, Nelspruit, South Africa |
| Creator | Sergio Martins |
| Original source | https://unsplash.com/photos/solar-panels-on-a-red-tile-roof-1UtCVFoZwn4 |
| Original URL | https://unsplash.com/photos/solar-panels-on-a-red-tile-roof-1UtCVFoZwn4 |
| License | Unsplash License — independently confirmed by opening the photo's license page directly (not assumed) |
| Attribution required | No (not required by Unsplash License; photographer credited here anyway) |
| Modification permitted | Yes — cropped to the card's landscape ratio |
| Suggested use | Opportunities: Renewable Energy & Emerging Industries |
| Date accessed | Aug 27, 2026 |
| **Status** | **VERIFIED / READY** |

---

## Explicitly rejected — not used, do not use

### FOCAC 2024 Beijing Summit group photo

| Field | Value |
|---|---|
| Filename | `assets/images/editorial/focac-2024-summit-source.png` (lives only in the production mu-plugin; not copied into this project) |
| Description | Official group photo, 2024 FOCAC Beijing Summit, with a produced bilingual title graphic burned into the image |
| Why rejected | This has the visual signature of an official press/state-media summit photo package (composed title graphic, broadcast-style layout) rather than a personal or CACBUA-owned photo. That's exactly the category the project's copyright rule excludes ("Do NOT use Reuters, AP, AFP, Getty, Xinhua... assume that writing the source on an image gives us permission"). No source or license is recorded for it anywhere in the project. |
| **Status** | **LICENSE/PERMISSION REQUIRED — do not use** until CACBUA can confirm a specific, verifiable license or provide their own equivalent photo. |

---

## Research-approved, not yet downloaded (technical limitation this session)

The photography research pass (see the investigation report, Aug 26, 2026) identified 10 fully license-verified images (Unsplash License / Pexels License — confirmed by opening each license page directly) that are safe to use immediately. The four Opportunities-card candidates from that batch have since been downloaded and are now logged under "In use — Homepage Phase 1" (entries 5–8) above. The remaining candidates from that research pass are not yet physically present in this project; once downloaded, they should be dropped into `assets/images/approved/<category>/` and this register updated.

**Explicitly excluded from any future pass:** all four World Bank Photo Collection (Flickr) candidates identified in research — confirmed CC BY-NC-ND (non-commercial, no derivatives), which does not clear CACBUA's use and forbids the cropping this design requires. Per your instruction, these are not used and should not be reconsidered without a specific written okay.

**Needs manual license verification before ever being downloaded:** the Wikimedia Commons candidates (2019 China-Africa Expo photo, FOCAC category photos, Kenya SGR railway photos, Lekki-Ikoyi Bridge) — thematically the best matches found, but the research tool couldn't render Commons' license template to confirm the exact tag. Someone needs to open each file page and read the license box before these are ever added to `approved/`.

---

## Publication 001 — "China's Zero-Tariff Policy for Africa" (Aug 26, 2026)

No photograph is used on the publication page or its homepage card. The page ships with a text-only hero and a sourced stat strip in place of a photo, per the instruction to prefer no image over an unlicensed one.

### Candidate — Port of Djibouti container terminal (not used, not downloaded)

| Field | Value |
|---|---|
| Filename | Not downloaded — no file exists in this project |
| Description | Container terminal at the Port of Djibouti — real African port/logistics photography, thematically relevant to an export/trade policy brief |
| Creator | Not confirmed — could not be read from the Commons file page this session (see limitation below) |
| Original source | `commons.wikimedia.org/wiki/File:The_container_terminal_at_the_Port_of_Djibouti.jpg`, surfaced via web search on Aug 26, 2026 |
| Original URL | https://commons.wikimedia.org/wiki/File:The_container_terminal_at_the_Port_of_Djibouti.jpg |
| License | Reported by search-result summary only as "Creative Commons Attribution-Share Alike 4.0 International" — **not independently confirmed**; three attempts to fetch the actual Commons page (the file page itself, its raw wikitext, and the Commons API) all returned empty content in this sandbox, so the license, exact creator, and attribution wording could not be verified first-hand |
| Attribution required | Unknown until verified — CC BY-SA licenses always require attribution at minimum |
| Date accessed | Aug 26, 2026 (search only; page itself not successfully fetched) |
| **Status** | **LICENSE/PERMISSION REQUIRED — reference-only, do not use.** This is a real, plausible, on-topic candidate, not a random image, but per this project's rule ("keep uncertain images reference-only and do not publish them"), it stays out of `approved/` until a person opens the Commons page directly, confirms the license tag, records the actual photographer/uploader name, and manually downloads the file. |

### Why no image shipped with this publication

This sandbox cannot download binary image files under any circumstance found so far (no general internet access from the shell; the available web-fetch tool is text-oriented and, for this particular domain, returned no content at all across three different URL formats). Combined with the explicit instruction not to use an unlicensed or unverified photo "simply because it appears online," the honest choice was to ship the page with real, sourced text (the stat strip) instead of a placeholder image or a not-fully-verified photo.
