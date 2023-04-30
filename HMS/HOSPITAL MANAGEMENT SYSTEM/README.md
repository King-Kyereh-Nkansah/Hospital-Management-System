# Hospital Management System

## Video Link of Project:

Hospital Management System using MySQL, Php and Bootstrap

## Business Requirements: https://drive.google.com/file/d/1IJmJYAsOPf9N_hY8DnircuLWgEmL9icR/view?usp=share_link

The HMS will be able to support the following business requirements:

1. Provide a comprehensive view of patient data across the hospital
2. Enable efficient appointment scheduling and management
3. Provide real-time visibility into hospital operations
   Functional Requirements:
   The HMS would be able to support the following functional requirements:
4. Patient Management: The system will be able to capture patient data, including medical history, allergies, and prescriptions.
5. Appointment Management: The system will be able to schedule and manage appointments for patients, doctors, and other healthcare professionals.
6. Medical Records Management: The system will be able to store and manage patient medical records, including lab results, imaging reports, and progress notes.
   Non-Functional Requirements:
   The HMS will be able to support the following non-functional requirements:
7. Performance: The will should be able to handle a large volume of requests while maintaining high performance and availability.
8. Security: The system will be secure, with appropriate authentication and access control mechanisms, to protect patient data and other sensitive information.
9. Scalability: The system will be scalable to accommodate future growth and changes in hospital operations.
   General Requirements:
   The HMS will be able to support the following general requirements:
10. User Interface: The system will have an intuitive and easy-to-use interface that is accessible to all hospital staff.
11. Integration: The system will be able to integrate with other hospital systems and third-party applications.
12. Reporting: The system will be able to generate reports on hospital operations, including patient data.
    User Requirements:
    The HMS will be able to support the following user requirements:
13. Doctors: The system will enable doctors to access patient records, schedule appointments, and submit prescriptions.
14. Nurses: The system will enable nurses to manage patient data, schedule appointments, and record patient progress.
15. Patients: The system will enable patients to access their medical records, schedule appointments, and receive billing statements.

## Architecture style used:

Layered architecture is a popular software architecture pattern that separates an application into logical layers. Each of the layers has a specific responsibility. The layered architecture approach is chosen because it can help in achieving modularity, scalability, maintainability, and testability of the software system. For the Hospital Management System (HMS) website, the layered architecture will be designed as follows:

1. Presentation Layer: This layer will handle the user interface and user interaction. This layer will provide an intuitive and user-friendly interface for an Admin, doctors, nurses, and patients to access the system's functionalities. The layer will make use of modern front-end web technologies such as HTML, CSS, and JavaScript.
2. Application Layer: This layer will handle the business logic and implement the functional requirements. It will process the user's requests from the presentation layer, retrieve data from the data layer, perform validations, and execute the required workflows. The layer will be designed using a server-side programming language, PHP to be specific.
3. Data Layer: This layer will handle data storage and retrieval. It will store and manage all patient data, medical records, and appointment details in a database. The layer will use a relational database management system, MySQL to be specific. The layered architecture will address most of the requirements in our Hospital Management System Website, including providing a comprehensive view of patient data, efficient appointment scheduling, and management, real-time visibility into hospital operations, patient management, appointment management, and medical records management. The layered architecture can also cater to non-functional requirements such as performance, security, and scalability.
   Furthermore, the layered architecture can help facilitate integration with other hospital systems and third-party applications and generate reports on hospital operations, which are the general requirements.
   Finally, it can also fulfill the user requirements of doctors, nurses, and patients by providing easy access to medical records, scheduling appointments, and submitting prescriptions.

Design decisions made and what informed the decisions:
The decision to use a layered architectural style for the hospital management system is based on several design considerations. Here are some of the key factors that may influence the decision: Separation of concerns: One of the main reasons for choosing a layered architectural style is to separate the system into different layers, each with a specific set of responsibilities. This allows for a clear separation of concerns and helps to improve the overall organization and maintainability of the system. Scalability: The Hospital management systems need to be scalable to handle large amounts of data and requests from multiple users. The layered architectural style allows for horizontal scaling of the system, which is important for hospital management systems since it will handle a large volume of data and requests from multiple users simultaneously.
Flexibility: The Hospital management system needs to be adaptable to changing requirements and evolving technologies. The layered architectural style allows for changes to be made to the system without impacting other layers. This flexibility is important for hospital management systems since it will be adaptable to changing requirements and evolving technologies.
Modularity: The layered architectural style promotes modularity, allowing the system to be divided into smaller, more manageable components. This promotes code reuse and makes it easier to test and maintain the system. Security: Hospital management systems need to be secure to protect sensitive patient data.
The layered architectural style can be used to implement a security model that enforces access control policies at each layer. This improves the overall security of the system.
In conclusion, the layered architectural style provides a robust and scalable solution for a hospital management system, ensuring that the system can handle large volumes of data and requests while maintaining high levels of security, flexibility, and modularity. Additionally, the separation of concerns provided by the layered architecture makes it easier to maintain, test, and modify the system over time.

