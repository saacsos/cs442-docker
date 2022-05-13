# Running a Single Docker Container

`docker run -it ubuntu /bin/bash`

* `-it` : interactive terminal

`docker ps`

`docker ps -a`

* `-a` : all

`docker start <container-id>`

`docker start <container-name>`

`docker stop <container-id>`

`docker stop <container-name>`

`docker run -it -d --rm --name linux1 ubuntu /bin/bash`

* `-d` : detach / daemon (run in background)
* `-rm` : remove container after stop process
* `--name` : rename the container

`docker attach <container-id>`

* `attach` : go to container terminal

