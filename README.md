# User Registration Form

This is a simple user registration form for a website. It includes fields for the user's name, email, password, and confirmation password. The form provides basic validation and error handling using JavaScript.

## Table of Contents

- [Demo](#demo)
- [Features](#features)
- [Usage](#usage)
- [Installation](#installation)
- [Dark Mode](#dark-mode)
- [Contributing](#contributing)
- [License](#license)

## Demo

You can see a live demo of this user registration form by following this [link](https://user-registration-form-sigma.vercel.app/).

## Features

- User registration form with input fields for name, email, password, and confirmation password.
- Basic client-side validation with error messages.
- A clickable privacy policy link that opens in a new tab.
- Option to enable dark mode for the form.

## Usage

To use this user registration form, follow these steps:

1. Clone this repository to your local machine.
2. Open the `index.html` file in your web browser.

You can fill out the form, and upon submission, basic validation will check for required fields and matching passwords.

## Installation

You don't need any special installation steps to use this form. Simply open the `index.html` file in your web browser to start using it.

## Dark Mode

This form includes a "Enable Dark Mode" button, which allows you to switch between light and dark modes. Dark mode changes the background and text color to create a different visual experience. Click the button to toggle dark mode on and off.

## JavaScript Code

The registration form uses JavaScript to handle form submission and basic client-side validation. The provided JavaScript code (`script.js`) does the following:

- Listens for the form submission event and prevents it from submitting by default.
- Retrieves form input fields and error message elements.
- Performs basic validation for name, email, password, and confirmation password.
- Displays error messages if validation fails.
- If the form is valid, it shows an alert indicating successful registration and clears the form.

Additionally, the code includes functionality for enabling dark mode. When the "Enable Dark Mode" button is clicked, it toggles the dark mode on and off, changing the background and text colors accordingly.

## Contributing

If you'd like to contribute to this project, feel free to open issues or submit pull requests. You can also get in touch with the project maintainers using the contact information in the `Contact` section.

## License

This project is licensed under the [MIT License](https://opensource.org/license/mit/).

---

**Disclaimer:** This is a simple example of a user registration form and is for educational purposes. It may not cover all security and validation considerations required for a production-ready system.
