Quick 3 step instructions for a Drupal 8 Trial Run:
1 - Install docker:

https://docs.docker.com/installation/
2 - Get the image and run it using port 80:

Open a terminal and run

docker run -i -t -p 8082:80 ricardoamaro/drupal8

If the port 80 is already in use, please change the port.

3 - Visit Drupal 8 in your browser

http://localhost:8082/

Credentials (user/pass): admin/admin

Using drupal8_local.sh or drupal8_local.bat for local development
Fresh install

For a fresh install or re-install of your existing code

    Remove the local/data/ folder
    Create a local/web/ folder with your Drupal 8 docroot
    eg. composer create-project drupal-composer/drupal-project:8.x-dev local --no-interaction
    Delete the sites/default/settings.php file
    Run drupal8_local.sh to linux/mac users or drupal8_local.bat to windows users

Credentials (will be shown in the output)

    Drupal account-name=admin & account-pass=admin
    ROOT SSH/MYSQL PASSWORD will be on $mysql/mysql-root-pw.txt
    DRUPAL MYSQL_PASSWORD will be on $mysql/drupal-db-pw.txt

Stoping and starting Drupal8-docker-app

To stop and restart the installed existing site

    Press CTRL+C on the console showing the logs
    Run drupal8_local.sh or drupal8_local.bat on the same directory
    Open the site URL mentioned in the console

