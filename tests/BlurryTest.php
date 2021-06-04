<?php

namespace KejawenLab\BlurryDetection\Test;

use KejawenLab\BlurryDetection\Blurry;
use PHPUnit\Framework\TestCase;

/**
 * @author Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 */
class BlurryTest extends TestCase
{
    public function testClearImage()
    {
        $this->assertSame((new Blurry())->isBlurry(sprintf('%s/assets/update.png', __DIR__)), false);
    }

    public function testBlurryImage()
    {
        $this->assertSame((new Blurry())->isBlurry(sprintf('%s/assets/update-blur.png', __DIR__)), true);
        $this->assertSame((new Blurry())->isBlurry(sprintf('%s/assets/update-blur-2.png', __DIR__)), true);
    }
}
