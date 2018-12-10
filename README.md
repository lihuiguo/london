# london

## Ontology  

### Classes  
 
- USER: somoeone interested in traveling, specifically to London, who is looking for general information about the city  
- ADMIN-USER: Someone who is responsible for managing the website and its data
- INFORMATION: the front-end and back-end information seen by someone usingthe site, _containing_ sublasses DATA and TRIVIA.    
- DATA: the back-end databases and information that the ADMIN-USER has access too.  
- TRIVIA: information the USER sees, _containing_ knowledge about the city and also the LINKS on each page.  
- LOGIN: a set of information containing a password and a username. Every ADMIN-USER has a LOGIN.  
- PAGE: any page of the website. Each PAGE _has_ INFORMATION and LINKS.  
- LINKS: any hyperlinked text that leads a user from one page to another.  
- SURVEY:  the paae of the site that _contains_ QUESTIONS 
- QUESTIONS:  the questions _in_ the SURVEY 
- CODE:  the actual code present _in_ every PAGE  
- HOME: the index page, and all information and links containd within.  




## Taxonomy 

- 'London Calling' is used as the main header across the board, to link the pages of the sites together.  

The terms used in the info-page.php file for the headings are:  
- Food & Drink  
- Attractions  
- History  

The terms used in the survey.php code (and the response data table) include:  
- first name  
- last name  
- email  
- food  
- attractions  
- history  
- cultural attractions--this was used in the form code to avoid having different wuiestions have the same value in their name. It is back-end only.
- parks and gardens  
- pubs and bars  
- afternoon tea  
- fine dining  
- amusements  
- museums and galleries
- and of course, the submit button




## Choreography  

### FOr the USER   
- from landing page, USER can click through to SURVEY directly. They will then be taken to the THANK YOU landing page, where they can click back to HOME or away.  
- from landing page, USER can click through to the info page, scroll through the page, and click through to SURVEY. They will then be taken to the THANK YOU landing page, where they can click back to HOME or away.  

### For the ADMIN-USER  
- from landing page, ADMIN-USER can click through to the login PAGE directly; the link is in the weak-follow section of the landing page. They can then login or sign up. If they log in, they will be taken to the admin-data page, where they can access to DATA from the website. If they sign up, they will be taken to a sign up page, where they can create an account, and then back to the login page, where they can log in and then access the admin-data page. From the admin-data page,  they can click back to HOME or leave the site.  
