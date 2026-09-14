<?php
/**
 * Build a lightweight blog feed from the metadata already declared at the top
 * of each blog file. Files are read as text (never executed), so scheduled
 * articles cannot trigger their publish gate while the homepage is rendering.
 */
function hc360_latest_blog_posts(int $limit = 2): array
{
    $blogDirectory = dirname(__DIR__) . '/blog';
    $today = date('Y-m-d');
    $posts = [];

    foreach (glob($blogDirectory . '/*.php') ?: [] as $file) {
        $source = file_get_contents($file, false, null, 0, 16384);
        if ($source === false) {
            continue;
        }

        $readString = static function (string $variable) use ($source): ?string {
            $pattern = '/\\$' . preg_quote($variable, '/') . '\\s*=\\s*([\'\"])(.*?)\\1\\s*;/s';
            if (!preg_match($pattern, $source, $match)) {
                return null;
            }
            return stripcslashes($match[2]);
        };

        $title = $readString('page_title');
        $description = $readString('page_description');
        $published = $readString('page_published');

        if (!$title || !$published || $published > $today) {
            continue;
        }

        $image = null;
        if (preg_match('/\\$page_image\\s*=.*?([\'\"])(assets\\/images\\/[^\'\"]+)\\1\\s*;/s', $source, $imageMatch)) {
            $image = $imageMatch[2];
        }

        // Featured imagery is required. Never substitute a generic medical
        // image, because it may not represent the article being promoted.
        if (!$image || !is_file(dirname(__DIR__) . '/' . $image)) {
            error_log('Blog feed skipped post with missing featured image: ' . basename($file));
            continue;
        }

        $slug = pathinfo($file, PATHINFO_FILENAME);
        $searchable = strtolower($slug . ' ' . $title);
        $tag = str_contains($searchable, 'recover') || str_contains($searchable, 'exercise') || str_contains($searchable, 'work-after') || str_contains($searchable, 'sleep')
            ? 'Recovery Guide'
            : (str_contains($searchable, 'emergency') || str_contains($searchable, 'dangerous') ? 'Warning Signs' : 'Hernia Guide');

        $posts[] = [
            'title' => $title,
            'desc' => $description ?: 'Read the latest guidance from Dr. Kumar.',
            'tag' => $tag,
            'date' => date('j F Y', strtotime($published)),
            'published' => $published,
            'img' => $image,
            'link' => 'blog/' . $slug,
        ];
    }

    usort($posts, static fn(array $a, array $b): int => [$b['published'], $b['link']] <=> [$a['published'], $a['link']]);

    return array_slice($posts, 0, max(1, $limit));
}
