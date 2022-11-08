## SITE DE ENCURTADOR DE URL

O sistema deve ser um encurtador de URL, onde será criado dois cruds:

-   uma área administrativa,
-   uma área para o cliente

### Regras

-   CRUD de Clientes:
    -   Criar, editar, excluir e listar clientes.
    -   O Cliente pode Logar e criar Links encurtados.
-   CRUD de Links Encurtados:

    -   Criar, editar, excluir e listar links criados pelos clientes.

-   Os links deve contar quantos acessos tiveram
-   Só o Usuário Admin pode criar novos clientes
-   Só os clientes podem criar os links encurtados
-   Usuário Admin consegue ver todos os links de listagem
-   O link encurtado nunca pode ser repetir

### Objetivos

O objetivo é fazer com o que o cliente consiga colocar um link que quiser,
e escolher um atalho para esse link.

Por exemplo,

Link original: https://www.google.com/search?q=encurtador+de+link&oq=encurtador+de+l&aqs=

Link encurtado: localhost/encurtadordelinks
