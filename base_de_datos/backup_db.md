
### Backup de todo Banco de Dados
> mysqldump -u root -p nomedodb > /nomedoarquivo.sql


### Backup somente dos dados
> mysqldump -u root -p --no-create-info nomedodb > /nomedoarquivo.sql


### Backup somente da estrutura
> mysqldump -u root -p --no-data nomedodb > /nomedoarquivo.sql







## Restaurando banco de dados
> mysql -u root -p bancoapagado < novobanco.sql 
