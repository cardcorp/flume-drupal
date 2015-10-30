flume-drupal
============

A pair of modules for sending messages from Drupal to Apache Flume NG.

Install EITHER flume_nc or flume_nc_async. The async version doesn't wait for a
confirmation from Flume, so you get less impact on Drupal performance in
exchange for the risk of silently losing some messages if Flume goes down.

Requires Composer:  https://getcomposer.org/download/

Maybe someday this repo will have modules for supporting other Flume channels
besides Netcat. Pull Requests welcomed.

Brought to you by CARD.com and Sharebear.

https://www.card.com/care-bears?option=4
https://www.card.com/druplicon?option=0
