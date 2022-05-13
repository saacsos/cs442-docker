# Upload Custom Images to Docker-Hub Image Repository

`docker build -t mycurl .`

`docker run mycurl www.google.com`

`docker system prune`

`docker login`

`docker image ls`

`docker tag mycurl <username>/mycurl:latest`

`docker image ls`

`docker push <username>/mycurl:latest`
