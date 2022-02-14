# Action Quake 2 Archives

## Essentials

https://github.com/hartator/wayback-machine-downloader

Run this inside of this directory (so it downloads site contents to the `websites` directory)

http://web.archive.org

Useful for finding files that the scraper did not get (it's possible they existed in a previous version of the scrape, but not the one we specify)

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

## Things that may never work again

* Any cgi-bin/PHP links
    * Commonly used for message boards
* Images or files that archive.org doesn't have
* Any links to telefragged downloads or GameSpy
