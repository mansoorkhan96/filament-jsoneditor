<?php

namespace InvadersXX\FilamentJsoneditor\Interfaces;

interface JSONEditorOptions
{
    public function modes(array | Closure | null $modes): static;

    public function height(int | Closure | null $height): static;

    public function getHeight(): ?int;

    public function getModes(): ?string;
}
