##
### SISTEMAS DE AUTENTICAÇÃO EM PHP COM SEGURANÇA
##

<p align="center">
  <img alt="...." src="./assets/PHP-logo.svg.png" width="20%">
</p>



<p align="center">
  <img alt="...." src="./assets/sistema-login.jpg" width="90%">
</p>



<p align="center">
  <img alt="...." src="./assets/codeigniter_plain_wordmark_logo_icon_146592.png" width="20%">
</p>




<p align="center">
  <img alt="...." src="./assets/laravel_plain_wordmark_logo_icon_146439.png" width="20%">
</p>



##
### 1 - PROJETO COMPLETO | SISTEMA DE LOGIN BÁSICO COM PHP PURO
##



**URLs**

- http://localhost/php_authentication-system/login_001/public/
- http://localhost/php_authentication-system/login_001/public/login.php
- http://localhost/php_authentication-system/login_001/public/index.php?rota=home
- http://localhost/php_authentication-system/login_001/public/index.php?rota=login
- http://localhost/php_authentication-system/login_001/public/index.php?rota=logout
- http://localhost/php_authentication-system/login_001/public/index.php?rota=page1
- http://localhost/php_authentication-system/login_001/public/index.php?rota=page2
- http://localhost/php_authentication-system/login_001/public/index.php?rota=page3


- Exemplo:
  - 001_login


##
### 2 - CONSUMO DE UMA API COM PHP PURO | PROJETO COMPLETO
##

- API - Rest Countries
  - Link: https://restcountries.com/

- EndPoints:
  - All: https://restcountries.com/v3.1/all
  - Brasil: https://restcountries.com/v3.1/name/brazil

**Bootstrap**

- Bootstrap
  - Link: https://getbootstrap.com/


**URLs**

- http://localhost/php_authentication-system/002_consumo-api/
- http://localhost/php_authentication-system/002_consumo-api/index.php?route=teste
- http://localhost/php_authentication-system/002_consumo-api/scripts/home.php


**Postman**

- Postman
  - Link: https://www.postman.com/

**VSCode**

- Extensão:
  - `Thunder Client`

**Thunder Client**

- Thunder Client
  - Link : https://www.thunderclient.com/


- Vscode Code Snippet {}
  - PHP Puro = cURL

**Curl**

- Curl
  - Link: https://curl.se/


- Code Snippet (Copy)
  - Inicio do home.php

- Code ...
```php
<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://restcountries.com/v3.1/all",
  CURLOPT_RETURNTRANSFER => true,
  // CURLOPT_SSL_VERIFYPEER => false, // solução de erro SSL
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Accept: */*",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
```

- **IMPORTANTE!**

- Erro!
  - cURL Error #:SSL certificate problem: certificate has expired

- Solução
- Acrescentar trecho de codigo no arquivo `home.php`
```
CURLOPT_SSL_VERIFYPEER => false,
```

- Exemplo:
  - 002_consumo-api



### 3 - SISTEMA DE LOGIN SIMPLES COM PHP PURO E MYSQL | PROJETO COMPLETO

**Bootstrap**

- Link: https://getbootstrap.com/


- Include via CDN

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
```

**MySQL**

- Link: https://www.mysql.com/

**Laragon**

- Link: https://laragon.org/download/index.html

**HeidiSQL**

- Link: https://www.heidisql.com/


- Sayo2A6OT5Si

- Exemplo:
  - 003_login







