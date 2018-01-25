# Installation
- Built using bootstrap, composer, php 7, and laravel 5.4.
- Ensure that composer, php7 are installed
- Clone the repository to your computer
    
# Usage
- Navigate to the project directory in your console/terminal
- Run composer install/update
- If not using docker or a VM run:  php artisan serve

# Notes
- Uses a package that I specifically built to validate numbers based on the Lumen Algorithm 
- Though this could easily be written using procedural PHP or Symfony, using Laravel and a composer package makes the most sense as it allows for use across multiple sites as well as user contribution.
- Currently the code only checks to ensure that the number is validated by the Luhn Algorithm and can easily be expanded upon to generate the check number as well.
- Jquery/Ajax can also be implemented to display the validity of a number, just don't have the time right now 

# Features
- Checks the validity of Credit Card as well as other numbers using the Luhn Algorithm

# ToDo
- Add JQuery/Ajax to update the validation portion of page on submission
