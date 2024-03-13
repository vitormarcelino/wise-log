## Executando o Projeto

Requisito: Docker

Após clonar o projeto, executar os seguintes passos:

- Instalar as dependências composer, para isso rodar o seguinte comando Docker:

```
docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer install
```

- Levantar os containers Docker:

```
 ./vendor/bin/sail up -d
```

- Corrigir as permissões de arquivos:
```
./vendor/bin/sail root-shell
chown -R sail:sail .
 ```

- Rodar as migrations e seeders:
```
 ./vendor/bin/sail artisan migrate:fresh --seed
```

Ao fim deste processo, o projeto estará acessivel em http://localhost
