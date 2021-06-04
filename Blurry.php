<?php

namespace KejawenLab\BlurryDetection;

/**
 * @author Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 */
class Blurry
{
    public function isBlurry(string $path): bool
    {
        if (!$this->commandExist()) {
            throw new \RuntimeException('ImageMagick is not installed');
        }

        if (!$this->hasNoSpacePath($path)) {
            throw new \InvalidArgumentException('Space in path is not supported');
        }

        return 0.1 > $this->calculate($path);
    }

    private function commandExist(): bool
    {
        return !empty(shell_exec('which identify'));
    }

    private function hasNoSpacePath(string $path): bool
    {
        return strpos(trim($path), ' ') === false;
    }

    private function calculate(string $path): float
    {
        $raw = explode(' ', exec(sprintf('identify -verbose %s | grep deviation', $path)));

        return (float) trim(array_pop($raw), '()');
    }
}
