# php-shape

This is a project to test my own PHP coding skills

# How to execute

```
php index.php rectangle 1 2
```

php = The command, being php 7+
index.php = Script
rectangle = Type of the shape, possible options are rectangle, circle and shape
1 = Length when rectangle/shape, or radius when circle
2 = Width when rectangle/shape, or ignored when circle

## How to Test

```
./vendor/bin/phpunit tests.php
```

### Trying mocking Shape static

It was possible to mock static methods using older versions of PHPUnit, but they've removed this possibility since it's seen as a security breach, in order to mock the static method I would have to make the use of Mockery or any other testing library.