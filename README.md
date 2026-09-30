# CourtWise - Legal Consultation & Lawyer Management Portal

**CourtWise** is a modern online legal services directory and consultation scheduling platform built using **PHP**, **MySQL**, and **Bootstrap**.

## Key Features
- **Verified Lawyer Directory**: Browse advocate profiles filtered by specialization (Criminal, Corporate, Family, Civil Law).
- **Online Meeting & Consultation Scheduling**: Clients can schedule and book meetings with lawyers (`php/book_meeting.php`).
- **Advocate Registration & Profile Approval**: Lawyers can submit credentials for administrative verification (`php/create_profile.php`, `php/approve_lawyer.php`).
- **Admin Operations Dashboard**: Manage appointments, lawyer applications, and client inquiries (`php/admin_dashboard.php`).
- **Case Studies & Testimonials**: Showcase law firm expertise and client success stories (`case-studies.php`).

## Technology Stack
- **Backend**: PHP 8.x
- **Database**: MySQL (`sql/appointments.sql`, `sql/lawyers.sql`, `sql/schedules.sql`, `sql/users.sql`)
- **Frontend**: Bootstrap 4, Animate.css, AOS (Animate On Scroll), Flaticon, jQuery

## Setup Instructions
1. Import all SQL files inside the `sql/` folder into your MySQL database.
2. Update database credentials in the PHP configuration files.
3. Host on Apache / Nginx or run with PHP's built-in server: `php -S localhost:8000`.
