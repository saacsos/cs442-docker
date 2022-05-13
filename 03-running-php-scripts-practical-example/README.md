# Running PHP Scripts - Practical Example

`docker run -it --rm --name my-running-script php:8.1.5-cli /bin/bash`

---

`docker run -it --rm -v ${PWD}:/myfiles --name my-running-script php:8.1.1-cli /bin/bash`

---

`docker run -it --rm -v ${PWD}:/myfiles -w /myfiles --name my-running-script php:8.1.1-cli /bin/bash`

---

`docker run -it --rm -v ${PWD}:/myfiles -w /myfiles --name my-running-script php:8.1.5-cli php index.php`
