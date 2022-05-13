# Dockerfile Step-By-Step

## Step 1: first dockerfile

`docker build -t myapp .`

- Build docker image using Dockerfile
- `-t` : name a tag in `name:tag` format

`docker run myapp`

- running image into container

## Step 2: Custom PHP Development Server inside a Container

`docker build -t myapp:web .`

`docker run -p 8082:8000 myapp:web`

## Step 3: Ship Your Web Application using Apache/PHP

`docker build -t myapp:apache .`

`docker run --name myphp-apache -p 8083:80 myapp:apache`
