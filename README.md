
# Delta Hotel Website Project

## Overview

This project is a website for Delhi Hotel, showcasing properties, providing property details, and offering a contact form for inquiries. It's built using HTML, CSS, JavaScript, Bootstrap, and PHP.

## Table of Contents

1.  [Project Description](#project-description)
2.  [Features](#features)
3.  [Technologies Used](#technologies-used)
4.  [Installation](#installation)
5.  [Configuration](#configuration)
6.  [File Structure](#file-structure)
7.  [Page Descriptions](#page-descriptions)
8.  [Database Setup](#database-setup)
9.  [Usage](#usage)
10. [Contact](#contact)

## Project Description

The Delta Hotel website aims to provide a user-friendly platform for potential customers to browse available properties, view detailed information about each property, and contact the hotel for reservations or inquiries.  The site is designed to be responsive and visually appealing.

## Features

*   **Property Listings:**  Displays a catalog of available properties with key details.
*   **Property Details:** Provides detailed information about individual properties, including descriptions, amenities, and images.
*   **Contact Form:** Allows users to send inquiries directly to the hotel.
*   **Responsive Design:**  Website adapts to different screen sizes (desktops, tablets, and mobile devices).
*   **User-Friendly Navigation:**  Clear and intuitive menu for easy navigation.
*   **Booking option**: User will be able to book

## Technologies Used

*   **HTML5:**  Structure and content of the web pages.
*   **CSS3:**  Styling and visual presentation of the website.
*   **JavaScript:**  Interactive elements and dynamic functionality.
*   **Bootstrap 5:** CSS framework for responsive design and pre-built components.
*   **PHP:**  Server-side scripting for form processing and database interaction.
*   **MySQL:** Database for storing contact form submissions.

## Installation

1.  **Clone the repository:**

    ```bash
    git clone [repository URL]
    cd [project directory]
    ```

2.  **Install XAMPP/WAMP/MAMP:**

    *   Download and install XAMPP, WAMP, or MAMP depending on your operating system.  These packages provide a local server environment with Apache, PHP, and MySQL.

3.  **Place the project files:**

    *   Move the entire project directory into the `htdocs` folder (for XAMPP) or the `www` directory (for WAMP).  For MAMP, configure the document root to your project folder.

## Configuration

1.  **Database Configuration:**

    *   Open the `contact_submit.php` file.
    *   Update the database credentials with your MySQL username, password, and database name.

    ```php
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $database = "delhi_hotel"; // Replace with your database name
    ```

## File Structure


Delta_Hotel/
├── assets/ # CSS, JavaScript, Images
│ ├── css/
│ │ ├── fontawesome.css
│ │ ├── owl.css
│ │ ├── animate.css
│ │ ├── delhi.css # Custom styles
│ │ └── templatemo-villa-agency.css #Theme
│ ├── js/
│ │ ├── custom.js
│ │ ├── counter.js
│ │ ├── isotope.min.js
│ │ └── owl-carousel.js
│ ├── images/ # Hotel-related images
│ │ ├── ...
├── vendor/ # Bootstrap and jQuery libraries
│ ├── bootstrap/
│ │ ├── css/
│ │ │ └── bootstrap.min.css
│ │ └── js/
│ │ └── bootstrap.min.js
│ └── jquery/
│ └── jquery.min.js
├── contact.php # Contact Us page
├── contact_submit.php # PHP script to handle the contact form submission
├── index.php # Home page
├── properties.php # Properties listing page
├── property-details.php # Single property detail page
└── README.md # Project Documentation

## Page Descriptions

*   **`index.php` (Home Page):**
    *   **Purpose:**  The landing page of the website.  It provides an overview of the hotel, highlights key features and attractions, and encourages users to explore the site further.
    *   **Content:**
        *   Header with navigation menu.
        *   Hero section with a prominent image and title.
        *   Sections showcasing property types or key amenities.
        *   Footer with copyright information and links.
    *   **Key Elements:** Logo, navigation links (Home, Properties, Property Details, Contact Us), schedule a visit link.

*   **`properties.php` (Properties Listing Page):**
    *   **Purpose:** Displays a list of available properties with brief descriptions and images. Allows users to filter properties by type (Apartment, Villa House, Penthouse).
    *   **Content:**
        *   Header with navigation menu.
        *   Page heading and breadcrumb navigation.
        *   Property filter options.
        *   Grid layout of property listings with images, descriptions, and "Schedule a Visit" buttons.
        *   Pagination for browsing multiple pages of listings.
        *   Footer.
    *   **Key Elements:** Property filter, property item display, pagination.

*   **`property-details.php` (Property Details Page):**
    *   **Purpose:** Provides a detailed view of a specific property, including descriptions, images, amenities, and booking options.
    *   **Content:**
        *   Header with navigation menu.
        *   Page heading and breadcrumb navigation.
        *   Main property image.
        *   Detailed property description.
        *   Accordion with additional information or FAQs.
        *   Information table with property specifications (size, contract, payment, safety).
        *   "Best Deal" section showcasing different property types (Apartment, Villa, Penthouse) with deals and details.
        *   Footer.
    *   **Key Elements:** Main image, details, property specifications, description

*   **`contact.php` (Contact Us Page):**
    *   **Purpose:**  Allows users to send inquiries or messages to the hotel.
    *   **Content:**
        *   Header with navigation menu.
        *   Page heading and breadcrumb navigation.
        *   Contact form with fields for name, email, subject, and message.
        *   Hotel contact information (phone, email).
        *   Embedded Google Map showing the hotel location.
        *   Flash messages to display success or error messages related to form submission.
        *   Footer.
    *   **Key Elements:**  Contact form, hotel contact information, Google Map.

*   **`contact_submit.php`:**
    *   **Purpose:** Handles the contact form submission from `contact.php`. It validates the form data, inserts the data into the `contact_messages` database table, and redirects the user back to the `contact.php` page with a success or error message.

## Database Setup

1.  **Create a Database:**

    *   Log in to your MySQL server (e.g., using phpMyAdmin).
    *   Create a new database named `delhi_hotel`.

2.  **Create the `contact_messages` Table:**

    *   Execute the following SQL query to create the `contact_messages` table:

    ```sql
    CREATE TABLE contact_messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        subject VARCHAR(255),
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

## Usage

1.  **Start the local server:**

    *   Start Apache and MySQL services from your XAMPP/WAMP/MAMP control panel.

2.  **Access the website:**

    *   Open your web browser and navigate to `http://localhost/[project directory]/index.php`.


## Contact

For questions or inquiries, please contact:

Emmanuel  Wanjala - emmanuelwanjala7416@gmail.com 
