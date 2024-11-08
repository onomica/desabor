<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
declare(strict_types=1);

namespace Tests\Unit\Core\Form\ChoiceProvider;

use Generator;
use PrestaShop\PrestaShop\Core\Form\ChoiceProvider\PackStockTypeChoiceProvider;

class PackStockTypeChoiceProviderTest extends ChoiceProviderTestCase
{
    /**
     * @dataProvider getExpectedChoices
     *
     * @param int $defaultPackStockType
     * @param array $expectedChoices
     */
    public function testItProvidesChoicesAsExpected(int $defaultPackStockType, array $expectedChoices): void
    {
        $choiceProvider = new PackStockTypeChoiceProvider(
            $this->mockTranslator(),
            $defaultPackStockType
        );

        $this->assertEquals($expectedChoices, $choiceProvider->getChoices());
    }

    /**
     * @return Generator
     */
    public function getExpectedChoices(): Generator
    {
        yield [
            0,
            [
                'Use pack quantity' => 0,
                'Use quantity of products in the pack' => 1,
                'Use both, whatever is lower' => 2,
                'Default (Use pack quantity)' => 3,
            ],
        ];
        yield [
            1,
            [
                'Use pack quantity' => 0,
                'Use quantity of products in the pack' => 1,
                'Use both, whatever is lower' => 2,
                'Default (Use quantity of products in the pack)' => 3,
            ],
        ];
        yield [
            2,
            [
                'Use pack quantity' => 0,
                'Use quantity of products in the pack' => 1,
                'Use both, whatever is lower' => 2,
                'Default (Use both, whatever is lower)' => 3,
            ],
        ];
    }
}
