<?php
/**
 * Redstage Base module.
 *
 * @category: PHP
 * @package: Redstage/Base
 * @copyright: Copyright © 2020 Magento, Inc. All rights reserved.
 * @author: Vaibhav Bhalerao <vbhalerao@redstage.com>
 * @keywords: Module Redstage_Base
 */
declare(strict_types=1);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Redstage_Base',
    __DIR__
);
