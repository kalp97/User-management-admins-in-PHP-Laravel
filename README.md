# faq1

To run the FAQ project:

1. git clone https://github.com/kalp97/faq1.git

2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database with sqlite or other 
(https://laravel.com/docs/5.6/database)

#Epic:

This is a FAQ project where users can ask questions and answers the questions. The new feature I have implemented is the Admin access where Admin can LOGIN with the Project Owner provided

* E-mail ID:"adminss@njit.edu" (without the double quotes)
* Password:"admins"            (without the double quotes)

In this feature, whichever the Users are/were logged into the system, will be tracked by the Admin and will show the history of total Online Users into the system with their login priority and E-mail ID. A simple Welcome page with the type of User(Admin/User) who is either Logged In/Logged Out is showed. The same Login/Logout status is showed in the Admin/User page individually.


#User Stories:

1) Admin can register as a User, but User without knowing the Admin credentials cannot able to login as an Admin.
2) Admin logins and see the history of total users who used the system.
3) Users can edit their profile pages in the profile link.
4) All the users can create, edit and delete questions in the forum.
Heroku Link https://isfinalfaq.herokuapp.com/
