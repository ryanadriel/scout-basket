# 🏀 Scout Basket – Aplicação Laravel com Docker

Este projeto é uma aplicação Laravel configurada para rodar em um ambiente Docker completo com Nginx, MySQL, Redis e PHPMyAdmin.

## 🚀 Tecnologias Utilizadas

- Laravel
- Docker & Docker Compose
- MySQL 8
- Redis
- Nginx
- PHPMyAdmin

---

## 📦 Estrutura dos Containers

| Serviço      | Descrição                         | Porta Externa |
|--------------|-----------------------------------|----------------|
| `app`        | Container Laravel (PHP)           | —              |
| `webserver`  | Servidor Nginx                    | `8000`         |
| `db`         | Banco de dados MySQL              | `3306`         |
| `redis`      | Cache Redis                       | `6379`         |
| `phpmyadmin` | Interface web para o MySQL        | `8080`         |

---

## ⚙️ Pré-requisitos

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

---

## 🛠️ Como usar

### 1. Clonar o repositório

```bash
git clone https://github.com/ryanadriel/scout-basket.git
cd seu-repositorio
```

### 2. Copiar o `.env`

```bash
cp .env.example .env
```

Ajuste o conteúdo do `.env` se necessário.

### 3. Subir os containers

```bash
docker-compose up -d --build
```

### 4. Instalar as dependências do Laravel

```bash
docker exec -it laravel_app composer install
```

### 5. Gerar a chave da aplicação

```bash
docker exec -it laravel_app php artisan key:generate
```

### 6. Rodar as migrações

```bash
docker exec -it laravel_app php artisan migrate
```

---

## 🌐 Acessos Rápidos

- **Aplicação Laravel:** [http://localhost:8000](http://localhost:8000)
- **PHPMyAdmin:** [http://localhost:8080](http://localhost:8080)
    - Usuário: `root`
    - Senha: `secret`

---

## 📁 Volumes e Persistência

- `dbdata`: Armazena os dados do MySQL
- `redisdata`: Armazena os dados do Redis
- `vendor`: Compartilhado para evitar reinstalação das dependências

---

## 🧹 Comandos Úteis

- Parar os containers:
  ```bash
  docker-compose down
  ```

- Ver logs:
  ```bash
  docker-compose logs -f
  ```

- Acessar o container da aplicação:
  ```bash
  docker exec -it laravel_app bash
  ```
