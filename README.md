# Future Northants WordPress Starter Theme

This is a WordPress starter theme, built to use the Gutenberg editor and WordPress blocks.

## Important note about the WordPress editor!

- If changes are made to a template or template part via the editor, then the changes are stored in the WordPress database and the theme's files are **NOT** updated.
- You can revert any modifications to the template using the editor, but all changes will be lost forever!

## Getting Started

Fork this repo and customise as needed to suit the micro-site's individual design.

Ensure you modify the `composer.json` and the `style.css` with the new theme's name.

To use this theme with the `WordPressTemplate` repo, add the theme's github repo url to the repositories, then add the theme to the require section (using the name in the composer.json).

For example:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/FutureNorthants/wordpress-starter-theme.git"
    }
  ],
  "require" {
    "futurenorthants/wordpress-starter-theme": "dev-main"
  }
}
```

## Theme

The styles are defined in the `theme.json` file and are based on the West Northamptonshire Council website.

You can either modify the `theme.json` directly, or create a new json file in the `styles` directory with your theme overrides. There is a `north.json` file to demonstrate how the colours can be overridden without redefining all of the other styles.

### Block Styles

See the styles section of the `theme.json` for overriding the styles for the core WordPress blocks.

## Page Layouts

The theme has the following page layouts/templates:

- blog -> used for a blog or news page listing out the posts
- home -> used as a starter for the homepage
- index -> default page if no other templates match, listing out blog posts
- page -> A single page
- search -> The search results page
- single -> A single post

## Parts

The theme has header and footer parts that are used in all page layouts/templates.

The header contains the logo, which can be updated in `patterns/logo.php`. The SVG logo needs to be in a PHP file or the template won't render it correctly in the editor.

The header and footer contain a page list by default, but this can be updated in the editor to point to a WordPress menu.
