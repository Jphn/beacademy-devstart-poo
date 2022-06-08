<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
	protected function render(string $viewName): void
	{
		include __DIR__ . "/../View/{$viewName}.php";
	}
}