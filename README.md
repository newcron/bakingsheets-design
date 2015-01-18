This is the wordpress theme for bakingsheets.de (the baking blog from my wife).

# Structure
### CSS
CSS is generated out of LESS files. All of those files can be found in `assets`. The main File is `assets/bakingsheets.less`.
All image resources referred to will be inlined during the build to have minimum overhead on page speed.

In the build, they will be merged together into `app-optimized/style.css`.

The CSS is structured according to [SMACSS](https://smacss.com). All modules are included in the auto generated living
styleguide (using [KSS](https://github.com/kneath/kss)). The styleguide can be found at `app-optimized/styleguide`.

### Images
SVG images are preferred. they are supposed to be stored in `assets`.

### Javascript
Javascript files can be found at `src/js`. All js files are expected to be commonJS modules.
They will be merged together using [Browserify](browserify.org) to `app-optimized/app.js`.

### PHP
Can be found in `src/php` and will be copied to `app-optimized/` during the build.

# Build
To build the design, you will need grunt installed. then execute in this directory:

```
npm install
grunt
```

The complete generated wordpress theme will be written to the `app-optimized` folder. This folder contains the content
of the wordpress plugin.

