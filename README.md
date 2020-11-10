# Dynamic Blogging System
A dynamic web application generates the pages/data in real time, as per the request, a respective response will trigger from the server end and will reach the client end.
---
## Requirements
* Xampp - php 7+
* phpMyAdmin
* Notepad++
* Browser
---
## Installation
1. Extract the Blogging System folder.
2. Install XAMPP and move the folder to C:\xampp\htdocs\.
3. Import the database(blog_database.sql) into phpMyAdmin.
4. Open the XAMPP Control Panel and start the Apache and MySQL Module.
5. Open the browser and search "http://localhost/blog_sys" in address bar to see all the blog in the blog site.
---
## Features
* Viewing Blog
	* Blog Wise
		* To see the individual Blog in detail, click the blog title in the top of the blog.
	* Author Wise
		* To see the author wise blog, click the blog author in the top of the blog.
	* Category Wise
		* To see the category wise blog, click the category(HTML5, Java, etc.,) in the top or side bar of the blog site.
		
* Comments
	* Comments are done by using the name, email, comment at the end of the individual blog.
	* Approved comments(Done by the Admin) are only displayed under the individual blog.
	
* Registration
	* To Register, Click on the registration in the top of the blog site.
	* Enter Username, E-mail, Password and Click Register.
			
* Managing Blogs
	* Login as username: admin; password: admin.
	* It moves to the admin page, to manage all the category, post, users and comments.
	* Category
		* To Add blog category, click on the [category] placed in the left side of the admin page.
		* To edit of blog category, click on the [category] placed in the left side of the admin page.
	* Post
		* To manage post, click on the [post --> view all Post] placed in the left side of the admin page.
		* To Add post, click on the [post --> Add Post] placed in the left side of the admin page.
		* To edit post, click on the [post --> view all Post --> Edit] placed in the table of the view all post.
		* To delete post, click on the [post --> view all Post --> Delete] placed in the table of the view all post.
	* User
		* To manage user, click on the [user --> view all Post] placed in the left side of the admin page.
		* To Add user, click on the [user --> Add user] placed in the left side of the admin page.
		* To edit user, click on the [user --> view all user --> Edit] placed in the table of the view all user.
		* To delete user, click on the [user --> view all user --> Delete] placed in the table of the view all user.
	* Comments
		* To manage comments, click on the [comments] placed in the left side of the admin page.
		* To approve or unapprove comment, click on the [comments --> (approve) or (unapprove)] placed in the table of the comments.
			(Approved comments only displayed in the comment section of the post)
		* To edit comment, click on the [comments --> Edit] placed in the table of the comments.
		* To delete comment, click on the [comments --> Delete] placed in the table of the comments.
	* Profile
		* To know about the user, click on the [profile] placed in the left side of the admin page.
	* Logout
		* To logout from the admin page, click on the [user --> logout] of the top right corner of  admin page.
	
* Blog Search
	* Enter the tag or name in the search textbox to search for the blog.
	* It retrieve the data if exist otherwise it shows "No Result".
---
## Explore the App
