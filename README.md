# WPGitHubAPI
`[wga]` Shortcode to obtain resources from official GitHub API v3.. 

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

### Version 0.0.3
- NEW: Custom transients names with API_URL and Data.
- NEW: Regex Remove `/` in the beginning or at the end.

### Version 0.0.2
- FIX: Custom data related transients.

### Version 0.0.1
- First beta version.

## License
Copyright (C) 2016  Ahmad Awais

This program is free software; you can redistribute it and/or modify it
under the terms of the GNU General Public License as published by the Free
Software Foundation; either version 2 of the License, or (at your option)
any later version.

This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.


