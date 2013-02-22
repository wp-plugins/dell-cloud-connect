=== <%= pluginName %> ===
Contributors: mattlsmith, clintonb11
Tags: <%= tags %>
Requires at least: 3.0
Tested up to: 3.3
Stable tag: <%= version %>

<%= pluginName %> is a widget/plugin that helps connect <%= descriptor %> blogs around the World.

== Description ==

<%= pluginName %> is a widget/plugin that helps connect <%= descriptor %> blogs blogs around the World. The widget is a content aggregator for <%= descriptor %> blog articles. The aggregator takes content from the highest quality <%= descriptor %> blogs and presents the titles and a brief summary within the widget.

The widget has a special crawler that goes to a pre-set list of <%= descriptor %> blogs that are selected based on content quality. It then takes the title of the latest articles written by that blog and populates the widget sitting on the installer's website. Articles within the widget are then ranked based on a variety of social media factors to present only the best freshest articles.

The goal of <%= pluginName %> it to help users and publishers to discover new content and readers.

For more information, see <%= url %>

== Installation ==

1. Upload the `<%= widgetFolder %>` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add the <%= pluginName %> widget to your sidebar through the `Appearance->Sidebar` menu

== Frequently Asked Questions ==

= Which blogs are included? =

We have hand-picked a selection of industry leading blogs to populate the widget.

= Can I exclude certain blogs? =

Yes, in the WordPress admin panel, click on Settings-><%= menuTitle %> and you can choose to not include any of the blogs on our list.

= Will this affect my website's loading time? =

No, we use asyncronous javascript to load the article list from our servers, so your page loads as snappy as ever.


== Changelog ==

= 0.2.2 =
* Style Updates
* Fixed upgrade bug

= 0.2.1 =
* Updated JavaScript file 
* Match WP plugin guidelines

= 0.2.0 =
* Added ability to add blog roll blogs to the widget
* Moved settings page to the default wordpress settings menu
* Added tabs for easier navigation in admin settings page

= 0.1.4 =
* Added categories to blog list
* Improved loading time

= 0.1.3 =
* Updated styling
* Added an save button for updating your feed instantly

= 0.1.2 =
* Moved additional settings into the admin panel.
* Added new blogs

= 0.1.1 =
* Small bug fixes

= 0.1.0 =
* First version