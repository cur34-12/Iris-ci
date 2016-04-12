# Emergency Services Resource Management System (ESRMS)
Developed with unit based NSW State Emergency Service users in mind ESRMS aims to create a multifaceted data management system. The main functions sit around the marrying of users/members to equipment loans and time management. The system is build compeltley with user experience in mind so that minimal training or guidance is required for use from both a manager and end user perspective.

##Features
###Signon/Time Management
- Member clock on/clock off
- Visitor clock on/clock Off
- Visit/time categorisation
- Current onsite list
- Reporting/scheduled email reporting
- Barcode scanning/ID based sign-on
- Data export

###Equipment Signin/Out
####Uniform
- Logging of equiment issueing
- Logging returns
- Equipment requests
- Sizing/equipment preference saving

####Ipads/Radios
- Logging of loans of specific equipment
- Email notifications if out over 24 hours
- List of current loans with which member
- Reporting and Export of data

####Vehicles
- Driver signs out vehicle and indicated location/purpose
- Current driver contact details displayed
- Reporting and Export of data

###Transport Dashboard
 - Clone current features on transport.hornsbyses.org. 
 - Internal integration with vehicle signout

##Integrations
###Beacon
###EOS
###Active Directory

##Technology
###Data Management
Data will be managaed through a RDBMS such as:
 - MSSQL
 - MariaDB
 - MySQL
The current preference is MariaDB.
