# The Markdown Blog 

This project started out as a tutorial at Tutorialzine, and has since been a hobby project that I've maintained and experimented with.
## Tools
There are some great apps out there for web developers, in order to get this up and running I've used [Sublime Text 2](#) with an array of plugins, [CodeKit](#) and [Tower](#)

# Dependencies 

## Core Dependencies
These are what helps the blog work at it's core.

### [noodlehaus/dispatch](https://github.com/noodlehaus/dispatch)
The dispatch package is used to parse out the posts. This package is at the moment hard coded in to the core.

### [dflydev-markdown](https://github.com/dflydev/dflydev-markdown)
Since all the posts is written in markdown, we use this package in order to translate it to html. This package is added in as a submodule through git and then brought in to the core with composer.

### [suin/php-rss-writer](https://github.com/suin/php-rss-writer)
In order to get that RSS-feed so people can follow your blog we use this package. This package is also added in as a submodule through git and then brought in to the core with composer.

## Extension Dependencies
As time goes on further dependencies will be added here.

### [google/code-prettify](https://code.google.com/p/google-code-prettify/)
This plugin resides within the dev/js folder, it's imported from the source files from google. Also this is what gives us syntax highlighting.
