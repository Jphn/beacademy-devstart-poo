<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# 📂 AULA 21 ⇆ 24

## ÍNDICE

### Tópicos

- AutoLoad
- NameSpaces
- Biblioteca DomPDF

### Layout de pastas e arquivos

```sh
aula-21/
│   composer.json
│   composer.lock
│   index.php
│   README.md
└───src/
    │   Categoria.php
    │   Cliente.php
    │   Gestor.php
    │   Produto.php
    │   Usuario.php
    └───config/
        │   Usuario.php
        └───database/
                MySql.php
```

## UTILIZAÇÃO

### Clonando o repositório

```sh
# Clonagem do repositório original
git clone https://github.com/Jphn/beacademy-devstart-poo.git
```

### Rodando localmente

> É necessária a instalação do PHP na sua máquina e a adição do binário do mesmo as variáveis do seu ambiente. Estou utilizando a versão `8.1.6` do PHP. Também é importante instalar a ferramenta`composer`, para rodar a aplicação.

```sh
# Acesse a pasta do repositório
cd ./beacademy-devstart-poo/aula-21/
# Instalação de dependências
composer install
# Geração do arquivo de carregamento automático das classes
composer dump-autoload
# Inicialização do servidor PHP
php -S localhost:8000
```

## CÓDIGOS

### [Índice](./index.php)

```php
include __DIR__ . './vendor/autoload.php';

use Dompdf\Dompdf;
use Classes\Config\Usuario as ConfigUsuario;
use Classes\Usuario;


// include 'classes/Categoria.php';
// include 'classes/Cliente.php';
// include 'classes/Gestor.php';
// include 'classes/Produto.php';
// include 'classes/Usuario.php';
// include 'classes/config/Usuario.php';



$us1 = new ConfigUsuario();
$us2 = new Usuario();

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '';

for ($i = 1; $i <= 10; $i++) {
 $html .= 'Down!<br>';
}

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('beacademy.pdf', [
 'Attachment' => 0,
]);
```

## AUTOR

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>
<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
