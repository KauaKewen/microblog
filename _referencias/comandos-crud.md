# Operações CRUD

##Resumo

-C: CREATE (INSERT) -> inserir dados
-R: READ (SELECT) -> ler/carregar dados
-U: UPDATE (UPDATE) -> atualizar dados
-D: DELETE (DELETE) -> excluir dados

## Exemplos

## INSERT na tabela de usuários

```sql

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Tiago', 'tiago@gmail.com', '123senac', 'admin')
```

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('git', 'git@gmail.com', '1234senac', 'admin')

```

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Chaves', 'chaves@gmail.com', '12345senac', 'editor')

```

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Maria', 'maria@gmail.com', 'maria555', 'editor')

```


## SELECT na tabela de usuários

```sql

SELECT nome, email FROM usuarios;

```

```sql

SELECT nome, email FROM usuarios WHERE tipo = 'admin';

```

```sql

SELECT * FROM usuarios WHERE id > 1;

```

### UPDATE na tabela de usuários

```sql

UPDATE usuarios SET tipo = 'editor'
WHERE id = 1;

-- Obs.: NUNCA esqueça de passar pelo menos uma condição para o UPDATE!

```

### DELETE na tabela de usuários

```sql

DELETE FROM usuarios where id = 2;

-- Obs.: NUNCA esqueça de passar pelo menos uma condição para o DELETE!

```

## Exemplos para tabela de notícias 

### Inserir notícias

```sql

INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES('Meu pai ganhou na mega-sena',
'Jogou bons números e (...)',
'Vai pegar o prêmio',
'premio.jpg',
1);
```

### Select em notícias

```sql

SELECT titulo, data FROM noticias;

```

```sql

SELECT titulo, data FROM noticias ORDER BY data DESC;
-- Usamos o ORDER BY data DESC para classificar em ordem decrescente pela data 

```

### Select com JOIN (consulta com junção de tabelas)

**Objetivo:** realizar uma consulta que mostre a data e o título da notícia **e** o nome do autor da notícia.

```sql
SELECT noticias.data, noticias.titulo, usuarios.nome FROM noticias JOIN usuarios ON noticias.usuario_id = usuarios.id;
```

