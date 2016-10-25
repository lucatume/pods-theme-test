Testing a WordPress theme relying on the [pods framework](http://pods.io/ "Home - Pods Framework") with [wp-browser](https://github.com/lucatume/wp-browser "lucatume/wp-browser · GitHub").

Some things to note here:

* in the `tests/integration.suite.yml` file I'm loading and activating `pods/init.php` before the tests
* in that same file I'm loading a test configuration file to make my theme the active one, the `test/tests-config.php` file
* the `tests/tests-config.php` file sets the `stylesheet` and `template` options to match my theme slug; here I've used a child theme of `twentysixteen` but if my theme slug was `foo` I'd set both to `foo`
* the tests are located in the theme root folder and bootstrapped using `wpcept bootstrap`
