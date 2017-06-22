<h2><strong>IRIS</strong> - Unit Management System</h2>
<hr/>
<h3>About IRIS</h3>
<p>Iris is a web application for managing unit level operations (in a non rescue context). Iris has three main focus
    areas:
<ul>
    <li>Logistics Management (Inventory, Operational Capability, Equipment Maintenance and Loans)</li>
    <li>Situational Awareness (Operational Dashboards, Resource Management)</li>
    <li>Timetabling/Calendaring (Unit Resources, Leave/Holidays, Duty Rosters)</li>
</ul>
</p>

<h3>Installing IRIS</h3>
<p>Iris is not currently released for general usage.

    If you wish to use the development version of Iris, it is recommended you are familiar with the setup and management
    of Apache2/Nginx and MySQL. Iris is built on the Code Igniter framework and can be installed to any standard PHP
    capable webserver and MySQL(style) database. To use the dev version of Iris:

<ol>
    <li>Install and configure Apache2/NGINX with PHP (if on Windows we recommend WAMP)</li>
    <li>Install and configure a MySQL/MariaDB database server (if on Windows we recommend WAMP)</li>
    <li>Install <a href="https://getcomposer.org">Composer</a></li>
    <li>Clone Iris from <a href="https://github.com/paralittic/iris">Github</a> into your web root</li>
    <li>Using PhpMyAdmin or your MySQL tool of choice create an empty database called iris</li>
    <li>Create a database user and password with full permissions for the iris database</li>
    <li>Import the <code>iris-structure.sql</code> file into your new database (optional: for dummy data import the
        <code>iris-sample-data.sql</code> file)
    </li>
    <li>Configure the <code>application/config/config.php</code> file to suit your environment</li>
    <li>Configure the <code>application/config/example.main_url.php</code> file to suit your environment and rename to
        <code>main_url.php</code></li>
    <li>Configure the <code>application/config/example.db_settings.php</code> file to suit your environment and rename
        to <code>db_settings.php</code></li>
    <li>Run <code>composer update</code> in the Iris root directory</li>
    <li>Configure the function <code>create_user</code> in <code>application/controllers/Examples.php</code> to give
        yourself a login
    </li>
    <li>Write the rest of this list!</li>
</ol>
</p>

<h3>Contributing to IRIS</h3>
<p>Thank you for considering contributing to the Iris! Feel free to fork the project in Github or to join the
    discussion, send us an email at ross.wallace@memeber.ses.nsw.gov.au.</p>

<h3>Security</h3>
<p>If you discover a security vulnerability within Iris, please send an e-mail to Ross Wallace at
    ross.wallace@member.ses.nsw.gov.au. All security vulnerabilities will be promptly addressed.</p>

<h3>License</h3>
<p>Iris is open-sourced software licensed under the <a href="http://opensource.org/licenses/MIT">MIT license</a>.</p>