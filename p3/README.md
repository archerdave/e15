*Any instructions/notes in italics should be removed from the template before submitting*

# Project 3
+ By: *David Harvill*
+ Production URL: <http://e15p3.dharvill.me>

## Feature summary
*Outline a summary of features that your application has. The following details are from a hypothetical project called "Movie Tracker". Note that it is similar to Bookmark, yet it has its own unique features. Delete this example and replace with your own feature summary*

+ Visitors can register/log in
+ Users can add/update/delete movies in their collection (title, release date, director, writer, summary, category)
+ There's a file uploader that's used to upload poster images for each movie
+ User's can toggle whether movies in their collection are public or private
+ Each user has a public profile page which presents a short bio about their movie tastes, as well as a list of public movies in their collection
+ Each user has their own account page where they can edit their bio, email, password
+ Users can clone movies from another user's public collection into their collection
+ The home page features
  + a stream of recently added public movies
  + a list of categories, with a link to each category that shows a page of movies (with links) within that category

  
## Database summary
*Describe the tables and relationships used in your database. Delete the examples below and replace with your own info.*

+ My application has 6 tables in total (`users`, `roles`, `role_user`, `events`, `scores`, `rounds`)
+ There is a many-to-many relationship between `users` and `roles` via `role_user`
+ There is a one-to-many relationship between `users` and `scores`
+ There is a one-to-many relationship between `users` and `events`
+ There are three one-to-many relationships between `users` and `rounds`
+ There is a one-to-many relationship between `events` and `rounds`
+ There are six one-to-many relationships between `scores` and `rounds`

## Outside resources
+https://www.w3schools.com/css/tryit.asp?filename=trycss_text-align
+https://stackoverflow.com/questions/63620516/how-to-maintain-the-old-input-value-in-checkbox-after-validating-by-an-update-re

## Notes for instructor
*Any notes for me to refer to while grading; if none, omit this section*

## Tests
*Include the full output of running `codecept run acceptance --steps`. If you’re taking this course for undergraduate credit and are opting out from testing, simply put "undergraduate - opting out" in this section*  
undergraduate - opting out