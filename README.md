## About Iris

Iris is a web application for managing unit level operations (in a non rescue context). Iris has three main focus areas:

- Logistics Management (Inventory, Operational Capability, Equipment Maintenance and Loans)
- Situational Awareness (Operational Dashboards, Resource Management)
- Timetabling/Calendaring (Unit Resources, Leave/Holidays, Duty Rosters)

## Using Iris

Iris is not currently released for general usage.  

If you wish to use the development version of Iris, it is recommended you are familiar with the setup and management of web server and database. Iris is built on the [Code Igniter](https://codeigniter.com/) framework and can be installed to any standard PHP capable webserver and MySQL(style) database. To use the dev version of Iris:

1. Install and configure [Apache2](https://httpd.apache.org/) or [NGINX](https://nginx.org/en/) with [PHP56](http://php.net/)
2. Install and configure [MySQL](https://www.mysql.com/) or [MariaDB](https://mariadb.org/)
3. Install [Composer](https://getcomposer.org/)
4. Clone Iris from [Github](https://github.com/hbyses/Iris/) into your webroot
5. Using [PhpMyAdmin](https://www.phpmyadmin.net/) or your MySQL editor of choice create an empty database called `iris`
5. Import the `migrations/iris-structure.sql` file into your new database (optional: for dummy data import the `migrations/iris-sample-data.sql` file)
6. Configure `application/config/main_url.php` file to suit your environment
7. Configure `application/config/db_settings.php` file to suit your environment
8. Run `composer update` in the Iris root directory
9. Start your web server and database server
10. Navigate in your web browser to the url you configured in step 6

## Contributing

Thank you for considering contributing to the Iris! Feel free to fork the project in Github or to join the discussion, send us an email at ross.wallace@memeber.ses.nsw.gov.au.

## Security Vulnerabilities

If you discover a security vulnerability within Iris, please send an e-mail to Ross Wallace at ross.wallace@member.ses.nsw.gov.au. All security vulnerabilities will be promptly addressed.

## License

Iris is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
