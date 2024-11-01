=== Plugin Name ===
Contributors: fishbytes
Donate link: http://www.waikikiaquarium.org
Tags: federal, state, holidays, cultural, observances, US, Hawaii, Hawaiian, public, observed, dates, calendar, year
Requires at least: 4.7
Tested up to: 5.8
Requires PHP: 5.2
Stable tag: trunk
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Add the full calendar date for many U.S. and Hawaiian holidays in your posts easily with just the name of the day.

== Description ==

Show Date for Holiday's Name quickly calculates and shows the full date of major U.S. holidays for the current calendar year. Add the full date notation for many U.S. Federal holidays, Hawaiian state holidays, and various cultural observances in your posts easily with just the name of the day. For federal and state public holidays that may land on a weekend, you can choose to display the actual date of the holiday or the designated observed weekday date.

== Installation ==

In most cases you can install automatically from WordPress.

However, if you install this manually, follow these steps:

1. Upload the entire *show-date-for-days-name* folder to the /wp-content/plugins/ directory. 
2. Activate the plugin through the 'Plugins' menu in WordPress. 

FYI: There is no "control panel" for this plugin.

== Frequently Asked Questions ==

= What holidays are recognized by the plugin? =

An example of the shortcode and attributes for this plugin are as follows: 

[showdatefor name="holiday" date="observed"]

Shortcode *attributes* have changed with version 1.3.

The *date* attribute should be set to [ actual | observed ]. The default is the actual date of the holiday for the calendar year. Observed is for the transposed date that public holidays that have been given for the current calendar year to give worker's time off.

The *name* attribute should be set to one of the following public holiday and cultural observances codes that are recognized by this plugin: 

The following list of codes are available to generate current *US Federal holiday dates*:
 
* newyearsday 
* nextnewyearsday 
* martinlutherkingjrday 
* valentinesday
* washingtonsbirthday
* presidentsday 
* saintpatricksday
* goodfriday
* easter
* arborday
* mothersday
* memorialday 
* fathersday
* juneteenth
* independenceday 
* laborday 
* columbusday 
* discoverersday
* halloween
* electionday
* veteransday 
* thanksgiving 
* christmaseve
* christmas
* xmas 

The following list of additional codes are available to generate current *Hawaiian state holiday dates and other cultural observances*:
 
* girlsday 
* hinamatsuri 
* princekuhioday 
* mayday 
* leiday 
* boysday 
* tangonosekku 
* kamehamehaday
* tanabatafestival  
* admissionsday 
* statehoodday 
* honolulumarathon 

If you have any further questions, please submit them [to the support forum.](http://wordpress.org/support/plugin/show-date-for-days-name "to the support forum.")

== Changelog ==

= 1.3 =
* Added goodfriday, washingtonsbirthday, and juneteenth federal holidays
* Revised code base
* Changed attributes to enable new functionality
* Added observed vs. actual for federal and state public holidays

= 1.2 =
* Added juneteenth federal holiday

= 1.1 =
* Small bug fixes
* Added more dates
* Refactored for unique function names

= 1.0 =
* Initial launch of the plugin

== Upgrade Notice ==

= 1.3 =
* Added goodfriday, washingtonsbirthday, and juneteenth federal holidays
* Revised code base
* Changed attributes to enable new functionality
* Added observed vs. actual for federal and state public holidays
