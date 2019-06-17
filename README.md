# How to run this app
So far I was running the app with the help of [XAMPP](https://www.apachefriends.org), but any similarly configured combination of Apache server and MySQL should work as well.

### Prerequisites
1. Running Apache server
2. Running MySQL with a user priviliged for CRUD operations
3. [Git](https://git-scm.com/)

They can be found 
 - in package managers, 
   - [homebrew](https://formulae.brew.sh/cask/xampp)
   - [chocolatey](https://chocolatey.org/packages/Bitnami-XAMPP)
   - among those many available in linux
 - on official websites, 
 - or installed by root if on linux:   
`# wget https://www.apachefriends.org/xampp-files/7.1.10/xampp-linux-x64-7.1.10-0-installer.run`  
`# chmod +x xampp-linux-x64-7.1.10-0-installer.run`  
`# ./xampp-linux-x64-7.1.10-0-installer.run`

### Installation

1. Navigate to the DocumentRoot directory (`htdocs` in case of XAMPP)
2. Download the source code with `git clone https://github.com/elias-po/simple-todo.git`
3. Navigate to *simple-todo* directory and create file `config.ini`
4. Create a database with a table (can use `dump.sql`)
5. Place database info and credentials of the priviliged user there (like in `config_example.ini`)  
Note: thit is not a safe way of storing credentials
6. In the browser go to \<server url\>/simple-todo