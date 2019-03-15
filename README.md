# OSSS Web Developer Challenge

## Task
Create a 3-page website for the UIC Office of Academic and Enrollment Services. The pages should be modern, responsive, and accessible recreations of the pages listed below with additional modifications as specified. Incomplete submissions will be considered, so please do not be deterred if you are unable to complete any section. This challenge must be submitted by 11:59:59pm on March 24th, 2019 for fullest consideration. Note: Don’t forget to review the resource links.

* Home: https://aes.uic.edu/
* Who We are: https://aes.uic.edu/who_we_are 
* Contact us: https://aes.uic.edu/contact
### Instructions
Download or Clone the GIT repository **https://github.com/dpazuic/osss-challenge**.

Build out the pages included in the repository using modern aesthetics. Feel free to use [Bootstrap](https://getbootstrap.com/) or any other grid layout system. You can incorporate [UIC Brand guidelines](https://marketing.uic.edu/marketing-toolbox/university-style-guide/) into your design, though complete adoption is not necessary. 

With regards to the existing copy on the pages, feel free to leave it unchanged or update at your discretion. For the site navigation, you only have to account for the 3 pages you are building.

#### Home Page
The home page must include an AJAX call to a JSON API that will render the data to the `#ajax` `div`. How you style and format the data is up to you. Use the API located at [https://jsonplaceholder.typicode.com/posts](https://jsonplaceholder.typicode.com/posts) .

#### Who We Are Page
The who we are page must include the slate form embed found in the [README](slate/README.md) of the [slate](slate/) directory of the cloned repository. You must also provide CSS styles that will override the look of at least one input element once the form is loaded on the page. For an example please see the [UIC Graduate Contact Form](https://admissions.uic.edu/graduate-professional/contact-graduate-and-professional-admissions).
#### Contact Us Page
The Contact Us page must include a form that can successfully POST to [https://aes.uic.edu/challenge/contact-form-data.php](https://aes.uic.edu/challenge/contact-form-data.php). A copy of the logic (PHP) used by the form processing script can be found in the [php](php/) directory of the repository. The data submitted will be logged to the server and displayed on the page you are POSTing to. **NOTE:** Your form must include a hidden input named `key` which is a assigned the value of the key provided to you in the instruction email.

## Submitting Work
To submit your work, create a ZIP of your work and submit it to aes_webmaster@uic.edu. All work must be submitted by **11:59:59pm** on March 24th, 2019 for fullest consideration. If you experience any difficulty, please send an email to [aes_webmaster@uic.edu](aes_webmaster@uic.edu) .

## Resources
* https://getbootstrap.com/ 
* https://marketing.uic.edu/marketing-toolbox/university-style-guide/ 
* https://red.uic.edu/ 
* https://git-scm.com/ 
* https://fae.disability.illinois.edu/ 
* https://ainspector.github.io/installation.html 
* https://wave.webaim.org/extension/ 
