# Desafio-Back-end-PHP-Laravel 💚🐘

<h1> Objetivo: </h1>
Temos 2 tipos de usuários, os comuns e lojistas, ambos têm carteira com dinheiro e realizam transferências entre eles. Atentar somente ao fluxo de transferência entre dois usuários.

<h2> Requisitos: </h2>

Para ambos tipos de usuário, precisamos do Nome Completo, CPF, e-mail e Senha. CPF/CNPJ e e-mails devem ser únicos no sistema. Sendo assim, seu sistema deve permitir apenas um cadastro com o mesmo CPF ou endereço de e-mail.

Usuários podem enviar dinheiro (efetuar transferência) para lojistas e entre usuários.

Lojistas só recebem transferências, não enviam dinheiro para ninguém.

Validar se o usuário tem saldo antes da transferência, caso tente transferir um valor maior que o saldo aparecerá "Saldo Insuficiente",se tiver saldo,
aparecerá a "Tranferência realizada com sucesso".

Solicitar senha antes da transferência, em caso de erro na senha irá aparecer "Senha incorreta" na tela.

Ambos os usuários(lojista e comum) conseguem ver histórico de transferência.


