<head>
	<title>About - Logi</title>
</head>
<h2>Logi - An emergency services resource management system</h2>
<p>Developed with unit based NSW State Emergency Service users in mind Logi aims to create a multifaceted data management system. The main functions sit around the marrying of users/members to equipment loans and time management. The system is build completely with user experience in mind so that minimal training or guidance is required for use from both a manager and end user perspective.</p>
<h3>Functional Areas</h3>
<h4>Sign-on/Time Management</h4>
Track and manage the time onsite and time type of members. Facilitates the reporting of activity and attendance and automated reporting.
<h5>Planned</h5>
<ul>
<li>Member clock on/clock off</li>
<li>Visitor clock on/clock Off</li>
<li>Visit/time categorisation</li>
<li>Currently onsite list</li>
<li>Reporting/scheduled email reporting</li>
<li>Barcode scanning/ID based sign-on</li>
<li>Data export (xls/csv)</li>
<li>Dashboard for operations screens to view members onsite and rank/skill level</li>
</ul>
<h5>In Progress</h5>
<ul>
<li>None yet</li>
</ul>
<h5>Completed</h5>
<li>None yet :(</li>

<h4>Inventory</h4>
<p>Track and manage the movement, allocation and level of inventory held in the unit through the use of barcoding. </p>
<h5>Planned</h5>
<ul>
<li>Team/Manager responsible</li>
<li>Reporting and export</li>
<li>Automatic notifications of stock reductions</li>
<li>Inspection management and scheduling</li>
<li>Logging of loans of specific equipment</li>
<li>Email notifications if out over 24 hours</li>
<li>List of current and historical loans with which member</li>
</ul>
#### In Progress
- Equipment quantity tracking
- Barcode management of assets
- Location of assets
- Functional area of assets
#### Completed
- None yet :(

### Q Store
Management of loans and issuing of equipment to members.
#### Planned
- Logging of equiment issuing
- Logging returns
- Equipment requests
- List of current loans with which member
- Sizing/equipment preference saving
- Reporting on equipment issue activity
#### In Progress
- None yet :(
#### Completed
- None yet :(

### Vehicles
Complete replacement of current paper vehicle management system.
#### Planned
- Vehicle sign out and indicated location/purpose
- Current driver contact details displayed
- Issue management with vehicles
- Mapping against AEL/Vehicle equipment lists
- Odometer and Purpose tracking (replace paper method)
- Reporting and Export of data
#### In Progress
- None yet :(
#### Completed
- None yet :(

## Software Features
### User Authentication
- Authenticated against a locally managed user database
- Various access levels and permissions
- User activity history to view user actions

### Data Management
Data will be managaed through a RDBMS such as:
- MariaDB
- MySQL
The current platform is MariaDB.

### Multiplatform
Logi will also be developed for:
- [Windows](https://github.com/paralittic/Logi-Client)
- OSX
- iOS
- Android

### Language and Platform
Logi is written in PHP using the MVC framework Codeigniter. Logi will run on any standard webserver and php5 combination.

</xmp>