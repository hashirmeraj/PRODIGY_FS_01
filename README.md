
# User Authentication System

A secure user authentication system with login and registration functionality, built using PHP, MySQL, HTML, CSS (Tailwind), and JavaScript.

## Features

- **User Registration**: Allows users to sign up for an account by providing necessary details.
- **User Login**: Users can log in securely using their credentials.
- **Protected Routes**: Access to specific pages is restricted and requires successful authentication.
- **Password Hashing**: Ensures that user passwords are stored securely in the database.
- **Session Management**: Maintains user sessions to handle login status across pages.


## Tech Stack

- **Frontend**: HTML, CSS (Tailwind), JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/hashirmeraj/PRODIGY_FS_01.git
   ```
2. **Navigate to the project directory**:
   ```bash
   cd PRODIGY_FS_01
   ```
3. **Setup the database**:
   - Create a new MySQL database.
   - Import the provided SQL file (`users1.sql`) to set up the necessary tables.

4. **Configure the database connection**:
   
   - Open the file ./particles/config.php in a text editor.
   - Update the `config.php` file with your database credentials.

   
   ```php
      <?php
         $servername = 'localhost';
         $username = 'root';
         $password = '';
         $dbname = 'users1';

         // Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);

         // Check connection
         if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
         }
      ?>
   ```

5. **Run the project**:
   - Place the project files in the root directory of your server (e.g., `htdocs` for XAMPP).
   - Start the server and navigate to `http://localhost/PRODIGY_FS_01` in your browser.

## Usage

- **Sign Up**: Create a new account using the registration form.
- **Log In**: Access your account by entering your credentials.
- **Access Protected Pages**: Navigate through the application and access restricted content based on your authentication status.

## Contact

For any inquiries or support, please contact [hashirmeraj1@gmail.com].
