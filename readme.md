# The Viddler Moodle Filter
[http://github.com/viddler/viddler-moodle-filter](github.com/viddler/viddler-moodle-filter)

This Moodle Filter makes it possible to use Viddler's ShortCode embed code to embed video directly into your Moodle LMS.

## Installation instructions

1. Download the latest version of the Viddler Moodle Filter.
2. Transfer the entire /viddler/ directory into your /filter/ directory on your Moodle installation.
3. In Moodle go to Site Administration > Plugins > Filters > Manage Filters
4. Enable the Viddler Moodle Filter to "On".
5. Test the filter by pasting this code into a post: [viddler id=788bbf00 w=437 h=288]

## How to use

Simply copy the ShortCode embed code from Viddler.com and paste it into your post on Moodle. Example ShortCode embed code: [viddler id=788bbf00 w=437 h=288]

This outputs an iframe embed code.

## Support

- [http://viddler.com/](viddler.com)
- [http://viddler.com/help](viddler.com/help)
- [http://moodle.org/](moodle.org)

## Changelog

- **0.1** 24 May 2012
  - Initial commit.
  - Accepts simple ShortCode [viddler id=viddler_id w=width h=height]