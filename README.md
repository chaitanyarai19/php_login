# PHP Login Form with Unit Tests

This repository contains a simple PHP login form along with unit tests implemented using PHPUnit. The PHP login form is designed to demonstrate basic user authentication, while the unit tests validate the functionality of the login system.

## Table of Contents

- [Features](#features)
- [Usage](#usage)
- [Requirements](#requirements)
- [Installation](#installation)
- [Running Tests](#running-tests)
- [Contributing](#contributing)
- [License](#license)

## Features

- User login functionality with hardcoded credentials.
- Basic error handling for incorrect username or password.
- PHPUnit tests to validate login behavior.

## Usage

To use the PHP login form, follow these steps:

1. Clone this repository to your local machine:

   ```shell
   git clone https://github.com/chaitanyarai19/php-login.git
   ```


- Configure a local web server (e.g., Apache, Nginx) to serve the PHP files. You can use a tool like XAMPP or WAMP for local development.

- Access the login form in your web browser by visiting the appropriate URL, e.g., http://localhost/php-login-form/login.php.

- Enter the provided username and password to log in. For this example, use the following credentials:

- Username: user
- Password: password

- You will see a confirmation message if the login is successful or an error message if the login fails.

## Requirements
To run the PHP login form and unit tests, you need:

- PHP installed on your local machine.
- PHPUnit installed to run the tests.

## Installation

- There is no specific installation required for the PHP login form. Simply clone the repository, configure a web server, and access login.php as mentioned in the usage instructions.

- To install PHPUnit, you can use Composer (assuming you have Composer installed):
```
composer require --dev phpunit/phpunit
```

- This command installs PHPUnit as a development dependency.

## Running Tests

- You can run the PHPUnit tests by executing the following command from the project's root directory:

```
vendor/bin/phpunit LoginTest.php
```

Make sure to adjust the test cases and test data in LoginTest.php as needed for your application.

## Contributing

- If you want to contribute to this project, please fork the repository, make your changes, and create a pull request. We welcome contributions and improvements.

## License

- This project is licensed under the MIT License. See the LICENSE file for details.

- Feel free to customize this README to provide additional information or clarify any specific details about your PHP login form and tests. Providing clear and concise instructions will help users understand and use your code effectively.

