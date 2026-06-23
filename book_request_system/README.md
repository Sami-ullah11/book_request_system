#  Book Request System

A web-based Book Request System developed in PHP that allows users to browse books and submit book requests. The system provides separate dashboards for users, admins, and super admins to manage requests and books efficiently.

##  Features

### User

* User registration and login
* View available books
* Request books
* User dashboard

### Admin

* Manage book requests
* View user activities
* Admin dashboard

### Super Admin

* Full control over the system
* Manage books and users
* Update book details
* Delete books
* Super admin dashboard

## 🛠 Technologies Used

* PHP
* HTML
* CSS
* JavaScript
* MySQL
* XAMPP (Apache + MySQL)

##  Project Structure

```
book_request_system/
│
├── index.php
├── login.php
├── register.php
├── dashboard.php
├── request_book.php
├── admin_dashboard.php
├── super_admin_dashboard.php
├── db.php
├── functions.php
└── assets/
```

##  Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/book_request_system.git
```

2. Move the project folder to your web server directory (`htdocs` if using XAMPP).

3. Create a MySQL database.

4. Import the database file (if available).

5. Update database credentials in `db.php`.

6. Start Apache and MySQL.

7. Open your browser and visit:

```
http://localhost/book_request_system
```

##  Future Improvements

* Email notifications
* File upload support
* Search and filter books
* Request tracking
* Responsive UI

##  Author

**Sami Ullah **

Software Engineering Student

---

Feel free to contribute or suggest improvements.
