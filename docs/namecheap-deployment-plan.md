# Namecheap Deployment Plan (Stellar + cPanel Git)

Status: **Planning only — nothing in this document has been executed.** No purchase,
DNS change, or file has been touched on `cacbua.org` or any Namecheap account.
This is the roadmap to follow once the team is ready to move.

Decision made Sept 8, 2026: hosting product is **Namecheap Stellar** (shared,
cPanel-based), chosen specifically because cPanel's built-in Git Version
Control feature supports a real push-to-deploy workflow — the same habit
already in use with `cacbua-redesign-preview` on GitHub Pages, just pointed at
the real domain once everything below is ready.

---

## Phase 0 — Before buying anything

- [ ] Confirm on the Stellar plan tier (Stellar / Stellar Plus / Stellar
      Business) — pick based on expected traffic and storage; Stellar Plus is
      usually the safe default for a small-to-mid institutional site with
      room to grow.
- [ ] Confirm who owns/pays for the Namecheap account (billing contact).
- [ ] Do **not** touch `cacbua.org`'s DNS/nameservers yet. The current host
      keeps serving the live site for the entire build-out below.

## Phase 1 — Stand up hosting on a temporary URL

- [ ] Purchase the Stellar plan.
- [ ] In cPanel, install a fresh WordPress via Softaculous (or manually) —
      this is a clean install, **not** a migration of the old
      `brjstyle_cd2` database. The redesign replaces the site; it doesn't
      inherit the old install's content or plugin config automatically.
- [ ] Work against the temporary URL cPanel gives you (something like
      `serverIP/~username` or a Namecheap-provided temp domain) until
      everything below is verified.
- [ ] Request SSH access from Namecheap support (not enabled by default on
      shared hosting) — needed for the Git deploy step in Phase 3.

## Phase 2 — Package `cacbua-redesign` as a real WordPress theme

This is required regardless of hosting choice — the current build is plain
PHP files with includes, not an installable WP theme.

- [ ] Add a proper theme header block to `assets/css/site.css`
      (`Theme Name`, `Author`, `Version`, etc. — WordPress reads this).
- [ ] Add `functions.php`: register menus, enqueue `site.css`/`site.js`
      properly via `wp_enqueue_style`/`wp_enqueue_script` instead of the
      hardcoded `<link>`/`<script>` tags currently in each page.
- [ ] Convert each top-level `.php` file (`index.php`, `about.php`,
      `research.php`, etc.) into a WordPress template following its
      template hierarchy (`front-page.php`, `page-about.php`, etc.), or
      register them as selectable Page Templates — decide which based on
      whether CACBUA staff will ever edit these pages from wp-admin.
- [ ] Re-point internal links from the current relative-`.php`/`.html`
      style to WordPress's own `home_url()` / page permalinks.
- [ ] Decide the contact form: reinstall WPForms (or an equivalent) and wire
      the currently-cosmetic Contact page form to it — this was explicitly
      left non-functional in the prototype and needs to be real before
      launch.

## Phase 3 — Wire up the Git deploy pipeline

- [ ] In cPanel → Security → SSH Access, add an SSH key for deploys.
- [ ] In cPanel → Git™ Version Control, create/clone a repo pointing at the
      theme's location inside the WordPress install
      (typically `wp-content/themes/cacbua-redesign/`).
- [ ] Add a `.cpanel.yml` file to the theme repo root defining the deploy
      task (what to copy/run on each push — cPanel runs this automatically).
- [ ] Test with a trivial change (e.g. a comment) pushed from this repo,
      confirm it appears on the temporary URL within a minute or two —
      same feedback loop already familiar from the GitHub Pages preview.

## Phase 4 — Close remaining content gaps before cutover

Cross-reference `docs/content-status.md` — as of Sept 8, 2026 the open items
that should be resolved (or consciously accepted as still-pending) before a
public launch are:

- [ ] Leadership & governance bios (About page) — outreach already sent.
- [ ] Hero photo — publish clearance from CACBUA leadership (context is
      confirmed, rights sign-off is not).
- [ ] Publication 001 — formal institutional sign-off before presenting as
      an official CACBUA position.
- [ ] Cooperation — real partner/case-study examples (currently an honest
      placeholder, no invented examples).
- [ ] Contact — office hours and privacy-policy wording.
- [ ] Resources — decision: build a real page, or keep folded into
      Research/News (matches what production already does).
- [ ] Newsletter — provider decision (Mailchimp or similar) if the signup
      should actually work at launch, or keep it a labeled "coming soon."

## Phase 5 — Pre-cutover verification

- [ ] Compare every page/permalink slug in the new theme against the real
      production site's current URLs (`cacbua.org/...`) — this was flagged
      as unverified in the earlier deployment-planning pass and is the
      single biggest risk of broken links/lost SEO on launch day.
- [ ] Set up 301 redirects for any URL that changes shape between the old
      site and the new one.
- [ ] Confirm free SSL (Let's Encrypt via cPanel AutoSSL) is issued and
      forced (HTTP → HTTPS redirect) on the temporary domain before cutover.
- [ ] Full click-through test across desktop and mobile widths, same
      checklist used for the `cacbua.local` verification pass earlier in
      this project.
- [ ] Confirm a rollback plan: keep the old host active and unchanged for a
      defined window (recommend at least 2 weeks) after DNS cutover, in
      case anything needs reverting.

## Phase 6 — DNS cutover

- [ ] Update `cacbua.org`'s nameservers/DNS records to point at the
      Namecheap Stellar hosting.
- [ ] Monitor propagation (can take from minutes up to ~48 hours depending
      on DNS TTL).
- [ ] Re-verify SSL and every page once the real domain is live on the new
      host — a temp-domain test doesn't always catch every issue.
- [ ] Clear any caching layer (Cloudflare, browser cache messaging to
      stakeholders) so everyone sees the new site, not a cached old one.

## Phase 7 — After launch

- [ ] Confirm the deploy pipeline still works against the live domain (push
      a small change, verify it appears).
- [ ] Decommission or archive the old host on your own timeline, once the
      rollback window has passed with no issues.
- [ ] Update `docs/content-status.md` and `docs/image-sources.md` to mark
      the project as launched, not just "reviewed."

---

## Open decision needed from CACBUA before Phase 0 can start

Everything above assumes Stellar shared hosting. If the eventual traffic or
technical needs turn out to be larger than expected, EasyWP (Namecheap's
managed WordPress product) remains a fallback — faster and easier to manage,
but without native Git deploy; that path would use a GitHub Action pushing
files over SFTP instead of cPanel's Git Version Control. Not needed now,
noted here in case Stellar turns out to be undersized later.
