
# E-Immunization Management System for Child and Youth

"SafeVax" is a secure web based application that offers quick access of vaccines for kids (Age:0-12 years) and teenagers (Age: 13-18 years). We developed this as an academic project of DBS course. 
### Prerequisites
 Must have :
- XAMPP
- Git Bash
### Getting Started
- Install XAMPP.
- Open XAMPP Control Panel and start Apache and MySQL.
- Download project from below link.
  ````bash
  https://github.com/preetu10/-E-Immunization-Management-System-.  git
  ````
  Or follow gitbash commands.
  ````bash
  cd C:\\xampp\htdocs\
  git clone https://github.com/preetu10/-E-Immunization-Management-System-.  git
  ```` 
- Extract files in C:\\xampp\htdocs\ and save with a name as like as eimscy.
- Open link localhost/phpmyadmin/
- Click on New at side navbar.
- Give a name(eimscy) to database and click Create button.
- Click on Import and browse the file in directory
  ````bash
  E-Immunization-Management-System-/eimscy.sql
  ````
- Open any browser and type  http://localhost/eimscy/index.php.    Homepage of our site will appear on screen.
### The Concept Behind
Our system using MySQL database manages all the information of patients, vaccines, events, vaccinators, admins and so on.
Patients can make appointment for their shot of vaccine. If that vaccine is available, then admin approves the request of vaccination and send confirmation mail to patients. Admin can make decisions analyzing the bar charts showing which vaccines are taken widely in a particular year, update the stock of vaccines. After taking shot of vaccine, the vaccinator who has given the shot to patients confirms the vaccination by entering his/her mail. Patients can see which shots of vaccines they have taken and which are upcoming shots in their profile though they are sent mail as reminder just before 4 days of their upcoming shot. Patients can download certificates of vaccines if all shots of those vaccines are taken. Admins have the authority to add or update vaccinators. They can also launch any event like vaccination campaigns, seminars and make aware of these via mail to all users of our system including other admins, vaccinators, and patients. Moreover, all information about our vaccines can be got in our site. 
### Contributors
- [Mahfuja Yesmin](https://github.com/preetu10)
- [Foyazunnesa Alam Momo](https://github.com/momo2396)
- [Sayma Siddiqua Simu](https://github.com/ssimuni)
- [Nejum Akther](https://github.com/nejum05)




