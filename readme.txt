=== Plugin Name ===
Contributors: ihmblh
Tags: hail, storm, map, weather, roofing, pdr
Requires at least: 2.1
Tested up to: 3.4
Stable tag: 1.0.1

The Hail Reports Heatmap plugin gives web designers, weather enthusiasts, and severe weather related businesses such as roofers and paintless dent repair companies a cool, free, and easy to use map that can be used to illustrate the intensity of a hail storm in any area of the continental US.

== Description ==

[Interactive Hail Maps](http://www.interactivehailmaps.com) for Wordpress is a cool, free, and easy way to illustrate the intensity of a hail storm.  Our interactive map looks great in a blog post or a page, and is very easy to use.

Heat maps let your website visitors quickly see regions where hail was reported - the bigger the hail and the more concentrated the reports, the more intense the heat on the map.  Zoom in to see individual hail report markers with mouseover details about the report.

###HailMap Shortcode
###[hailmap]

When used without any parameters, this shortcode will render a map of the current day's hail reports.  Customize the map with the parameters below.  City and State parameters must always be used together, all others may be used alone or in conjuction with any other :

* date="m/d/yyyy" - Initialize the hail map with reports from the specified date.
* [hailmap date="4/28/2012"]

* state="mo" - Initialize the map centered on the state / city specified.  Both state and city must be specified together.
* city="saint louis"
* [hailmap state="boston" city="ma"]

* zoom="8" - Show the map zoomed in to the specified level.  Range from 4 (outer most, less detail) to 10 (inner most, more detail).  If not specified, defaults to 4 if no city/state is specified, or defaults to 8 if a city/state is specified.  Hail markers show on zoom levels 9 and 10.  
* [hailmap zoom="7"]

* hidedatenavigator="yes" - hides the three button date navigator in the header, and prevents the visitor from changing the map's date.
* [hailmap hidedatenavigator="yes"]

* hideheader="yes" - hides the header bar above the map.  The visitor will not be able to see or change the map date.
* [hailmap hideheader="yes"]

* heatonly="yes" - user this option and the map will not display the map markers - only the heatmap.
* [hailmap heatonly="yes"]


== Screenshots ==

1. Example of the Hail Map centered on St. Louis, MO from the hail storm that hit on April 28th, 2012, default zoom level for a city/state (8).  Short code: [hailmap date="4/28/2012" state="mo" city="saint louis"]
2. Example of the Hail Map centered on Dallas, TX from June 13, 2012, zoom level 9, hidedatenavigator.  Short code: [hailmap date="6/13/2012" state="tx" city="dallas" zoom="9" hidedatenavigator="yes"]
3. Example of the Hail Map not centered on any city for the hail storms of July 1, 2012.  Short code: [hailmap date="7/1/20-12"]

== Changelog ==


= 1.0.1 =
* Allow multiple maps on one page. 

= 1.0.0 =
* Initial release.