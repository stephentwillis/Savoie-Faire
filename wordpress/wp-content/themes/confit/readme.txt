== Menu Download ==

Confit is focused on fiting the needs of restaurants and cafés. As such you can upload a menu in the Theme Customizer and display it with the Menu page template as a download link.

== Changelog ==

= 29 March 2016 =
* Add .screen-reader-text class; Bump version number.

= 24 March 2016 =
* Add 'page-template-page-menu-php' class to a page with 'menu' slug to properly style menu items.

= 20 August 2015 =
* Add text domain and/or remove domain path.

= 11 August 2015 =
* Remove stray `</textarea>` tag.

= 10 August 2015 =
* Delete unused `forms` folder.
* Correctly capitalize `WP_Widget`.
* Refactor widget for secure saving to the database and improved escaping on output.
* Use `esc_url_raw()` instead of `esc_url()` in the `build_element()` method.
* Escape the URL of the script embed output in the widget.
* Use a string as a text domain, and not a member variable.
* Remove unnecessary loading of the Plugins API in the Open Table Widget.

= 7 August 2015 =
* edits to Open Table widget for better script parsing and output.

= 22 July 2015 =
* Version bump to be consistent with dotorg update.

= 15 July 2015 =
* Always use https when loading Google Fonts. See #3221;

= 9 July 2015 =
* remove dotcom method of adding Nova CPT support. Already uses Jetpack method.

= 7 July 2015 =
* updating description in style.css to make more generic for use on .com and .org

= 19 June 2015 =
* Added sanitization callback for customizer settings.

= 5 June 2015 =
* update escaping.
* update escaping.

= 4 June 2015 =
* adding missing attr, url escaping;

= 1 May 2015 =
* Add support for Testimonial CPT.

= 17 December 2014 =
* Allow tablets to access submenu items in the site navigation.

= 2 November 2014 =
* Add Jetpack prefixing to Site Logo template tags.

= 23 July 2014 =
* change theme/author URIs and footer links to `wordpress.com/themes`.

= 21 July 2014 =
* Better UK with Customizer with postMessage method and preview JS.
* Add theme support for Site Logo.

= 17 July 2014 =
* Add "Business" theme tag.

= 3 July 2014 =
* avoid fatal error when requiring include file and it does not exist. Will help avoid PHP errors where functions.php loads during a theme switch.

= 1 June 2014 =
* add/update pot files.

= 15 May 2014 =
* Split site footer credits onto two lines at small screen sizes.

= 11 March 2014 =
* Ensure title attribute is not duplicated for the_title().

= 26 February 2014 =
* Change text strings to reduce theme string proliferation. Replace "(Edit)" by "Edit".

= 19 December 2013 =
* Ensure get_post_meta output is properly escaped.

= 13 December 2013 =
* Add proper escaping to post meta.

= 6 December 2013 =
* update Width terms to Layout.

= 28 November 2013 =
* Remove private P2 link from the very public Confit theme repo.

= 21 November 2013 =
* Move Jetpack Nova CPT support to jetpack.php.
* Reverting [15637] as menu support no longer works.
* Move Jetpack Nova CPT support call to jetpack.php

= 20 November 2013 =
* Correct version number to the latest 1.0.2.
* Update readme.txt changelog to include version 1.0.1 and 1.0.2.

= 19 November 2013 =
* Add support for the Nova Custom Post Type (food menus).

= 1 November 2013 =
* Flush rewrite rules for the food menus CPT;

= 15 October 2013 =
* Change Full Page Background Image to Disable Full Page Background Image so it doesn't affect old blogs using Confit. Now user can tick the option if he/she doesn't want the full page background image.

= 14 October 2013 =
* Add a background-size: cover; Theme Option.

= 5 August 2013 =
* Fix theme URIs.
* fix Theme URI
* update author in footer and stylesheet.
* Multiple changes, see #1456, #1845, #1612:

= 24 July 2013 =
* Remove debug cruft.
* Remove hardcoded inclusion of wpcom.php and some functions.php cleanup.

= 16 July 2013 =
* remove /extend from WP.org directory URLs.

= 11 July 2013 =
* Move away from using deprecated functions and improve compliance with .org theme review guidelines.

= 12 April 2013 =
* update `TypekitData` upgrade checks to use `CustomDesign::is_upgrade_active()` instead.

= 22 February 2013 =
* Replace wp_reset_query() with wp_reset_postdata();

= 7 February 2013 =
* Set the wrapper width explicity for RTL. It appears that the width gets really narrow without it when the content is really short and written in RTL.

