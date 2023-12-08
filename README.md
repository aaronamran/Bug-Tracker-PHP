# Bug Tracker Software
This is a full-stack bug tracker software using PHP, HTML and CSS and few lines of JavaScript. It is meant to showcase the CRUD operations using PHP.

## Table of Contents

- [Features](#features)
- [Usage](#usage)
- [Creation](#creation)
- [PHP Code](#phpcode)
- [Contributing](#contributing)
- [License](#license)

## Features

- To be able to report a bug, users have to be logged in. Users will be redirected to the login page when trying to report a bug as an anonymous visitor.
- Standard users can only report and view list of bugs. 
- Admins have access to extra features, such as:
  - Adding normal users as other admins and deleting entire profiles of other users from the database.
  - Being able to open or close a submitted bug, or delete the entire submitted bug.

## Usage

To use this bug tracking software, follow these steps:

1. Sign up by creating a new user account.
2. Once you are successfully logged in, you can report a bug with required details.
3. Reported bugs will appear in the 'Bug List' page in the table provided.

## Creation

This software is created on Visual Studio Code, and uses XAMPP with phpMyAdmin to create the database and relevant table structures. The project is initially stored in the htdocs folder inside the xampp folder.

## PHP Code

The bug tracker software uses PHP and HTML to handle form submission and server-side operations. 

## Contributing

If you'd like to contribute to this project, feel free to open issues or submit pull requests. You can also get in touch with the project maintainers using the contact information in the `Contact` section.

## License

This project is licensed under the [MIT License](https://opensource.org/license/mit/).

---

**Disclaimer:** This is a simple example of a full-stack bug tracking software and is for educational purposes. It may not cover all security and validation considerations required for a production-ready system.
