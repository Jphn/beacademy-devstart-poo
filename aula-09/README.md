<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# 📂 AULA 09 ⇆ 11

## ÍNDICE

### Tópicos

- Construtores de classe
- Parâmetros ReadOnly

### Layout de pastas e arquivos

```sh
 aula-09
 ├──Aluno.php
 ├──Categoria.php
 ├──Curso.php
 ├──Disciplina.php
 ├──index.php
 ├──Produto.php
 ├──Professor.php
 └──README.md
```

## CÓDIGOS

### [Classe Aluno](./Aluno.php)

```php
declare(strict_types=1);

class Aluno
{
 private string $nome;
 private string $cpf;

 public function __construct(string $nome, string $cpf)
 {
  $this->setNome($nome);
  $this->setCpf($cpf);
 }

 public function setNome(string $nome): void
 {
  $this->nome = $nome;
 }

 public function setCpf(string $cpf): void
 {
  if (!intval($cpf) || strlen($cpf) != 11)
   die('O CPF deve conter apenas números e 11 caracteres!');
  $this->cpf = $cpf;
 }

 public function getNome(): string
 {
  return $this->nome;
 }

 public function getCpf(): string
 {
  return $this->cpf;
 }
}
```

### [Classe Categoria](./Categoria.php)

```php
declare(strict_types=1);

class Categoria
{
 public function __construct(private string $nome, private string $desc)
 {
 }

 public function getNome(): string
 {
  return $this->nome;
 }

 public function setNome(string $nome): void
 {
  $this->nome = $nome;
 }
}
```

### [Classe Curso](./Curso.php)

```php
declare(strict_types=1);

class Curso
{
 private string $nome;
 private int $cargaHoraria;
 private string $desc;

 public function __construct(string $nome, int $cargaHoraria)
 {
  $this->setNome($nome);
  $this->setCargaHoraria($cargaHoraria);
 }

 public function getNome(): string
 {
  return $this->nome;
 }

 public function getCargaHoraria(): int
 {
  return $this->cargaHoraria;
 }

 public function getDesc(): string
 {
  return $this->desc;
 }

 public function setNome(string $nome): void
 {
  $this->nome = $nome;
 }

 public function setCargaHoraria(int $cargaHoraria): void
 {
  $this->cargaHoraria = $cargaHoraria;
 }

 public function setDesc(string $desc): void
 {
  $this->desc = $desc;
 }
}
```

### [Classe Disciplina](./Disciplina.php)

```php
declare(strict_types=1);

class Disciplina
{
 private string $nome;

 public function __construct(string $nome)
 {
  $this->setNome($nome);
 }

 public function getNome(): string
 {
  return $this->nome;
 }

 public function setNome(string $nome): void
 {
  $this->nome = $nome;
 }
}
```

### [Index](./index.php)

```php
include './Produto.php';
include './Categoria.php';

$c1 = new Categoria('Calçados', 'Calçados no geral.');
$c2 = new Categoria('Blusas', 'Blusas no geral.');
$c3 = new Categoria('Banho', 'Acessórios de banho.');

$p1 = new Produto('Tênis de corrida', 250, $c1);
$p2 = new Produto('Calça Jeans', 100, $c3);
$p3 = new Produto('Moletom', 100, $c2);

// echo $p1->teste('café');

var_dump($p1);
var_dump($p2);
var_dump($p3);
```

### [Classe Produto](./Produto.php)

```php
declare(strict_types=1);

class Produto
{
 // ATRIBUTOS
 private string $nome;
 private float $valor;
 private string $desc;
 private readonly Categoria $categoria;

 public function __construct(string $nome, float $valor, Categoria $categoria)
 {
  $this->setNome($nome);
  $this->setValor($valor);
  $this->categoria = $categoria;
 }

 // MÉTODOS
 public function getNome(): string
 {
  return $this->nome;
 }

 public function setNome(string $nome): void
 {
  if (strlen($nome) <= 3)
   die('O nome deve conter no mínimo 4 caracteres.');
  $this->nome = $nome;
 }

 public function getValor(): float
 {
  return $this->valor;
 }

 public function setValor(float $valor): void
 {
  if ($valor < 0)
   die('O valor do produto não pode ser negativo!');
  $this->valor = $valor;
 }

 public function getDesc(): string
 {
  return $this->desc;
 }
 public function setDesc(string $desc): void
 {
  $this->desc = $desc;
 }

 public function teste(string $palavra): string
 {
  return "Você está testando com a palavra {$palavra}!";
 }
}
```

### [Classe Professor](./Professor.php)

```php
declare(strict_types=1);

class Professor
{
 private string $nome;
 private string $sobrenome;
 private string $cpf;
 private float $salario;
 private array $disciplinas;

 public function __construct(string $nome, string $sobrenome, string $cpf, float $salario)
 {
  $this->setNome($nome);
  $this->setSobrenome($sobrenome);
  $this->setCpf($cpf);
  $this->setSalario($salario);
 }

 public function setNome(string $nome): void
 {
  $this->nome = $nome;
 }

 public function setSobrenome(string $sobrenome): void
 {
  $this->sobrenome = $sobrenome;
 }

 public function setCpf(string $cpf): void
 {
  if (!intval($cpf) || strlen($cpf) != 11)
   die('O CPF deve conter apenas números e 11 caracteres!');
  $this->cpf = $cpf;
 }

 public function setSalario(float $salario): void
 {
  if ($salario < 0)
   die('O salário não pode ser negativo!');
  $this->salario = $salario;
 }

 public function getNome(): string
 {
  return $this->nome;
 }

 public function getSobrenome(): string
 {
  return $this->sobrenome;
 }

 public function getCpf(): string
 {
  return $this->cpf;
 }

 public function getSalario(): float
 {
  return $this->salario;
 }
}
```

## AUTOR

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>
<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
