# RapidAssist

## Overview

RapidAssist is a web-based application designed to help users find trusted mechanics in their location during unexpected vehicle breakdowns. The system is structured into three main modules: Admin, Users, and Mechanics. It offers a platform for users to register, find and contact mechanics, and provide feedback on the service. Mechanics can register, post their service details, and view feedback. Administrators have the ability to manage users, mechanics, and feedback.

## Modules

### User Module
- **Register**: Users register their basic details to access the application services.
- **Login**: Registered users can log in to use the service during emergencies.
- **View Details**: After logging in, users can view a list of approved mechanics.
- **Search Records & Call**: Users can search for mechanics by location and time, and call them directly.
- **Post Feedback**: Users can provide feedback on the service received.

### Admin Module
- **Customers**: View, delete, and edit customer records.
- **Mechanics**: View, delete, and edit mechanic records.
- **View All Feedbacks**: Review all feedback submitted by users.

### Mechanic Module
- **Register**: Mechanics register their details with the admin for approval.
- **Login**: Approved mechanics can log in to their accounts.
- **Post Details**: Mechanics can post details about their name, location, and available services.
- **View Feedback**: Mechanics can view feedback provided by users to improve their services.

## Technology Stack

### Front End
- **HTML**: Used to create and structure web documents.
- **CSS**: Cascading Style Sheets for designing attractive layouts.
- **Bootstrap**: Framework for responsive, mobile-friendly design.
- **JavaScript**: Programming language for interactive web features.

### Back End
- **PHP**: Hypertext Preprocessor for dynamically generated web pages.
- **MySQL**: Database system for managing and querying data.

## Software Requirements

To run the application locally, you need one of the following server environments:

- **WAMP Server**: Windows, Apache, MySQL, PHP server environment.
- **XAMPP Server**: Cross-platform Apache, MySQL, PHP server environment.
- **MAMP Server**: macOS Apache, MySQL, PHP server environment.
- **LAMP Server**: Linux, Apache, MySQL, PHP server environment.

## Setup Instructions

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/man0j-012/RapidAssist.git
    ```

2. **Install the Required Server**:
    Choose one of the server environments mentioned above and install it on your local machine.

3. **Place the Project Files**:
    Copy the project files into the `htdocs` (for XAMPP) or equivalent directory of your server environment.

4. **Setup the Database**:
    - Create a new MySQL database.
    - Import the provided SQL files (if any) to set up the database schema.

5. **Update Database Configuration**:
    Modify the database configuration file (usually `config.php` or similar) to include your database credentials.

6. **Run the Server**:
    Start the server environment and navigate to `http://localhost/RapidAssist` in your web browser to access the application.

## Contributing

If you would like to contribute to this project, please fork the repository, create a new branch, and submit a pull request with your changes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions or support, please contact [Manoj Dattatreya Myneni](mailto:mmyne@uic.edu).

