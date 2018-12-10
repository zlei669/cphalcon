<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Html\Tag;

use UnitTester;

/**
 * Class SetDocTypeCest
 *
 * @package Phalcon\Test\Unit\Html\Tag
 */
class SetDocTypeCest
{
    /**
     * Tests Phalcon\Html\Tag :: setDocType()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function htmlTagSetDocType(UnitTester $I)
    {
        $I->wantToTest('Html\Tag - setDocType()');
        $I->skipTest('Need implementation');
    }
}