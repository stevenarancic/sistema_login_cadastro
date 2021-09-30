# Sistema de Cadastro e Login PHP
 Sistema de cadastro e login de usuário feito em **PHP**.
 
 O padrão de arquitetura utilizado no projeto foi o **MVC** (Model, View & Controller), na qual:
  - A camada de Visualização (**View**) são as telas em sí (tela de cadastro, tela de redirecionamento, etc)
  - A camada de Controle (**Controller**) é o intermediário entre a tela e o Modelo, para que o código fique desacoplado e cada componente faça somente o que foi feito pra fazer.
  - A camada de Modelo (**Model**) é onde fica a regra de negócios, onde fica a classe do usuário, a classe com os métodos de CRUD, etc.
 
O SQL foi todo feito usando **PDO** e o CSS todo feito com o framework css **Bulma**

## Resultado final:
### Computador:
![home_sistema_login](https://user-images.githubusercontent.com/58119793/135366095-99a91a8b-d2ad-49a4-a4db-4e8a019fb2c0.png)
Página Inicial do sistema, aqui você encontra 2 botões: Logar e Cadastrar

![register_sistema_login](https://user-images.githubusercontent.com/58119793/135366247-a7af0aca-be72-4b15-b2ec-2f4278c394ec.png)
Página de cadastro, aqui você pode:
 - Cancelar o cadastro, ação que retorna para a Página Inicial (index.php);
 - Preencher os campos e efetuar o cadastro, que ao ser concluído com sucesso te leva de volta para a página inicial e, caso dê errado, cancela o cadastro e só retorna uma mensagem de erro;
 - Abrir a tela de login, caso ele já tenha uma conta.

![login_sistema_login](https://user-images.githubusercontent.com/58119793/135366418-432fb91e-7ac8-47cf-9d03-b87e31a2ccb1.png)
Página de login, aqui você pode:
 - Voltar para a Página Inicial;
 - Preencher os campos e efetuar o Login, que ao ser concluído com sucesso abre uma página secreta (home.php) e, caso dê errado, retorna um erro e não efetua o login.
 - Abrir a tela de cadastro, caso ele não tenha uma conta.
### Celular:
A seguir, fotos das telas de login e cadastro no celular:

![login_sistema_login_mobile](https://user-images.githubusercontent.com/58119793/135366574-7cea5aa5-792c-4048-ae4c-4247e7392283.png)
![register_sistema_login_mobile](https://user-images.githubusercontent.com/58119793/135366576-f620eb50-1cb6-4e4e-a426-c54c02aa7c14.png)
