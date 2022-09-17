### Atividade final DAOO


Comandos após o clone: 

```bash
composer install
```

```bash
npm install
```

Crie um novo arquivo .env e gere a APP_KEY através do artisan

```bash
php artisan key:generate
```

Execute as seeders do projeto
```bash
php artisan db:seed
```

Para testar as rotas é preciso iniciar o servidor com o comando abaixo:
```bash
php artisan serve --port=8082
```

Para criar um usuário com token, no postman ou insomnia:
```bash
http://localhost:8082/api/usuarios
```

Após isso é possível gerar um token com login:
```bash
http://localhost:8082/api/login
```

É possível testar rotas sem autenticação como exemplo abaixo:
```bash
GET:http://localhost:8082/api/empresas
    http://localhost:8082/api/candidatos
```

Com token sem ser administrador é possível testar as seguintes rotas:
```bash
GET:http://localhost:8082/api/empresas/{id}/vagas
    http://localhost:8082/api/vagas
    http://localhost:8082/api/vagas/{id}
    http://localhost:8082/api/empresas/{id}
    http://localhost:8082/api/candidato/{id}
POST:http://localhost:8082/api/vagas
PUT:http://localhost:8082/api/vagas/{id}
DELETE:http://localhost:8082/api/vagas/{id}
```

Com token de administrador é possível testar as seguintes rotas:
```bash
POST:http://localhost:8082/api/empresas
    http://localhost:8082/api/candidato
PUT:http://localhost:8082/api/empresas/{id}
    http://localhost:8082/api/candidatos/{id}
DELETE:http://localhost:8082/api/empresas/{id}
       http://localhost:8082/api/candidatos/{id}