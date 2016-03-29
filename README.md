# Personal Project - Random Person Generator (PHP/jQuery)
This is a personal project of mine based on the <a href="https://github.com/richard1990/random-person-generator-java">Java Random Person Generator</a> I previously did. This is a "random person generator" with most of the code written in PHP and uses jQuery to reload without refreshing.

You can generate a random male or female by clicking on the respective button beneath the table that holds the data. Each person generated will have a randomly generated data such as a full name, mother's maiden name, residence, birthplace, age, favorite color/food, height, weight, and more. Their phone number has a real-life area code related to their residence (e.g. 613 if they are born in Ottawa). The names and occupations are loaded from text files containing hundreds to thousands of samples to choose from, and with all of the data randomized, there is basically no way two people generated will be the same. I also included a little story at the bottom of the table that just summarises everything generated.

Upon clicking a button, a "master" PHP file is loaded (either generate_female.php or generate_male.php) that includes a bunch of other PHP files that hold all the data necessary to build the random person. Using jQuery, the "master" PHP file is then loaded into a div on the "index.html" webpage, allowing people to be generated without having the whole page to be refreshed.

This is just a rough version I've been working on. There is basically no CSS and I plan on fixing that in the future. I also want to incude more data such as SIN and credit card stuff and whatever else I can think of, and I want the ability to export the data, either as a TXT file or as an XML file. I also plan on expanding the story and want to make it more creative. 

You can play around with it on my website <a href="http://dev1.richardbarney.ca/random_person_generator/">here</a>.
