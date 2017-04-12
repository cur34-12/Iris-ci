# Logi - An emergency services resource management system
Developed with unit based NSW State Emergency Service users in mind Logi aims to create a multifaceted data management system. The main functions sit around the marrying of users/members to equipment loans and time management. The system is build completely with user experience in mind so that minimal training or guidance is required for use from both a manager and end user perspective.

## Features
### Signon/Time Management
- Member clock on/clock off
- Visitor clock on/clock Off
- Visit/time categorisation
- Current onsite list
- Reporting/scheduled email reporting
- Barcode scanning/ID based sign-on
- Data export

### Inventory
- Equipment quantity tracking
- Barcode management of assets
- Location of assets
- Functional area of assets
- Team/Manager responsible

### Equipment Signin/Out
#### Uniform
- Logging of equiment issuing
- Logging returns
- Equipment requests
- List of current loans with which member
- Sizing/equipment preference saving

#### Ipads/Radios
- Logging of loans of specific equipment
- Email notifications if out over 24 hours
- List of current loans with which member
- Reporting and Export of data

#### Vehicles
- Driver signs out vehicle and indicated location/purpose
- Current driver contact details displayed
- Reporting and Export of data

### Transport Dashboard
 - Clone current features on transport.hornsbyses.org. 
 - Internal integration with vehicle signout

## Technology
### Data Management
Data will be managaed through a RDBMS such as:
 - MariaDB
 - MySQL
The current platform is MariaDB.

### Language and Platform
Logi is written in PHP using the MVC framework Codeigniter. Logi will run on any standard webserver and php5 combination.
