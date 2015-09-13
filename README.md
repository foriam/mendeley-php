# mendeley-php
A mendeley citation style for php/html. Lets you use mendeley to create citations in webpages with an inline numbered style and a bibliography at the end.

##Usage
1. Import mendeley-php-style.xml as citation style in mendeley desktop
2. Include the php script in your page (before the first citation): <?php include('mendeley-php.php'); ?>
3. Cite by right click and "Copy as formatted citation" in mendeley desktop and pasting the code into your page.
4. Add <?php printBib($references); ?> to print a numbered bibliography of the used citations.
