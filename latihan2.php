<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-B">
        <title>modul1 2 - tatihan 1</title>
        <style>
            .kotak {
                border: 1px solid black;
                width: 60px;
                height: 60px;
                float: left;
                margin: 2px;
                text-align: center;
                background-color: yellowgreen;
            }

            .clear {
                clear: both;
            }

            </style>
    </head>
    <body> 
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) { ?>
            <div class="kotak"><?php  echo $j ?></div>
        <?php } ?>
        <div class="clear"></div>
        <?php } ?>
    </body>
    </html>