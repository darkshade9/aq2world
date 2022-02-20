# Action Quake 2 Archives

## Essentials

https://github.com/hartator/wayback-machine-downloader

Run this inside of this directory (so it downloads site contents to the `websites` directory)

http://web.archive.org

Useful for finding files that the scraper did not get (it's possible they existed in a previous version of the scrape, but not the one we specify)

Python - `linkchecker`

Example usage: `linkchecker -o html http://assets.aq2world.com/archive/websites/aqmd.telefragged.com/ > ../tests/aqmd-broken-links.html`

## Goals and Scope

The goals, in order of importance:
1. Preserve the spirit and core contents of individual sites
2. If something regarding the site is broken, we fix it to make it useful, if we can, following these guidelines
    1. Broken Links
        1. If a link is to a site that no longer exists (ex: telefragged.com) and we don't control the target, leave it be
        2. If it links to another site we are archiving, update the HREF to the new archived site, but keep the text the same.  ex: `<a href="http://aq2-tng.sourceforge.net/">http://action.action-web.net</a>`
    2. Broken images
        1. Some images can be found by doing an exact search of the img src link, if this is the case, let's include this in the archive (img/ directory or re-use an existing directory for site contents) and change the src to the new image
        2. If images cannot be recovered, I think the best course of action is to leave it as a broken image for now.
        3. Re-use existing images in the docs/assets/img/common if applicable
    3. PHP / cgi-bin / dynamic content
        1. Without the original files (web scrapers cannot scrape PHP code unless it exposed it on accident), dynamic-driven content won't display or function properly
3. Any AQ2 site that isn't already archived and should be can be suggested via a PR with the site scrape or discussed via Discord
4. Keep deduplication to a minimum, ex: we don't want to host the maps from the AQMD, but we can update the links to point at existing map repositories like Lahtela's

## Process

1. Create a new branch based off of `master`
2. In this directory, run the wayback-machine-downloader gem, referencing the URL of the archived site, and if necessary, the _latest_ `--to` date.  It's very common that the last scrape of the site has irrelevant or no content, and that we have to specify which date has the latest content that we want.
    1. An example, aqdt.fear.net latest scrapes are from a horror movie website, but specifying an earlier scrape will get us the AQ2 site
3. Open the main index.html page locally to access the site in your browser
4. Assess if the site is navigable via clicking links, or if paths to assets or other sites are broken.
5. Determine if links to images and files are missing entirely (no image exists, linked to another site that no longer exists, etc.) or if the path to the image is wrong
    1. Tip: If an image is referenced but does not exist in the archive.org scrape download, copy the full url of the image as it was linked and do a Wayback Machine search for that image.  I've had a good success rate of finding that image manually and then adding the image manually to the archived website directory.
6. Update links to other hosted archives sites
    1. For example, changing a link from http://aqmd.telefragged.com to https://assets.aq2world.com/archive/websites/aqmd.telefragged.com makes the link usable again
7. Resolve PHP/cgi-bin links
    1. Determine if the link is simply trying to reach another part of the website.  Some sites had PHP or cgi-bin logic to determine what to do when clicked, but if it's just referencing another part of the site, update the link to the html document instead
8.  Utilize the `linkchecker` tool for determining broken links, with a focus on fixing inter-site references (example: AQMD referencing AQDT) and any sites that we may want to archive in the future.

## Things that may never work again

* Any cgi-bin/PHP links
    * Commonly used for message boards
* Images or files that archive.org doesn't have
* Any links to telefragged downloads or GameSpy
