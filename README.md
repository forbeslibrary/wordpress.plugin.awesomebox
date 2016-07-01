# Wordpress Plugin: Awesomebox

This Wordpress plugin adds a custom post type and taxonomies for library
 Awesomebox.

This software is maintained by Forbes Library.

## Installation
+ Unzip or clone the Awesomebox plugin into your Wordpress plugin directory (`wp-content/plugins`).
+ Log into your Wordpress installation and visit the Plugins screen.
+ Find the Awesomebox plugin in the list and click **Activate Plugin** to activate it.

## Usage

The plugin creates a custom post type, `awesomebox`, and custom taxonomies,
`awesomebox_audiences` and `awesomebox_formats`.

Users with the `manage_options` permission can create and edit new terms for any of the taxonomies.

Each `awesomebox` post must have a cover image, author, catalog url, audience. If the post is missing any of these it will be saved as a draft
instead of being published.

## Settings
Under the Awesomebox settings you can set a Catalog Search URL which will be
used when fetching data by ISBN. Enter the URL for an ISBN search in your
catalog, putting `%s` where the ISBN should go. For example `http://www.worldcat.org/isbn/%s`.
