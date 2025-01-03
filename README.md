

# 🌟 **OSMS2 Project** 🚀  

Welcome to the **OSMS2 Project**, a highly efficient and feature-rich system designed for seamless **inventory and user management**. Built with modern technologies, this project focuses on scalability, usability, and functionality, powered by PHP for the backend.  

---

## 🌟 **Features**  

✨ **User Management:** Simplified tools for managing users and their roles.  
✨ **Inventory Management:** Track, update, and maintain inventory records with ease.  
✨ **Responsive Design:** Optimized for all devices – desktop, tablet, and mobile.  
✨ **Scalable Architecture:** Designed for future expansion and feature integration.  
✨ **Secure Backend:** Built with PHP, ensuring robust data security.  

---

## 🛠️ **Tech Stack**  

The project is built using the following technologies:  

- ⚙️ **Backend:** PHP  
- 🌐 **Frontend:** HTML, CSS, JavaScript, Bootstrap  
- 💾 **Database:** MySQL  
- 🔧 **DevOps Tools:** Apache Server  

---

## 📂 **Project Structure**  

```
project/
├── config/                # Configuration files for database and other settings
│   ├── db.php             # Database connection
├── public/                # Publicly accessible files
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   ├── index.php          # Entry point of the application
├── src/                   # Core application files
│   ├── controllers/       # Handles request logic
│   ├── models/            # Database interaction
│   ├── views/             # HTML templates
│   └── helpers/           # Utility functions
├── tests/                 # Test cases
└── .htaccess              # URL routing for Apache server
```

---

## 🚀 **Getting Started**  

Follow these steps to set up and run the project locally:

### 1️⃣ **Clone the Repository**  

```bash
git clone https://github.com/swezalmanhas/osms2.git
cd osms2/project
```

### 2️⃣ **Set Up Local Environment**  

Ensure you have the following installed:  
- PHP (v7.4 or above)  
- MySQL  
- Apache Server (or any web server like XAMPP, WAMP, or LAMP)  

### 3️⃣ **Configure the Database**  

1. Create a database in MySQL (e.g., `osms2_db`).  
2. Import the provided `osms2.sql` file into the database.  
3. Update the `config/db.php` file with your database credentials:  

```php
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'osms2_db');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
?>
```

### 4️⃣ **Start the Server**  

If you’re using XAMPP or WAMP:  

1. Place the project folder in the `htdocs` directory (for XAMPP) or equivalent for your server.  
2. Start Apache and MySQL from your server control panel.  
3. Access the project at **`http://localhost/osms2/public`**.

---

## 🌐 **Key Features in Detail**  

1️⃣ **User-Friendly Interface:**  
   - Simple and intuitive design with Bootstrap for responsiveness.  

2️⃣ **Inventory Management:**  
   - Add, update, and track inventory in real-time.  

3️⃣ **Role-Based Access Control:**  
   - Secure user access based on their roles (e.g., Admin, User).  

4️⃣ **Dynamic and Secure Backend:**  
   - Built with PHP and MySQL, ensuring security and reliability.  

5️⃣ **Error Handling:**  
   - Robust error handling to prevent crashes and provide useful feedback.  

---


## 🧪 **Testing**  

To run tests, use the following steps:  

1️⃣ Navigate to the `tests/` directory.  
2️⃣ Run the PHP test files manually or use a testing framework like PHPUnit.  

---

## 🤝 **Contributing**  

✨ Contributions are always welcome!  

1️⃣ Fork the repository.  
2️⃣ Create a new branch for your feature or bug fix.  
3️⃣ Commit your changes and submit a pull request.  

---

## 📬 **Contact**  

Feel free to reach out for any questions or suggestions:  

- 🌐 **GitHub:** [Swezal Manhas](https://github.com/swezalmanhas)  
- ✉️ **Email:** [swezalmanhas@gamil.com](mailto:swezalmanhas@gmail.com)  

---

💻 **Developed with ❤️ by Swezal Manhas** 🚀  

