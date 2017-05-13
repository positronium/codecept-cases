# sf-two-suites-with-deprecations
A Symfony Standard Edition test case for the Codeception 2.2.5

Steps to reproduce:
<pre>
git clone https://github.com/positronium/codecept-cases.git
cd codecept-cases/sf-two-suites-with-deprecations
composer install
php vendor/codeception/codeception/codecept run
</pre>

You'll get 255 error code or `Maximum function nesting level of '100' reached` if you have Xdebug installed.

