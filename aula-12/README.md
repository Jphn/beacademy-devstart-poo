<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# 📂 AULA 12 ⇆ 17

## ÍNDICE

### Tópicos

- Herança
- Classe filha
- Sobrescrita do método construtor
- Classe abstrata

### Layout de pastas e arquivos

```sh
aula-12
 ├──Cliente.php
 ├──Gestor.php
 ├──GestorGeral.php
 ├──index.php
 ├──README.md
 └──Usuario.php
```

## CÓDIGOS

### [Classe Cliente](./Cliente.php)

```php
final class Cliente extends Usuario
{
 private string $dataCadastro;

 public function getDataCadastro(): string
 {
  return $this->dataCadastro;
 }

 public function setDataCadastro(string $dataCadastro): void
 {
  $this->dataCadastro = $dataCadastro;
 }
}
```

### [Classe Gestor](./Gestor.php)

```php
declare(strict_types=1);

class Gestor extends Usuario
{
 private float $salario;
 private string $horario;

 public function __construct(string $nome, string $email, string $senha, string $cpf, float $salario, string $horario)
 {
  parent::__construct($nome, $email, $senha, $cpf);
  $this->setSalario($salario);
  $this->setHorario($horario);
 }

 public function getSalario(): float
 {
  return $this->salario;
 }

 public function setSalario(float $salario): void
 {
  $this->salario = $salario;
 }

 public function getHorario(): string
 {
  return $this->horario;
 }

 public function setHorario(string $horario): void
 {
  $this->horario = $horario;
 }
}
```

### [Classe Gestor Geral](./GestorGeral.php)

```php
class GestorGeral extends Gestor
{
 private float $bonusAnual;

 public function __construct(string $nome, string $email, string $senha, string $cpf, float $salario, string $horario, float $bonusAnual)
 {
  parent::__construct($nome, $email, $senha, $cpf, $salario, $horario);
  $this->setBonusAnual($bonusAnual);
 }

 public function getBonusAnual(): float
 {
  return $this->bonusAnual;
 }

 public function setBonusAnual(float $bonusAnual): void
 {
  $this->bonusAnual = $bonusAnual;
 }
}
```

### [Index](./index.php)

```php
include 'Usuario.php';
include 'Gestor.php';
include 'Cliente.php';
include 'Validar.php';

$cpf = '12345678910';

Validar::validarCpf($cpf);

$g1 = new Gestor('Geraldo', 'geraldo@mail.com', 'senha', $cpf, 4000, '12:00');

// $c1 = new Cliente();
// $c1->setNome('Chico');

var_dump($g1);
// var_dump($c1);
```

### [Classe Usuário](./Usuario.php)

```php
abstract class Usuario
{
 private
 string $nome, $email, $senha, $cpf;

 public function __construct(
  string $nome,
  string $email,
  string $senha,
  string $cpf,
 ) {
  $this->setNome($nome);
  $this->setEmail($email);
  $this->setSenha($senha);
  $this->setCpf($cpf);
 }

 public function getNome(): string
 {
  return $this->nome;
 }

 public function setNome(string $nome): void
 {
  $this->nome = $nome;
 }

 public function getEmail(): string
 {
  return $this->email;
 }

 public function setEmail(string $email): void
 {
  $this->email = $email;
 }

 public function getSenha(): string
 {
  return $this->senha;
 }

 public function setSenha(string $senha): void
 {
  $this->senha = $senha;
 }

 public function getCpf(): string
 {
  return $this->cpf;
 }

 public function setCpf(string $cpf): void
 {
  $this->cpf = $cpf;
 }
}
```

## AUTOR

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>
<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
