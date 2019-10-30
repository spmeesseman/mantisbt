# ProjectPages MantisBT Plugin

![app-type](https://img.shields.io/badge/category-mantisbt-blue.svg)
![app-lang](https://img.shields.io/badge/language-php-blue.svg)
[![app-publisher](https://img.shields.io/badge/%20%20%F0%9F%93%A6%F0%9F%9A%80-app--publisher-e10000.svg)](https://github.com/spmeesseman/app-publisher)
[![authors](https://img.shields.io/badge/authors-scott%20meesseman-6F02B5.svg?logo=visual%20studio%20code)](https://github.com/spmeesseman)

- [ProjectPages MantisBT Plugin](#projectpages-mantisbt-plugin)
  - [Description](#description)
  - [Changes](#changes)
  - [DokuWiki Changed File List](#dokuwiki-changed-file-list)
  - [Supporing Font Awesome Pro](#supporing-font-awesome-pro)

## Description

This is a fork of the v2.21.1 [MantisBT project](https://github.com/mantisbt/mantisbt) with my own flavor.

## Changes

|Change|Files|
|---|---|
|Fix sidebar active page highlight|core/layout_api.php|
|Add sidebar-scroll-native class to sidebar|core/layout_api.php|
|Add customized by label|core/layout_api.php|
|Increased mantis logo size to fill space|core/layout_api.php|
|Increse default sidebar width|css/ace-mantis.css, css/ace.css|
|Sidebar overflow-y changed to auto|css/ace-mantis.css, css/ace.css|
|Dynamic width sidebar based on overflow|js/common.js|
|Dynamic width sidebar based on manu min/max sidebar-toggle()|js/common.js|
|Modified wiki link handling using IFramed plugin|wiki.php|
|Add option to use project_name in set_project url|set_project.php|
|Add buttons in changelog and roadmap pages for ganttchart|changelog_page.php, roadmap_page.php|
|Use FontAwesome Pro icons|css/ace.css, js/ace.js|
|Remove redundant text 'Manage' from all management tabs|lang/strings_english.txt|
|Add jpgraph library (for GanttChart)|library/jpgraph/*|
|Add #function_default_to_value to CUSTOM_FIELD_TYPE_STRING|core/cfdefs/cfdef_standard.php|
|Add technician user type|core/constant_inc.php, strings_english.txt|
|Add check for $g_relationships[$p_relationship_type]['#name']|core/relationship_api.php|
|Send status change email instead of assigned to ~ 821|core/bug_api.php|
|Add category to email subject ~ 1457|core/email_api.php|

## DokuWiki Changed File List

- /conf/acl.auth.php
- /inc/auth/mantis.class.php
- /lib/plugins/mantis/syntax.php
- /lib/tpl/dokuwiki/style.ini
- /lib/tpl/dokuwiki/css/basic.less
- /lib/tpl/dokuwiki/images/page-background.svg
- /lib/tpl/dokuwiki/main.php
- /vendor/geshi/geshi/src/geshi.php

## Supporing Font Awesome Pro

A [standard license](https://fontawesome.com/plans/standard) is of course needed, at a more than fair price (at times on sale as well).  

Add to the mantisbt css directory:

- css/font-awesome-pro-5.9.0.min.css
- css/font-awesome-pro-v4shims.min.css

Add to the mantisbt js directory:

-js/font-awesome-pro.js

Add to config_inc.php custom_headers:

    $g_custom_headers = array("Content-Security-Policy: style-src https://kit-pro.fontawesome.com/ 'self'; script-src https://kit.fontawesome.com/ 'self'");

Add to config_inc.php scripts_included (undocumented):

    $g_scripts_included = array( 'font-awesome-pro.js' );

This will effectively override the default font-awesome icons and use the "Regular" version of the pro set of icons.  The icon set used can be specified with the icon itself, for example to use an icon from the **Brand** icon set:

    fab fa-readme

Or for example an icon from the **Light** icon set:

    fal fa-spider
