# RESTful API with Symfony 4 and Json Web Tokens 

Full Rest API with symfony 4.2 + JWT + FOSUser and FOSRest

## Installation**

```bash
git clone this_repos
cd this_repos
composer install

# We create the directory jwt.
mkdir config/jwt
 
# We generate the private certificate using the pass phrase "luckey".
openssl genrsa -out config/jwt/private.pem -aes256 4096
 
# We generate the public certificate by entering the pass phrase "luckey"
# when you request it
openssl rsa -pubout -in config / jwt / private.pem -out config / jwt / public.pem

curl -X POST -H "Content-Type: application/json" http://127.0.0.1:8000/api/login-check -d "{'username': 'muhammadtaqi', 'password': 'nopass!'}"

curl -X POST -H "Content-Type: application/json" http://127.0.0.1:8000/api/token/refresh -d "{'refresh_token': 'fasdfasdfasdf'}"

```

*Remember to configure your database in .env !*

## 

https://github.com/akserikawa/RESTful-API-Symfony-4-JWT/tree/master/src/Entity
https://github.com/ajyanreyu/spa-management
https://github.com/deozza/Philarmony
