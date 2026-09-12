<?php
/**
 * Publish-date gate for scheduled blog posts.
 *
 * Include this once, right after config.php and before header.php, then call
 * hc360_publish_gate('YYYY-MM-DD') with the post's intended publish date.
 *
 * Before that date: sends a real 404 status with a noindex robots header, so
 * the URL is never indexed while embargoed, and stops execution before any
 * article markup renders.
 *
 * On and after that date: this is a no-op and the page renders normally.
 *
 * This needs no cron job and no redeploy on the day itself. PHP evaluates the
 * live server clock on every single request, so the post starts rendering
 * itself the instant the host's date rolls over into publish day. Deploy the
 * file once, whenever you like, before the date; visibility flips on its own.
 */
function hc360_publish_gate(string $publishDate): void
{
    if (date('Y-m-d') >= $publishDate) {
        return;
    }

    http_response_code(404);
    header('X-Robots-Tag: noindex, nofollow', true);
    ?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>Page Not Found | HerniaCare 360</title>
<style>
body{font-family:system-ui,-apple-system,'Segoe UI',sans-serif;background:#f8fafc;color:#334155;display:flex;align-items:center;justify-content:center;min-height:100vh;margin:0;padding:24px;text-align:center}
.box{max-width:420px}
h1{font-size:1.5rem;color:#0f172a;margin-bottom:.5rem}
p{line-height:1.6}
a{color:#0e7490;font-weight:600;text-decoration:none}
a:hover{text-decoration:underline}
</style>
</head>
<body>
<div class="box">
<h1>Page Not Found</h1>
<p>This page does not exist yet.</p>
<p><a href="/blog">Browse the hernia blog</a> or <a href="/">return to the homepage</a>.</p>
</div>
</body>
</html>
<?php
    exit;
}
