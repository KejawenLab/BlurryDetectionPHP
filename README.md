# Blurry Detection PHP using ImageMagick

This package is PHP version of [BlurryDetection](https://github.com/KejawenLab/BlurryDetection) that written in Golang

## Requirements

- PHP 7.1
  
- ImageMagick

## How to Use

```phpregexp
(new Blurry())->isBlurry(sprintf('%s/tests/assets/update.png', __DIR__));
```

## Test

```bash
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/BlurryTest.php
```