## PROJECT DESCRIPTION:

The Hospital Management System aims to solve the problem of manual and inefficient processes that can lead to errors, mismanagement, and delays in delivering healthcare services. The system will automate and streamline hospital operations, including patient registration, appointment scheduling, and medical record management. The HMS will improve the quality of patient care, increase hospital efficiency, and provide real-time visibility into hospital operations.
After successful completion of the project, the project is able to

1. Admit patient: It gets the details of users/patients of the system and stores it in a database for them to successfully book appointments with doctors and also see appointment history.
2. Add Doctors: The admin of the system adds doctors and can also remove doctors from the system. This is made available only for the admin to prevent intruders from registering as doctors and avoid fake prescriptions.
3. Allow an admin login: Admins of the system can log in at any time to make modifications to the system by adding and removing doctors, and see all lists of patients, doctors, and the feedback received from the contact page.
   After a successful login, the patient/user is directed to their dashboard where bookings and records are available. They can also view their application form containing doctors’ names and dates of appointment.
   After a successful login by the doctor, they can also see appointments available for them.
   After successful login by the admin, he can see the list of registered users on the system, all doctors registered, the appointment list, add or remove doctors, and view users’ feedback.

## UPDATES

Doctors: When appointments do not favor the doctor, he has the ability to cancel them. It will be shown in the patient’s dashboard that the appointment has been “canceled by the doctor”.
Patient/User: Patients have the ability to cancel appointments. This will appear in the doctors’ dashboard as an appointment “canceled by patient”.
Admin: Admin also has the ability to remove doctors from the system.
IDEAS ON IMPROVING THE SYSTEM IN THE FUTURE

1. Adding other sections of the hospital like the X-ray section, mental health, and others.
2. Adding pharmacy: The system would send prescriptions by the doctor to the pharmacy for patients to get drugs as soon as they get there.
3. Addition of payment methods.
4. Ability for doctors to customize their profiles.
5. Additional security to encrypt a password.
6. Addition of Nurses to the system as stated in the functionalities.

## PREREQUISITES

1. Install XAMPP web server
2. Any Editor (Preferably VS Code)
3. Any web browser with the latest version

## TECHNOLOGIES USED

The technologies and programming languages utilized in this project include

1. HTML5/CSS3: For creating the basic structure and styling of the webpage.
2. JavaScript: For developing dynamic content that updates in real-time.
3. Bootstrap: A comprehensive HTML, CSS, and JS library for creating responsive and mobile-first websites.
4. XAMPP: A web server developed by Apache Friends.
5. PHP: For server-side scripting.
6. MySQL: A relational database management system (RDBMS) that uses SQL for managing data.
7. TCPDF: For generating PDF documents.

## STEPS TO RUN THE PROJECT ON YOUR MACHINE

To run the project on your computer, follow these steps:

1. Install XAMPP on your machine by downloading and running the installation file.
2. Clone or download the project repository from the source.
3. Extract all the files from the downloaded repository and move them to the 'htdocs' folder located in your XAMPP directory.
4. Launch the XAMPP control panel and start both Apache and MySQL.
5. Open your preferred web browser and type 'localhost/phpmyadmin' in the address bar to access the phpMyAdmin page.
6. From the left panel in phpMyAdmin, create a new database and name it 'myhmsdb'.
7. Import the 'myhmsdb.sql' file into your newly created database and click on 'ok'.
8. Open a new browser tab and type 'localhost/HMS/index.php in the address bar

## SOFTWARES USED

XAMPP: Installed on windows 10 pro.
Visual studio code

## STRENGTHS AND WEAKNESS OF THE SYSTEM

Strength:

1. The System can enroll multiple patients at a time.
2. The system can print out prescription bills for patients.
3. The system does not allow doctors to create accounts, which serves as a way of avoiding fake doctors on the system.
   Weakness:
4. The system could not encrypt the passwords of users, which will be a future update.
5. The system could not implement other sections of the hospital.
6. The system could not add nurses.

## In conclusion:

The system has successfully been created and will allow patients to create accounts and book appointments, delete booked appointments and print out prescription bills.
Also, it allows doctors to decline appointments, accept appointments and also give prescriptions.
Lastly, the system allows the admin of it to add doctors, view prescriptions, remove doctors.
