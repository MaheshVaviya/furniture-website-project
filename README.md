# Wood Art Furniture Website

![Website Preview](img/website-preview.jpg) <!-- Optional: Add screenshot -->

## Table of Contents
- [Project Description](#project-description)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Credits](#credits)
- [License](#license)

## Project Description

A responsive e-commerce website for showcasing handcrafted wooden furniture. The site includes a product catalog, interactive contact forms, secure user authentication, and a fully functional admin dashboard for managing product listings and contact queries.

## Features

### User-Facing
- ✔️ Responsive design for desktop, tablet, and mobile
- ✔️ Animated product gallery
- ✔️ Interactive contact form
- ✔️ User login/logout system
- ✔️ Search functionality

### Admin Panel
- 🔒 Secure login-protected admin interface
- 📊 View and manage contact form submissions
- ✏️ Add, update, and delete products (CRUD operations)

## Technologies Used

### Frontend
- HTML5, CSS3, JavaScript
- PHP (for server-side rendering)
- [Poppins Google Font](https://fonts.google.com/specimen/Poppins)

### Backend
- PHP with XAMPP (Apache, MySQL, PHP stack)
- PHP Sessions for user authentication

### Design
- Wood-themed color palette:
  - Dark Wood: `#4d3520`
  - Mid Brown: `#6f4b26`
  - Light Tan: `#d9b384`
- CSS animations and transitions

## Installation

### Prerequisites
- [XAMPP](https://www.apachefriends.org/download.html) installed
- Modern browser (Chrome, Firefox, Edge)

### Setup Steps

```bash
# Clone the repository
git clone https://github.com/yourusername/wood-art-website.git

# Move project to XAMPP htdocs directory
# For Linux/Mac:
cp -r wood-art-website /opt/lampp/htdocs/

# For Windows:
xcopy wood-art-website C:\xampp\htdocs\ /E /H /C /I
```

### Database Setup

1. Open [phpMyAdmin](http://localhost/phpmyadmin)
2. Create a new database: `woodart_db`
3. Run the following SQL to create required tables:

```sql
CREATE TABLE contact (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20),
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Launch Website

1. Open XAMPP Control Panel
2. Start **Apache** and **MySQL** services
3. Visit the site: [http://localhost/wood-art-website](http://localhost/wood-art-website)

## File Structure

```
wood-art-website/
├── admin-view/          # Admin dashboard
│   └── contact-table.php
├── css/                 # Stylesheets
│   └── style2.css
├── img/                 # All website images
├── php/                 # Main pages
│   ├── index.php
│   ├── about.php
│   ├── services.php
│   ├── contact.php
│   ├── login.php
│   └── logout.php
├── submit_contact.php   # Contact form handler
└── README.md            # This file
```

## Credits

- **Developer**: [Your Name]
- **Design Inspiration**: *Woodworking Magazine*
- **Images**: *Unsplash Wood Collection*

## License

This project is licensed under the [MIT License](LICENSE.md).