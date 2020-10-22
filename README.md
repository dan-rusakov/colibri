[![image](https://res.cloudinary.com/evanagee/image/upload/c_scale,w_700/v1580244758/VueWP/VWP-hero.png)](https://vuewordpress.com)

[![Tweet](https://img.shields.io/twitter/url/https/github.com/tterb/hyde.svg?style=social)](https://twitter.com/intent/tweet?text=Check%20out%20Hyde!%20%E2%9C%A8%20An%20accessible,%20open-source%20markdown%20editor%20for%20any%20user%20E2%9C%A8%20https://github.com/tterb/hyde%20%F0%9F%A4%97) [![Twitter Follow](https://img.shields.io/twitter/follow/VueWord.svg?style=social)](https://twitter.com/VueWord)

- [VueWordPress Theme Starter](#vuewordpress-theme-starter)
  - [Features](#features)
  - [Getting started](#getting-started)
  - [Video Training](#video-training)
  - [Code Organization](#code-organization)
  - [New to Vue?](#new-to-vue)
  - [External References](#external-references)
  - [Features coming soon:](#features-coming-soon)
- [Changelog](#changelog)

# VueWordPress Theme Starter

A true WordPress theme with the guts ripped out and replaced with Vue. **Looking to create a Vue-powered WordPress plugin? [I've got a starter for that too!](https://github.com/EvanAgee/vuejs-wordpress-plugin-starter)**

**Who's this for?** When I started diving into using Vue in WordPress I found plenty of great starters for headless WordPress, but I had the added constraint of needing to run the front and backend on the same host, thus this project was created.

**Need help? [Join the VueWordPress Slack](https://join.slack.com/t/vuewordpress/shared_invite/enQtMjg5NzAzMzY5Mzk0LTk2YjljNmIxZDk2Y2IzNDc2NzI3M2M3M2FhNjJkZjE5YWNhNmU5OWExZjI5YjRiMjcwYzk3ZWViMWIyMWE1MDY).**

## Features

- [Tailwind](https://tailwindcss.com/) is built in! If you don't want Tailwindcss in your project you can easily disable it by removing the import statement in `styles.css`.
- **Hot reloading/browsersync** for local development.
- [VueRouter](https://github.com/vuejs/vue-router) integrated
- [Vuex](https://github.com/vuejs/vuex) integrated (with sample WordPress-centric modules)
- [Axios](https://github.com/axios/axios) for API requests
- Follows the development guidelines/structure set forth by Vuejs
- Bare essentials needed for a functional WordPress theme
- All requests are redirected back to the index.php so your Vue routing is respected.
- PostCSS baby

## Getting started

[![Watch the getting started video](https://res.cloudinary.com/evanagee/image/upload/c_scale,w_1000/v1580251167/VueWP/getting-started-youtube2.jpg)](https://www.youtube.com/watch?v=xF-ZVrk7N5g)

1. **Clone the repo** inside of your `wp-content/themes/` directory
2. **Navigate to the theme directory in your terminal** and run
   `npm install`
   `npm run watch` for development
   `npm run build` when you're ready to deploy the theme.
3. **Activate the theme** in your WordPress instance.
4. **Update your permalink settings** `(Settings -> Permalinks)` to be **"Day and name"**. If you don't want to use this setting you'll need to update the Vue router so it can find your content correctly. Please note that if you want to use a different permalink structure you'll need to update `./src/router/index.js` so it looks for the correct path.
5. Boom.com!

Since by default Tailwind completely resets all styles/spacing, there are a few initial styles I've provided in `src/assets/css/_tailwind.css` to make things appear more like you'd expect. Modify to your liking!







