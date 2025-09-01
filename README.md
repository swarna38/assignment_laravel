Task 1: Template to Blade Conversion → 25%

An HTML/Bootstrap template was provided.

The template was converted into a Laravel Blade layout.

Proper structure is used: master layout, header, footer, partials, includes.

Blade files:

layouts/master.blade.php

other necessary partials (header, footer)

Template link: Bootstrap Template



Task 2: Database Design to Migration → 25%

Laravel migration files were created based on the provided database diagram.

The schema accurately represents the database structure.

Database is set up in MySQL.

Migration files are located in database/migrations/xxxx_create_tables.php

Diagram link: Database Diagram

Google Drive link (optional): Drive Link



Task 3: Form Submission + Response → 25%

A contact form is created which submits via POST request.

Form validation is implemented.

After submission, a success message is shown using Session.

Optional: submitted data can be shown on a confirmation page.

Files:

resources/views/contact.blade.php

app/Http/Controllers/ContactController.php

routes/web.php

Features:

Validation errors are shown.

Old input values are retained.

Success message is displayed.



Task 4: Bonus Task (Cookie + File Upload) → 15%

A file upload feature is implemented in the form.

Uploaded files are stored in the storage directory.

On success, a cookie is set, for example: file_uploaded=true



https://drive.google.com/drive/recent