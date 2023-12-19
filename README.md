# Welcome to Json Path Picker With PHP!

Json Path Picker With PHP is a tool for routing JSON based on its path in the JSON tree structure. This project is a combination of 2 other tools, the main source link of which I mention below.

[php-json-path](https://github.com/remorhaz/php-json-path) -> This tool is for routing in JSON file in PHP
[json-path-picker](https://github.com/piotros/json-path-picker) -> This tool is for creating a tree structure in JSON.


**Project Preview**
![demo](https://raw.githubusercontent.com/alihesarian/json-path-picker-with-php/main/images/demo.png)

**Project Execution**
After downloading or cloning the project, open the project directory with the command line and run the following command to get the required packages.

    composer update

> Of course, PHP Composer must be installed on your system

After installing the required packages, now we have to run the project through php. For this, you can use the following command in the project directory to serve the project.

    php -S 127.0.0.1:8500


![Example of project execution](https://raw.githubusercontent.com/alihesarian/json-path-picker-with-php/main/images/preview.gif)


Well, now the project is up and you can use it. Of course, I don't think it will be useful to use it simply. You can use it in your projects. For example, I used it in a system whose task was to update the exchange rate through different APIs. add its own api user interface and specify which value of a model to fill in each API response field, this is an example of its use, good luck :)
