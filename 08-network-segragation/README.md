# Network Segregation in Docker and the Docker0 network

`docker network ls`

`docker network prune`

`docker run --rm --name my-webserver -d httpd`

`docker inspect my-webserver`

`docker run --rm <username>/mycurl my-webserver`
	(could not resolve host)

`docker run --rm <username>/mycurl <IP 172.17.0.x>`

`docker network create simple-network`

`docker run --rm --network simple-network --name my-webserver -d httpd`

`docker run --rm --network simple-network <username>/mycurl my-webserver`

`docker network rm simple-network`

Docker use Docker0 network only if we don't define any network.
