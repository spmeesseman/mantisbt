# ProjectPages MantisBT Plugin

![app-type](https://img.shields.io/badge/category-mantisbt-blue.svg)
![app-lang](https://img.shields.io/badge/language-php-blue.svg)
[![app-publisher](https://img.shields.io/badge/%20%20%F0%9F%93%A6%F0%9F%9A%80-app--publisher-e10000.svg)](https://github.com/spmeesseman/app-publisher)
[![authors](https://img.shields.io/badge/authors-scott%20meesseman-6F02B5.svg?logo=visual%20studio%20code)](https://github.com/spmeesseman)

- [ProjectPages MantisBT Plugin](#ProjectPages-MantisBT-Plugin)
  - [Description](#Description)
  - [Changes](#Changes)
  - [Changed File List](#Changed-File-List)
  - [Supporing Font Awesome Pro](#Supporing-Font-Awesome-Pro)

## Description

This is a fork of the v2.21.1 [MantisBT project](https://github.com/mantisbt/mantisbt) with my own flavor.

## Changes

- Improved sidebar
- Modified wiki link handling
- Use project name in set_project url
- Add buttons in changelog and roadmap pages for ganttchart
- Use FontAwesome Pro icons
- Add jpgraph

## Changed File List

- core/layout_api.php
- set_project.php
- wiki.php
- css/ace.min.css
- js/ace.min.js
- changelog_page.php
- roadmap_page.php
- library/jpgraph

## Supporing Font Awesome Pro

A pro license is needed of course.  A mere $60 U.S., some well spent money.

Obtain two files and place into the mantisbt css directory.

- css/font-awesome-pro-5.9.0.min.css
- css/font-awesome-pro-v4shims.min.css

Add to the mantisbt js directory

-js/font-awesome-pro.js

Add to config_inc.php custom_headers:

    $g_custom_headers = array("Content-Security-Policy: style-src https://kit-pro.fontawesome.com/ 'self' 'unsafe-inline'; script-src https://kit.fontawesome.com/ 'self' 'unsafe-inline'");

Add to config_inc.php scripts_included (undocumented):

    $g_scripts_included = array( 'font-awesome-pro.js' );

This will effectively override the default font-awesome icons and use the "Regular" version of the pro set of icons.  The icon set used can be specified with the icon itself, for example to use an icon from the **Brand** icon set:

    fab fa-readme

Or for example an icon from the **Light** icon set:

    fal fa-spider
