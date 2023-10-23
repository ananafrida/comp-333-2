# Full Stack CRUD Web App

Welcome to the music rating full-stack CRUD web app with a MySQL and PHP backend. This is the readme file for our full-stack CRUD web app project. In this document, we will provide an overview of the app's functionality, the setup of the development environment, and the organization of the code. Screenshots of table structures and other relevant information will be included as per the requirements.


## Table of Contents
- [Setting up the Development Environment](#setting-up-the-development-environment)
- [App Functionality](#app-functionality)
- [User Guideline](#user-guideline)
- [Code Organization](#code-organization)
- [Screenshots](#screenshots)
- [Production Environment](#production-environment)
- [Contributions](#contributions)

## Setting up the Development Environment
To set up the local development environment for this project, we followed the instructions provided on the class website. We used XAMPP to create a local development environment for PHP and MySQL. Below is a screenshot of our local phpMyAdmin interface, which is part of the setup:

![image](https://github.com/n-aggarwal/comp-333-2/assets/58756224/19af03af-7969-4f6d-9f96-6bdfa1793e51)

## App Functionality
Our web app allows users to perform basic CRUD operations on a database of songs. The app functionality includes:

1. **Create:** Users can add a new song to the database, providing information such as the title, artist, and rating (on a scale of 1 to 5).

2. **Read:** Users can view a list of songs from the database, displaying the title, artist, and rating.

3. **Update:** Users can edit the title, artist, and rating of an existing song in the database.

4. **Delete:** Users can remove a song (title, artist, and rating) from the database.

## User Guideline
To run the app locally, you need to have XAMPP downloaded and start the servers. You also have to have the rating and user tables under music_db database in your phpmyadmin locally. Then you can run the app locally using http://localhost/register.php


**Getting Started**

1. Ensure you have access to the Full Stack CRUD Web App.

2. Make sure you have registered for an account or obtained login credentials from the app administrator.

**User Registration**

To use the app, you need to register an account:

1. Click on the "Register" link or button on the login page.

2. Fill in the registration form with the following information:
   - **Username:** Choose a unique username.
   - **Password:** Enter a secure password (at least 10 characters long).
   - **Confirm Password:** Re-enter the password to confirm.

3. Click the "Register" button to create your account.

4. If the chosen username is already taken, you will be alerted to select a different one.

5. Once registered, you can proceed to log in.

**User Login**

To access the app's features, you need to log in:

1. Go to the login page.

2. Enter your username and password.

3. Click the "Login" button.

4. You will be redirected to the app's main page, where you can view and interact with songs.

**Viewing Songs**

After logging in, you will see a list of songs displayed on the main page. The list includes the title, artist, and rating of each song. You can scroll through the list to view all the songs.

**Adding a New Song**

To add a new song to the database:

1. Click on the "Add New Song Rating".

2. Fill in the form with the following information:
   - **Title:** Enter the title of the song.
   - **Artist:** Provide the name of the artist.
   - **Rating:** Select a rating from 1 to 5.

3. Click the "Submit" button to save the new song to the database.

4. You will receive a notification if you attempt to rate the same song more than once.

**Updating a Song**

To update the details of an existing song:

1. Find the song you wish to edit in the list of songs.

2. Click on the song title to open the editing form.

3. The form will be pre-populated with the current values of the song.

4. Make the necessary changes to the title, artist, or rating.

5. Click the "Update" button to save your changes.

6. Click the "Cancel" button to cancel your updates.

7. You will be redirected to the list of songs after updating.

**Deleting a Song**

To remove a song from the database:

1. Locate the song you want to delete in the list of songs.

2. Click on the song title to open the deletion form.

3. Confirm the deletion by clicking the "Yes" button.
   
4. Cancel deletion by clicking the "No" button.

5. The song will be permanently removed from the database.

**Logging Out**

To log out of your account:

1. Click the "Log Out" button.

2. You will be logged out and redirected to the login page.


### Additional Requirements
- Users must register and log in with a username and password. If a username is already taken, users are alerted and asked to choose a different username. Passwords do not need to be unique.

- Passwords are hashed and salted for security.

- Users can only rate a song once, and they will be notified if they attempt to rate the same song again.

- The app enforces frontend validation to ensure that users do not leave any form fields blank, passwords are at least 10 characters long, and ratings are one-digit integers.

- SQL queries are parameterized to prevent SQL injection attacks.

- The database includes two tables: `users` and `ratings`, with the necessary foreign key relationships.

- Users can only update and delete songs they added.

## Code Organization
The organization of our code is as follows:

- We have separate PHP files for each CRUD function (create, read, update, delete), along with additional files for user registration, login, and user authentication.

- We use GitHub for version control and organization of our work, including branches and pull requests.

## Screenshots
Below are screenshots of our `ratings` and `users` table structures as requested in the assignment:

**Ratings Table Structure:**

![image](https://github.com/n-aggarwal/comp-333-2/assets/58756224/b9a8b364-56c1-4f16-ae13-442211c166cc)




**Users Table Structure:**

![image](https://github.com/n-aggarwal/comp-333-2/assets/58756224/1c47a09e-373c-417f-b1b7-97f57d8e9bc9)


## Production Environment
The link to the website is: [Full Stack CRUD App](https://music-rating.great-site.net/register.php)


## Contributions
This project is a creation of Anan Afrida (@ananafrida) and Nishant Aggarwal (@n-aggarwal). Nishant contributed 50% to the project, and Anan contributed 50% to the project.

For more details on the project and its functionality, please refer to the code and documentation in our GitHub repository.

