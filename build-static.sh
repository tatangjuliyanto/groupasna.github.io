#!/bin/sh
# Render the PHP pages to static HTML for GitHub Pages. GitHub Pages cannot run
# PHP, so the static pages leave out visitor reviews. Run after editing any .php page.
set -e
cd "$(dirname "$0")"

for page in index kedai-asna toko-asna; do
  STATIC_BUILD=1 php -d display_errors=stderr "$page.php" \
    | awk -v src="$page.php" 'NR == 1 { cr = /\r$/ ? "\r" : ""; print; print "<!-- Generated from " src " by build-static.sh. Edit the .php file, not this one. -->" cr; next } { if (cr != "" && $0 !~ /\r$/) $0 = $0 cr; print }' \
    > "$page.html"
  echo "built $page.html"
done
