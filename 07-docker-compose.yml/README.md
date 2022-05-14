# The docker-compose.yml

## Step 1: Explained Line-by-Line

`docker-compose up`

`docker-compose up --build`

- `--build` ใช้เมื่อมีการแก้ไข Dockerfile หรือไฟล์ใน context

`docker-compose rm`

`docker images`

`docker rmi <image-id>`

## Step 2: Volume Mounting

`docker-compose up -d`

`docker-compose down`

## Step 3: Build Own Images with Custom Configuration

`docker-compose up -d`

`docker-compose down`

## Step 4: Sample Development Environment

`docker-compose up -d`

`docker-compose down`

## Step 5: Data Persistence in Host-Volume Mounted Directories

`docker-compose up -d db`

`docker-compose run --rm dbclient`

`docker-compose down`

## Step 6: Data Persistence in Named-Volumes and Data-Sharing in Containers

`docker-compose up -d db`

`docker-compose run --rm dbclient`

`docker-compose down`

`docker volume ls`

`docker volume rm <volume name>`

`docker volume create --name my-vol`

`docker run -v my-vol:/mydata --rm --it ubuntu /bin/bash`
