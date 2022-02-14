# Action Quake 2 Archives

## Essential tools

https://github.com/hartator/wayback-machine-downloader

Run this inside of this directory (so it downloads site contents to the `websites` directory)

## Process

1. Create a new branch based off of `master`
2. In this directory, run the wayback-machine-downloader gem, referencing the URL of the archived site, and if necessary, the _latest_ `--to` date.  It's very common that the last scrape of the site has irrelevant or no content, and that we have to specify which date has the latest content that we want.
3. Open the main index.html page locally to access the site in your browser
4. Assess if the site is navigable via clicking links, or if paths to assets or other sites are broken.
5. Determine if links to images and files are missing entirely (no image exists, linked to another site that no longer exists, etc.) or if the path to the image is wrong 
6. Update links to other hosted archives sites are updated (for example, changing a link from http://aqmd.telefragged.com to https://assets.aq2world.com/archive/websites/aqmd.telefragged.com) makes the link usable again
