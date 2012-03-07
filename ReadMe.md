=== Plugin Name ===

Contributors: Rachel Baker

Tags: code, syntax, highlight

Requires at least: 3.1

Tested up to: 3.4

Stable tag: 2.1.6

Uses Google's Prettify with the Sunburst syntax theme to elegantly highlight code.  

== Description ==

Uses Google Code Prettify, a JavaScript module and CSS file that allows syntax highlighting of source code snippets.

This plugin contains the CSS file for the Sunburst theme syntax highlighting formatting.  You can find the other available syntax highlighting themes available in the [Code Prettify Theme Gallery](http://google-code-prettify.googlecode.com/svn/trunk/styles/index.html)


== Installation ==

1. Wrap code snippets in `[prettify][/prettify]` shortcode and it will guess the syntax being used and highlight the code.

2. You can specify a language by specifying the language extension inside the shortcode.
Example:
`[prettify class="lang-html"]...[/prettify]`
  The lang-* class specifies the language file extensions.

__File extensions supported by default include:__
    "bsh", "c", "cc", "cpp", "cs", "csh", "cyc", "cv", "htm", "html",
    "java", "js", "m", "mxml", "perl", "pl", "pm", "py", "rb", "sh",
    "xhtml", "xml", "xsl"

More information is available in the Google Code Prettify Readme: [http://google-code-prettify.googlecode.com/svn/trunk/README.html](http://google-code-prettify.googlecode.com/svn/trunk/README.html)



== Screenshots ==

![image](http://www.rachelbaker.me/sunburst-code-prettify/Sunburst-Prettify.png)


== Changelog ==

= 2.1.6 =
* Added plain text color to CSS file
* Adjusted spacing in CSS file
* Updated copyright year in plugin.php file

= 2.1.5 =
* Added CSS parsing js file
* Moved JS files into /js folder
* Fixed missing files from 2.1 commit

= 2.1 =
* Added [prettify] shortcode
* Automatically added the required onload="prettyPrint()" to body tag with jquery

= 2.0 =
* Initial WordPress.org commit







