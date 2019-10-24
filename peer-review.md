## P3 Peer Review

+ Reviewer's name: Jane
+ Reviwee's name: Jeremiah
+ URL to reviewee's Github repo: *<https://github.com/jeremiahazurin/e2>*
+ URL to Jeremiah's P3 game: http://p3.jae2.me/

*Answer the following questions in regards to the student's project you are reviewing. Include code 
snippets in your answers when relevant.*


### Are you able to produce any errors or unexpected results?
There were no errors produced, however I noticed when neither Rock, Paper or Scissors were chosen, the 
results still produced a tie. Perhaps requiring player to enter a selection before hitting "Go" can 
resolve that. I also noticed the page did not provide a link to redirect the player to play the game 
again afterwards as professor Buck showed us in lecture. 

### Referencing the course notes on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
For P3, Jeremiah used Form Design C and included index-controller.php (SESSION), index.php (form method: 
GET) and process.php (appropriate annotations to GET results).


### Are there any separation of concern issues (i.e. non-display specific logic in view files, display 
code in controller files)? 
No, I think he did a great job!

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?


### List any/all built-in PHP methods used with a brief summary of what the method does
Found on pages  index.php and process.php -

echo $results['winner']: Output the results of the winner from Rock, Paper, Scissor.  The PHP command (echo) outputs text to the 
web browser.

$_GET: The GET method sends the encoded information appended to process.php. This is one way information 
is sent to the web server.


Found on page index-controller.php and process.php -
$_SESSION : A session is a way to store information (in variables) to be used across multiple pages. From index.php 
we can access and retrieve the session information stored on index-controller and process.php. 


Found on page process.php -
rand(0,2):  The rand() function generates a random integer and was helpful in choosing a random move of 
Rock, Paper or Scissor.


### Are there any parts of the code that you found interesting or taught you something new?


### Are there any parts of the code that you don't understand?
As a beginner, this was a difficult project for me to complete but as I look through each 
page and compare it to class lectures and notes I find Jeremiah's project easy to understand and follow.


### Are there any best practices discussed in course material that you feel were not addressed in the 
code?
I noticed Jeremiah did not use any outside resources. I would suggest using an code editor to check for 
any errors.

### Do you have any additional comments not covered in the above questions?