= 11 January 2013 =
* Make sure comment meta does not overlap comment content.

= 3 January 2013 =
* Changes in preparation for submission to Extend:
* Use a filter to modify the output of wp_title().

= 12 December 2012 =
* Clean up the way the theme registers Google Fonts.

= 3 December 2012 =
* Remove `word-wrap: break-word;` and hypenations from several broad scope selectors and narrow the scope for some of them becuase we've

= 29 November 2012 =
* Enlarge the search field width in the widget for better appearance.

= 28 November 2012 =
* OpenTable. Added spacing according to coding guidelines.
* Prevent stats images to break the layout.
* Refs #4370.  Removes the local copy of the contact-info widget from the confit theme in favor of using the global version.
* Minor style tweak.

= 27 November 2012 =
* Remove unneeded old theme options related code.
* Remove unneeded reference because there is no theme options page anymore.
* Move the theme option to the customizer.

= 26 November 2012 =
* fix PHP short tags.
* Add theme description.
* Remove unneeded file.

= 23 November 2012 =
* Fix a typo

= 21 November 2012 =
* Proper way to use the :not selctor for multiple classes.
* Style tweaks fo the Open Table widget.
* Mobile detection with a core function.
* Tweaks for mobile devices.
* Add support for RTL.
* Style tweak for buttons and responsive image.

= 20 November 2012 =
* Style tweak for input elements
* Add support for Infinite Scroll.

= 19 November 2012 =
* Remove readme.txt and add languages folder.
* Menu Item post type.
* Tweaks and clean up.
* Tweak Open table widget styling.

= 12 October 2012 =
* is_mobile() has been renamed jetpack_is_mobile(), and is_ipad() has been renamed Jetpack_User_Agent_Info::is_ipad().

= 29 September 2012 =
* Typography adjustments.

= 28 September 2012 =
* Add a new post thumbnail size for mobile background because featured image backgrouund only needs to be 1024px height for mobile and this could reduce bandwidth.
* Covered background image for mobile devices. This is because background-attachemnt: fixed doesn't work on iPad or iPhone.

= 27 September 2012 =
* First pass of re-doing responsive style and clean up some files.

= 26 September 2012 =
* Removed widont filter from post/page titles because of the nature of the design.
* Word wrapping for site title, site description, and navigation because Confit has limited space for them.
* Cosmetic adjustments.
* Override $content_width for all content templates because the default $content_width needs to be huge (1600px) for resizable background image.
* Modified post meta info because there is no need to print posting date for sticky posts. Print "Featured" instead.

= 21 September 2012 =
* Typography adjustments
* letter spacing tweaks

= 19 September 2012 =
* Vertical space tweaks due to the changes of the baseline from alternatekev
* Register the new Google fonts.
* Removed link color options in favor of custom design upgrade.
* Changed the default background image. This is a nicer image and more generic image of restaurants.

= 17 September 2012 =
* Don't use curl for transport, use wp_remote_get instead.

= 14 September 2012 =
* Tweak to responsive for iPad
* Remove instructions widget
* line heights, reordered contact info widget details, font updates
* Style
* Style tweaks for mobile
* remove blank css rule
* Do not use the js small menu. CSS tweaks.
* Adjusting responsive styles.
* Style
* Make $content_width larger for the background image.
* Applying changes from feedback. Props Mike :)
* opentable widget
* Loads up the comment template.
* Notes about best practices for the contact info widget
* Minor style fix.
* Icludes Confit theme instructions od dashboard props @jcakec.
* Prints food menu prices and style fix.

= 13 September 2012 =
* Fix sidebar layout issue, Style widgets, and few styling
* Actually save the price when you try to set one :)
* Make custom header admin style to matchwith the front-end.
* Make the site title smaller.
* Adding responsive CSS
* Changed the default background image.
* Fixed sidebar again and get rid of comments from food menu template.
* Sidebar fix.
* Style
* Ability to order menu sections.
* Style tweaks.
* Style tweaks.
* Added a few items for the link color options.

= 12 September 2012 =
* Adds starter text for the widget fields. Changes to 'show' vs 'hide' map, default checked. Use curl for geolookup.
* Add $themecolors and
* Add link color options.
* CSS fix for the sidebar background because it didn't work on Firefox.
* Themes can't use {{{plugins_url()}}}
* Add wp-open-table widget and enable it.
* Food Menus plugin
* Comment out Open Table Widget
* Initial import from local development
