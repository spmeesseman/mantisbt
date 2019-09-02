@echo off

cd %dp0%

set BASEDIROLD=..\2.21.1
set BASEDIRNEW=..\2.22.0

echo Copy plugins
xcopy %BASEDIROLD%\plugins\* %BASEDIRNEW%\plugins /s /i /y

echo Copy jpgraph
xcopy %BASEDIROLD%\library\jpgraph\* %BASEDIRNEW%\library\jpgraph /s /i /y

echo Copy config/config_inc.php
copy /Y %BASEDIROLD%\config\config_inc.php %BASEDIRNEW%\config

echo Copy core/layout_api.php
copy /Y %BASEDIROLD%\core\layout_api.php %BASEDIRNEW%\core

echo Copy css/ace-mantis.css
copy /Y %BASEDIROLD%\css\ace-mantis.css %BASEDIRNEW%\css

echo Copy css/ace.css
copy /Y %BASEDIROLD%\css\ace.css %BASEDIRNEW%\css

echo Copy js/common.js
copy /Y %BASEDIROLD%\js\common.js %BASEDIRNEW%\js

echo Copy js/ace.js
copy /Y %BASEDIROLD%\js\ace.js %BASEDIRNEW%\js

echo Copy wiki.php
copy /Y %BASEDIROLD%\wiki.php %BASEDIRNEW%

echo Copy set_project.php
copy /Y %BASEDIROLD%\set_project.php %BASEDIRNEW%

echo Copy changelog_page.php
copy /Y %BASEDIROLD%\changelog_page.php %BASEDIRNEW%

echo Copy roadmap_page.php
copy /Y %BASEDIROLD%\roadmap_page.php %BASEDIRNEW%

echo Copy lang/strings_english.txt
copy /Y %BASEDIROLD%\lang\strings_english.txt %BASEDIRNEW%\lang

echo Copy core/cfdefs/cfdef_standard.php
copy /Y %BASEDIROLD%\core\cfdefs\cfdef_standard.php %BASEDIRNEW%\core\cfdefs
