<?php

Kirby::plugin('my/page-methods', [
  'pageMethods' => [
    'displayIcon' => function () {
      return $this->page_icon()->toFile() ?? $this->image();
    }
  ]
]);