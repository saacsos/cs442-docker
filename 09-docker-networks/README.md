# Docker Networks

## Step 1: Creating a Specific Network in the docker-compose.yml file

`docker-compose up -d`

`docker network ls`

`docker run --rm --network step1_app1_net saacsos/mycurl app1`

## Step 2: Using and Defining Networks in docker-compose.yml file for Network Segregation

`docker-compose up`

- access [http://localhost:8080](http://localhost:8080) and [http://localhost:8080/app2](http://localhost:8080/app2)
