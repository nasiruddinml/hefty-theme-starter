# Hefty Starter Theme for WordPress

A Gutenberg Starter Theme for WordPress with Tailwind. This theme is extended version of [_tw](https://github.com/gregsullivan/_tw).

## Installing Tailwind

Your first step is to install [npm](https://www.npmjs.com/get-npm) or [yarn](https://classic.yarnpkg.com/lang/en/docs/install) if you haven’t already. After that, open your terminal of choice, navigate to your theme repository and run:

```sh
npm install
```

or

```sh
yarn install
```

With Tailwind installed, you can then generate your style.css file by running:

```sh
npm run build && npm run dev
```

This creates a development build of your theme’s stylesheet.

## Setting up your development environment

Your theme won’t have a flat file structure like _s. Instead, you’ll see the following folders:

```sh
hefty-starter-theme
├── scripts
├── tailwind
├── sass
└── theme
```

Alongside those folders you’ll find an assortment of package and configuration files that aren’t meant to be uploaded to WordPress as part of a theme. The theme itself lives in the theme folder, keeping those files together and uncluttered.

However, this folder structure means you can’t place your theme repository directly in your wp-content/themes folder.

We use [VVV](https://varyingvagrantvagrants.org) with the following folder structure:

```sh
development-website.test
├── hefty-starter-theme
│   ├── scripts
│   ├── tailwind
│   ├── sass
│   └── theme
├── log
├── provision
└── public_html
    ├── wp-admin
    ├── wp-content
    └── wp-includes
```

Our preferred approach is to place my theme repository in the development site’s root folder (development-website.test in the example above), one level above WordPress (located in the public_html folder). We’ll then navigate to the wp-content/themes folder and create a symbolic link to place our theme’s theme subfolder into the WordPress themes directory:

```sh
ln -s ../../../hefty-starter-theme/theme hefty-starter-theme
```

We then activate the theme in WordPress, and any changes I make to the theme are immediately reflected on the development site.

Another option is to place the theme repository in the wp-content folder, navigate to wp-content/themes and then run:

```sh
ln -s ../hefty-starter-theme/theme hefty-starter-theme
```

## Working with Tailwind

Generally you’ll want to be watching your theme for changes and regenerating your style.css file automatically:

```sh
npm run watch
```

The watch command will run continuously in the background, keeping things up-to-date.

Unlike the watch command, the dev command from earlier creates a one-off development build and doesn’t update as you make changes.

Before deployment, you’ll want to create a production build:

For building scss files:

```sh
npm run build
```

For building theme files:

```sh
npm run prod
```

If you’re using Tailwind for the first time, [Tailwind’s documentation](https://tailwindcss.com/docs) is extremely good, and they also have some excellent [screencasts](https://www.youtube.com/tailwindlabs) to get you started.

## theme.json

Now with built-in [theme.json](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) support, Hefty_Starter_Theme includes a basic `theme.json` file in its theme folder. The color and width values from that file are automatically made available to Tailwind via a Tailwind plugin.

This means the top-level colors in `theme.json` can be used in Tailwind (with classes like `bg-primary` or `text-primary`), and the values for `contentSize` and `wideSize` are available for setting `max-width` with either `max-w-content` or `max-w-wide`.

## Tailwind Typography

To support [Tailwind Typography](https://github.com/tailwindlabs/tailwindcss-typography), Hefty_Starter_Theme uses a fork of Tailwind Typography that adds support for the WordPress block editor while also automatically applying Tailwind Typography’s `h1` styles to post titles regardless of their heading level. (This is most relevant on archive pages, where titles will be `h2` elements.)

A selection of Tailwind Typography’s configuration options are included in a separate `tailwind-typography.config.js` file, with a number of comments explaining the rationale for what was included and why changes were made.

## Tailwind plugins

Tailwind’s first-party plugins are automatically installed when you run npm install, but they won’t be active until you uncomment the appropriate line or lines in the plugins block of your tailwind.config.js file.

## Using Browsersync

Because your development environment may have its own approach to Browsersync-like functionality, [Browsersync](https://browsersync.io/) is not included by default. You can install it as follows (in the same place you ran `npm install` earlier):

```sh
npm install browser-sync --save-dev
```

Assuming a development environment like [VVV](https://varyingvagrantvagrants.org), you can use Browsersync’s proxy mode with the local `.test` domain by adding the following line to the `scripts` section of your `package.json` file alongside the other `watch:*` commands:

```sh
"watch:browser-sync": "browser-sync start --proxy \"development-website.test\" --files \"theme\" --no-inject-changes",
```

## Deploying to production

To package your theme as a zip archive, you can use the `bundle` command:

```sh
npm run bundle
```

This command will first execute `npm run prod` and then create a zip archive from your `theme` folder, in a zip file named using your theme slug.

The resulting theme archive can be uploaded directly to a WordPress site. Since WordPress 5.5, uploading a theme that has already been installed will result in an option to overwrite the existing theme, providing a viable path for quick deployments.

If you’d like to deploy from the command line, [Capistrano](https://capistranorb.com) is a great solution for command-line deployment of WordPress themes.
