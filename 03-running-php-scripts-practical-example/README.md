# Running PHP Scripts - Practical Example

`docker run -it --rm --name my-running-script php:8.3.14-cli /bin/bash`

---

`docker run -it --rm -v ${PWD}:/myfiles --name my-running-script php:8.3.14-cli /bin/bash`

---

`docker run -it --rm -v ${PWD}:/myfiles -w /myfiles --name my-running-script php:8.3.14-cli /bin/bash`

---

`docker run -it --rm -v ${PWD}:/myfiles -w /myfiles --name my-running-script php:8.3.14-cli php index.php`
