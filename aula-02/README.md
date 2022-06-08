<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# 📂 AULA 02 ⇆ 05

## ÍNDICE

### Tópicos

- Classes
- Atributos
- Tipos de dados

### Layout pastas e arquivos

```sh
 aula-02
 ├──Aluno.php
 ├──Curso.php
 ├──Disciplina.php
 ├──index.php
 ├──intro.php
 ├──Professor.php
 └──README.md
```

## CÓDIGOS

### [Classe Aluno](./Aluno.php)

```php
declare(strict_types = 1);

class Aluno
{
 public string $nome;
 public string $cpf;
}
```

### [Classe Curso](./Curso.php)

```php
declare ( strict_types = 1 );

class Curso
{
 public string $nome;
 public int $cargaHoraria;
 public string $desc;
}
```

### [Classe Disciplina](./Disciplina.php)

```php
declare ( strict_types = 1 );

class Disciplina
{
 public string $nome;
}
```

### [Index](./index.php)

```php
include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';
include 'Disciplina.php';

$p1 = new Professor();
$p1->nome = 'Alessandro';
$p1->sobrenome = 'Feitosa';
$p1->salario = 3220.45;
```

### [Intro](./intro.php)

```php
include 'Aluno.php';
include 'Curso.php';

$aluno = new Aluno();
$aluno->nome = 'João Pedro';
$aluno->cpf = '109.876.543-21';

$curso = new Curso();
$curso->nome = 'Introdução ao PHP';
$curso->cargaHoraria = 88;
$curso->desc = 'Aprender PHP.';

$aluno1 = [
 'aluno' => 'Alessandro',
 'cpf' => '123.456.789-10',
];

$aluno2 = [
 'Aluno' => 'André',
 'Cpf' => '123.456.789-10',
];

$aluno3 = [
 'ALUNO' => 'Ana',
 'CPF' => '123.456.789-10',
];

var_dump( $aluno );
```

### [Classe Professor](./Professor.php)

```php
declare(strict_types = 1);

class Professor
{
 public string $nome;
 public string $sobrenome;
 public string $cpf;
 public float $salario;
 public array $disciplinas;
}
```

## AUTOR

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>
<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
