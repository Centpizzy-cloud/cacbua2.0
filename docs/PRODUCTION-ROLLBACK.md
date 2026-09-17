# CACBUA 2.0 Production Rollback Plan

Status: prepared only. Validate on staging before any production migration.

## Rollback triggers

Initiate rollback when one or more of these cannot be safely corrected inside the agreed launch window:

- Widespread HTTP 500/502/503 errors or a blank site.
- Database connection, migration, corruption, or data-loss failure.
- Broken primary navigation, authentication, administration, or forms.
- Severe layout failure across major breakpoints or Arabic RTL.
- Redirect loop, large redirect chain, or material traffic routed to unrelated pages.
- Public exposure of credentials, backups, logs, debug output, or private records.
- Incorrect indexing controls across a substantial part of the site.
- Multilingual routing serving wrong-language or unapproved content.

## Restore sequence

1. Declare rollback, freeze content changes, record the trigger and exact time, and notify the launch owner.
2. Put the site into a controlled 503 maintenance state if visitors would otherwise receive broken or unsafe pages.
3. Disable the new redirect/configuration layer first if it causes loops or loss of access.
4. Restore the previous complete WordPress files from the verified pre-launch archive, including the old MU-plugin, themes, plugins, uploads references, root files, `.htaccess`, and accessible server configuration.
5. Restore the previous database dump with a transaction-capable or host-approved method. Verify table prefix, site/home URLs, serialized values, administrator access, and row counts.
6. Restore the previous `wp-config.php` and environment-specific secrets from secure backup; never copy them into Git.
7. Restore the previous redirect rules and prior robots/indexing behavior exactly as captured before launch. If the old site was indexable at migration time, do not reintroduce an obsolete noindex state.
8. Disable/remove the multilingual plugin only if the prior database/files snapshot did not include it; never delete translation data before the database rollback is confirmed.
9. Flush permalinks once, then purge WordPress, LiteSpeed/server, CDN, object, and browser caches.
10. Verify homepage, administration login, navigation, forms, uploads, key legacy URLs, robots, sitemap, canonical headers, and response codes.
11. Remove maintenance mode only after the technical owner and business approver accept the restored state.
12. Preserve failed-release logs and deployment records outside the web root, then write an incident review before rescheduling.

## Recovery validation

- HTTP 200 on representative legacy pages; no widespread 5xx.
- Admin authentication and content editing work.
- Database version and checksums/row counts match the selected backup.
- Previous navigation, assets, forms, redirects, robots, and sitemap are restored.
- No release archives, dumps, logs, or credentials are publicly accessible.

