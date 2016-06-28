# WPGitHubAPI
`[wga]` Shortcode to obtain resources from official GitHub API v3.

NOTE: WPGitHubAPI plugin uses transients to cache the counts for `24 * HOUR_IN_SECONDS`.

## Shortcode
- `[wga]` shortcode accepts following parameters
    + `u='api_url'` where `api_url` is the part of API after `https://api.github.com/` E.g. `users/ahmadawais` will return my [profile data](https://api.github.com/users/ahmadawais).
    + `d='data'` where `data` is the object's data you want to retrieve E.g. `followers` will return the number of followers for my profile.

### Examples
- My GitHub Followers Count: `[wga u='users/ahmadawais' d='followers']`
- For more examples read [GitHub API Documentation](https://developer.github.com/v3/) or visit [GitHub API](https://api.github.com/).

### Screenshot
![](https://i.imgur.com/jraBp7C.png)

## To do 
- [x] WGA shortcode
- [ ] WGA Documentation

## Updates
You can use [GitHub Updater](https://github.com/afragen/github-updater) to receive updates for this plugin. 

## Changelog

### Version 0.0.5
- NEW: Basic PHPUnit tests.
- NEW: GitHub Readme Parser with `r='y'` attribute in the shortcode.

### Version 0.0.4
- WP.org Repo submission.
- NEW: `README.txt`.

### Version 0.0.3
- NEW: Custom transients names with API_URL and Data.
- NEW: Regex Remove `/` in the beginning or at the end.

### Version 0.0.2
- FIX: Custom data related transients.

### Version 0.0.1
- First beta version.

## License
Licensed under GNU GPL v2.0. Copyright (C) 2016 [Ahmad Awais](http://AhmadAwais.com/).
