
### Criando uma conta de usuário
> CREATE USER usuario IDENTIFIED BY '#senha';


### Criando uma conta de usuário local
> CREATE USER usuario@localhost IDENTIFIED BY '#senha_do_user';


### Criando uma conta de Super usuário.
> CREATE USER superuser@'%' IDENTIFIED BY '#senha_do_super';


### Ver os privilégios dos usuários
> SHOW GRANTS FOR usuario;