<?php
/**
 * HallerTest
 *
 * LICENSE
 *
 * This file can be distributed under terms of LGPL
 *
 * @package    Sonsuzdongu
 * @copyright  Osman Yuksel
 * @LICENSE    http://www.gnu.org/licenses/lgpl-3.0.txt
 * @version    0.1
 */

namespace Sonsuzdongu;

include_once '../Haller.php';

/**
 * HallerTest
 *
 * Test Cases for Haller.php
 * @author    Osman Yuksel <yuxel |AT| sonsuzdongu |DOT| com>
 */
class HallerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider iyelik
     */
    public function testIyelik($name, $result)
    {
        $this->assertEquals(\Sonsuzdongu\Haller::get($name, "iyelik"), $result);
    }

    public function iyelik()
    {
        return array(
            array("Osman", "Osman'ın"),
            array("Alp", "Alp'in"),
            array("Mustafa", "Mustafa'nın"),
            array("Teslime", "Teslime'nin"),
            array("Alphan", "Alphan'ın"),
            array("Burak", "Burak'ın"),
            array("Cem", "Cem'in"),
            array("Aşk", "Aşk'ın"),
            array("Ahu", "Ahu'nun"),
        );
    }

    /**
     * @dataProvider iHali
     */
    public function testIHali($name, $result)
    {
        $this->assertEquals(\Sonsuzdongu\Haller::get($name, "i"), $result);
    }

    public function iHali()
    {
        return array(
            array("Osman", "Osman'ı"),
            array("Alp", "Alp'i"),
            array("Mustafa", "Mustafa'yı"),
            array("Teslime", "Teslime'yi"),
            array("Alphan", "Alphan'ı"),
            array("Burak", "Burak'ı"),
            array("Cem", "Cem'i"),
            array("Aşk", "Aşk'ı"),
            array("Ahu", "Ahu'yu"),
        );
    }

    /**
     * @dataProvider eHali
     */
    public function testEHali($name, $result)
    {
        $this->assertEquals(\Sonsuzdongu\Haller::get($name, "e"), $result);
    }

    public function eHali()
    {
        return array(
            array("Osman", "Osman'a"),
            array("Alp", "Alp'e"),
            array("Mustafa", "Mustafa'ya"),
            array("Teslime", "Teslime'ye"),
            array("Alphan", "Alphan'a"),
            array("Burak", "Burak'a"),
            array("Cem", "Cem'e"),
            array("Aşk", "Aşk'a"),
            array("Ahu", "Ahu'ya"),
        );
    }

    /**
     * @dataProvider deHali
     */
    public function testDeHali($name, $result)
    {
        $this->assertEquals(\Sonsuzdongu\Haller::get($name, "de"), $result);
    }

    public function deHali()
    {
        return array(
            array("Osman", "Osman'da"),
            array("Alp", "Alp'te"),
            array("Mustafa", "Mustafa'da"),
            array("Teslime", "Teslime'de"),
            array("Alphan", "Alphan'da"),
            array("Burak", "Burak'ta"),
            array("Cem", "Cem'de"),
            array("Aşk", "Aşk'ta"),
            array("Ahu", "Ahu'da"),
        );
    }

    /**
     * @dataProvider denHali
     */
    public function testDenHali($name, $result)
    {
        $this->assertEquals(\Sonsuzdongu\Haller::get($name, "den"), $result);
    }

    public function denHali()
    {
        return array(
            array("Osman", "Osman'dan"),
            array("Alp", "Alp'ten"),
            array("Mustafa", "Mustafa'dan"),
            array("Teslime", "Teslime'den"),
            array("Alphan", "Alphan'dan"),
            array("Burak", "Burak'tan"),
            array("Cem", "Cem'den"),
            array("Aşk", "Aşk'tan"),
            array("Ahu", "Ahu'dan"),
        );
    }
}
