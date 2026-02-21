### Prerequisites

- Docker [link](https://docs.docker.com/get-docker/)
- Docker Compose [link](https://docs.docker.com/compose/install/)
- Git [link](https://git-scm.com/downloads)
- PHP [link](https://www.php.net/downloads)
- Composer [link](https://getcomposer.org/download/)

### Installation
Clone repository

```
 git clone https://github.com/ardhanfah/PWL_2026.git 
 ```

Copy .env.example to .env

```
 cp .env.example .env
```

Set environment variables

```bash
DB_HOST=YOUR_HOST
DB_USER=YOUR_USERNAME # FOR ROOT USER MYSQL
DB_PASSWORD=YOUR_PASSWORD
DB_DATABASE=YOUR_DATABASE
DB_PORT=YOUR_PORT
DB_USERNAME=YOUR_USERNAME
```

Install dependencies

```
composer install 
```


## Docker

Untuk menjalankan aplikasi menggunakan Docker Compose, ikuti langkah-langkah berikut:

```
docker-compose up --build -d
 ```

Lalu akses aplikasi di `http://localhost:8888`

Untuk menghentikan aplikasi, jalankan perintah:

```
docker-compose down 
```
