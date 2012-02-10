=== Plugin Name ===

Contributors: Rachel Baker

Tags: code, syntax, highlight

Requires at least: 3.1

Tested up to: 3.4

Stable tag: 2.0

Uses Google's Prettify with the Sunburst syntax theme to elegantly highlight code.  

== Description ==

Uses Google Code Prettify, a JavaScript module and CSS file that allows syntax highlighting of source code snippets.

This plugin contains the CSS file for the Sunburst theme syntax highlighting formatting.  You can find the other available syntax highlighting themes available in the [Code Prettify Theme Gallery](http://google-code-prettify.googlecode.com/svn/trunk/styles/index.html)


== Installation ==

1. Add onload="prettyPrint()" to your theme's body tag in header.php
2. Put code snippets in `<pre class="prettyprint">...</pre>` or `<code class="prettyprint">...</code>` and it will guess the syntax being used and highlight the code.
3. You can specify a language by specifying the language extension along with the prettyprint class.
Example:
`<pre class="prettyprint lang-html">`
  The lang-* class specifies the language file extensions.
4. Alternatively, you may use the HTML5 convention of embedding a code element.  Example: `<pre class="prettyprint"><code class="language-java">...</code></pre>
`

__File extensions supported by default include:__
    "bsh", "c", "cc", "cpp", "cs", "csh", "cyc", "cv", "htm", "html",
    "java", "js", "m", "mxml", "perl", "pl", "pm", "py", "rb", "sh",
    "xhtml", "xml", "xsl"

More information is available in the Google Code Prettify Readme: [http://google-code-prettify.googlecode.com/svn/trunk/README.html](http://google-code-prettify.googlecode.com/svn/trunk/README.html)



== Screenshots ==

![image](http://www.rachelbaker.me/sunburst-code-prettify/Sunburst-Prettify.png)




