Creating a WordPress Theme from Static HTML

This theme supports the 12th part of this series for wptutsplus.

The theme includes the following template files:
index.php
page.php - for static pages
archive.php - for archive pages
header.php
sidebar.php
footer.php

The theme supports featured images, menus and widgets and uses them as follows:

Featured images:
These are displayed in the archive and index templates if they are praesnt, using the medium size.

Menus:
The default menu is in header.php, and uses the Menus admin

Widgets:
There are 6 widget areas:
In Header Widget Area - in the header, to the right (header.php)
Sidebar Widget Area - in the sidebar (sidebar.php)
First Footer Widget Area - in the footer (footer.php)
Second Footer Widget Area - in the footer (footer.php)
Third Footer Widget Area - in the footer (footer.php)
Fourth Footer Widget Area - in the footer (footer.php)
If widget areas are not populated by widgets they do not output any code.

Styling
The theme uses Object Oriented CSS (OOCSS). The following clases are for layout and you can use them in your pages and posts.
They are responsive, so will resize on smaller screens (for example the .half class is full width on phones)
.full-width
.three-quarters
.two-thirds
.half
.third
.quarter
