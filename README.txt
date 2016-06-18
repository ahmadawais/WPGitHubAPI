=== WP GitHub API ===
Contributors: mrahmadawais, WPTie
Donate link: http://AhmadAwais.com/
Tags: github, api, shortcode, github stars, github followers, github api v3, v3
Requires at least: 0.0.4
Tested up to: 4.6.0
Stable tag: 0.0.4
License: GPLv2 or later

`[wga]` Shortcode to obtain resources from official GitHub API v3.

== Description ==

`[wga]` Shortcode to obtain resources from official GitHub API v3.
NOTE: WPGitHubAPI plugin uses transients to cache the counts for `24 * HOUR_IN_SECONDS`.

## Shortcode
- `[wga]` shortcode accepts following parameters
    + `u='api_url'` where `api_url` is the part of API after `https://api.github.com/` E.g. `users/ahmadawais` will return my [profile data](https://api.github.com/users/ahmadawais).
    + `d='data'` where `data` is the object's data you want to retrieve E.g. `followers` will return the number of followers for my profile.

### Examples
- My GitHub Followers Count: `[wga u='users/ahmadawais' d='followers']`
- For more examples read [GitHub API Documentation](https://developer.github.com/v3/) or visit [GitHub API](https://api.github.com/).

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload \`WPGitHubAPI\` to the \`/wp-content/plugins/\` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use `[wga u='API_URL' d='DATA']` shortcode.

== Frequently Asked Questions ==

= What more can I do with this shortcode? =

For more examples read [GitHub API Documentation](https://developer.github.com/v3/) or visit [GitHub API](https://api.github.com/).

== Screenshots ==

1. Feteched my GitHub followers via [wga u='users/ahmadawais' d='followers']

== Changelog ==

= Version 0.0.4 =
- WP.org Repo submission.
- NEW: `README.txt`.


= Version 0.0.3 =
- NEW: Custom transients names with API_URL and Data.
- NEW: Regex Remove `/` in the beginning or at the end.

= Version 0.0.2 =
- FIX: Custom data related transients.

= Version 0.0.1 =
- First beta version.


== Upgrade Notice ==

= 0.0.4 =
None.
