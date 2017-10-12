# WPGitHubAPI
`[wga]` Shortcode to obtain resources from official GitHub API v3.

NOTE: WPGitHubAPI plugin uses transients to cache the counts for `24 * HOUR_IN_SECONDS`.

## Shortcode
- `[wga]` shortcode accepts following parameters
    + `u='api_url'` where `api_url` is the part of API after `https://api.github.com/` E.g. `users/ahmadawais` will return my [profile data](https://api.github.com/users/ahmadawais).
    + `d='data'` where `data` is the object's data you want to retrieve E.g. `followers` will return the number of followers for my profile.
    + GitHub Readme Parser with `r='y'` attribute in the shortcode.
    + Remove `h1` with `h1=y|n` attribute in the shortcode.
    + Convert `h1` to `h2` with `h2=y|n` attribute in the shortcode.

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

### Version 0.0.8
- IMPROVE: Gracefully show the GitHub repo link on API rate limiting.

### Version 0.0.7
- IMPROVE: PHP 7 compat — thanks to @[tfirdaus](https://github.com/tfirdaus) for PR #[1](https://github.com/ahmadawais/WPGitHubAPI/pull/1).
- FIX: PHP CS Issues like weird spacing and tabs.
- NEW: Transients below 172 characters.

### Version 0.0.6
- NEW: Should there be `h1` with `h1=y|n`.
- NEW: Should convert `h1` to `h2` with `h2=y|n`.

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

---
### 🙌 [WPCOUPLE PARTNERS](https://WPCouple.com/partners):
This open source project is maintained by the help of awesome businesses listed below. What? [Read more about it →](https://WPCouple.com/partners)

<table width='100%'>
	<tr>
		<td width='333.33'><a target='_blank' href='https://www.gravityforms.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtrE/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://kinsta.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mu5O/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://wpengine.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mto3/c' /></a></td>
	</tr>
	<tr>
		<td width='333.33'><a target='_blank' href='https://www.sitelock.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtyZ/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://wp-rocket.me/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtrv/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://blogvault.net/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtph/c' /></a></td>
	</tr>
	<tr>
		<td width='333.33'><a target='_blank' href='http://cridio.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtmy/c' /></a></td>
		<td width='333.33'><a target='_blank' href='http://wecobble.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtrW/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://www.cloudways.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mu0C/c' /></a></td>
	</tr>
	<tr>
		<td width='333.33'><a target='_blank' href='https://www.cozmoslabs.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mu9W/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://wpgeodirectory.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtwv/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://www.wpsecurityauditlog.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtkh/c' /></a></td>
	</tr>
	<tr>
		<td width='333.33'><a target='_blank' href='https://mythemeshop.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/n3ug/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://www.liquidweb.com/?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mtnt/c' /></a></td>
		<td width='333.33'><a target='_blank' href='https://WPCouple.com/contact?utm_source=WPCouple&utm_medium=Partner'><img src='http://on.ahmda.ws/mu3F/c' /></a></td>
	</tr>
</table>
