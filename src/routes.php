<?php

Route::get(
  'timezones/{timezone?}',
  'r_blaster\rtimezones\TimezonesController@index'
)->name('display.time');
