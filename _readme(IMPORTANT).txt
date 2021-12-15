Hello Dr. Charbel!

We hope you like our project, we have been working very hard. If you would like to test our website, please note the following instructions:

1. Download and install a recent version of XAMPP at https://www.apachefriends.org/download.html.

2. Clone this repo to the empty htdocs folder, or paste the contents of downloaded zip file there.

3. We have included a teachersdatabase.sql file which includes our full database along with some dummy data. Please go to localhost/phpmyadmin, create a "teachersdatabase" schema, and use the included sql file to import the database.

4. There is a small amount of configuration to be done to ensure that email notifications work. We followed the tutorial at https://youtu.be/IjA4CDGebYE to set up sending emails from localhost. If your email is configured on XAMPP, please go these files and change the sender email to your email. You can also set the receiver's email as one of your own emails for testing purposes.

5. You can now access the website! Just go to localhost in your browser.

6. For the purposes of our project, you can add users of type "student" and "tutor" through our registration pages (by filling the resgistration forms then approving the accounts from the admin account). However, admin accounts are not created on the website (as per our submission 2 requirements!) and are manually added to the database if needed.
We have created one admin account in the dummy data. You can access it by logging in with the following credentials:
email: "charbel.daoud@lau.edu"
password: "G1ve-Us-an-A!"
without the quotes.

Moreover, please note that you can always test any other existing student/tutor accounts, and that is by using our Forgot Password feature! Just make sure you type in the email of the account you want on the login page and then click "Forgot password". If you did not set configure XAMPP to send emails, you can simply access the verification code in the database under the temp_codes table (use the "code" value of the most recent row).

We are looking forward to you seeing and testing our whole project. Enjoy!

-- Reem, Yara, Ali, and Sarah