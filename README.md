# mendeley-php
A mendeley citation style for php/html. You can use it together with <a href="https://www.mendeley.com" target="_blank">mendeley</a> to create inline numbered citations in webpages and a bibliography at the end.

##Usage
1. Import mendeley-php-style.xml as citation style in mendeley desktop.
2. Include the php script in your page (before the first citation): <?php include('mendeley-php.php'); ?>
3. Cite by right click and "Copy as formatted citation" in mendeley desktop and pasting the code into your page.
4. Add <?php printBib($references); ?> to print a numbered bibliography of the used citations.
