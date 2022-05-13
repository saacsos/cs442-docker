# Running Docker Containers with a Shared Host File System (Volume Mounting)

`docker run --rm -v ${PWD}:/myvol ubuntu /bin/bash -c "ls -lha > /myvol/myfile.txt"`

* `-v` : volume mounting from host to container
* `-c` : command

`docker run --rm -v ${PWD}:/files klutchell/rar a /files/myrar.rar /files/myfile.txt`

`docker run --rm -v ${PWD}:/files -w /files klutchell/rar a myrar2.rar myfile.txt`

* `-w` : change directory to working directory (specify the working directory)
