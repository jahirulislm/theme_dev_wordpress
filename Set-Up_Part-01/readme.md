#Follow this link->
https://developer.wordpress.org/themes/getting-started/quick-start-guide/

##Files and folders
####WordPress themes are nothing more than a collection of various files that rely on different web technologies, such as HTML, CSS, and PHP. Block themes also follow a standard structure in how many of those files are laid out.

####At its most basic, a theme’s structure will look similar to the following. Take note of the files/folders marked required because they are necessary for a block theme to work:

*parts/
*footer.html
*header.html
*patterns/
*example.php
*styles/
*example.json
*templates/
*404.html
*archive.html
*index.html (required)
*singular.html
*README.txt
*functions.php
*screenshot.png
*style.css (required)
\*theme.json

## Header Fields

- Theme Name: Fabled Sunset
- Theme URI: https://example.com/fabled-sunset
- Description: Custom theme description...
- Version: 1.0.0
- Author: Your Name
- Author URI: https://example.com
- Tags: block-patterns, full-site-editing
- Text Domain: fabled-sunset
- Domain Path: /assets/lang
- Tested up to: 6.4
- Requires at least: 6.2
- Requires PHP: 7.4
- License: GNU General Public License v2.0 or later
- License URI: https://www.gnu.org/licenses/gpl-2.0.html

##Child theme header fields

- Theme Name: Grand Sunrise
- Template: fabled-sunset
- ...other header fields

##Template files

####WordPress expects template files to be located under the /templates folder in your theme. A typical theme will have several templates, which would be organized like this:

*templates/
*404.html
*archive.html
*author.html
*index.html (required)
*page.html
*single.html
*search.html

##Template parts
####WordPress looks for template parts in your theme’s /parts folder, which should be organized like this:

*parts/
*header.html
\*footer.html
