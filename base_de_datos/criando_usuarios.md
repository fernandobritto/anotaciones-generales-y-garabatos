
### Criando uma conta de usuário
> CREATE USER usuario IDENTIFIED BY '#senha';


### Criando uma conta de usuário local
> CREATE USER usuario@localhost IDENTIFIED BY '#senha_do_user';


### Criando uma conta de Super usuário.
> CREATE USER superuser@'%' IDENTIFIED BY '#senha_do_super';


### Ver os privilégios dos usuários
> SHOW GRANTS FOR usuario;





## Privilégios aos usuários com a declaração GRANT

#### Este usuário terá todos os privilégios, também poderá conceder privilégios a outros usuários.
> GRANT ALL ON *.* TO superuser@'%' WITH GRANT OPTION;


#### Usuário com todas as permissões e todos as bases.
> GRANT ALL ON *.* TO superuser@'%' WITH GRANT OPTION;


### Usuário com todas as permissões e acesso a apenas uma base de dados.
> GRANT ALL ON  banco.* TO usuario 


### Usuário com todas as permissões e acesso apenas uma base de dados e uma tabela.
> GRANT ALL ON  banco.tabela TO usuario 


### Usuário com restrições 

> CREATE USER assistente IDENTIFIED BY 'senha123';
>
> GRANT SELECT, UPDATE, DELETE ON banco.* TO assistente;
>
> SHOW GRANTS FOR assistente;





## Remover os privilégios dos usuários com a declaração REVOKE
> REVOKE ALL PRIVILEGES, GRANT OPTION FROM usuario; 
