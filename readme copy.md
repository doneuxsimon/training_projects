# PHP/MySQL Drill exercise

## Setup

- Create a database
- Create a user table with the following fields:
  - id
  - first_name
  - last_name
  - email
  - account_type (Enum with 3 possible values `ADMIN` | `MODERATOR` | `NORMAL`)
  - country
  - password
- Import the [data.csv](./data.csv) into your table

## First step

- On the index.php file display an HTML TABLE that displays all the field except email and password.
  - If you are an admin, you can see all the users and edit/delete them
  - If you are a moderator, you can see all the users except admins
  - If you are a simple user, you can only see yourself
- Create a details page to display all the informations except the password
- Create an edit page, make sure only user with proper rights can edit informations

Make sure to clearly split logic and display!

Want to go further? How about you try to:
- Sort the users by country, first_name, ... (alphabetical)
- Display 25 results par page
- Create filters (people whose name starts with "K", people with a "(...).edu" email, ...)