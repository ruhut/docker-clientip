Simple Dockerized Nginx-Php application

Goals:
1. Shows Client's IP Address
2. Count Hits from every Client

Explanations:
1. This app is running nginx and php7-fpm on top of Dockerized environment
2. On each hit, php will run get_client_ip function
3. Php will create file named from Client's IP (.txt) and store the hit count inside the file
3. Php show both Client IP Address and Hit count

How to deploy:
1. Run 'docker-compose up -d'
2. Nginx container will listen to port 80
3. Test the value by accessing 'http://localhost' or 'http://127.0.0.1' using curl or web browser