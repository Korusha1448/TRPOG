<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("core/EquationInterface.php");
require_once("core/LogAbstract.php");
require_once("core/LogInterface.php");

require_once("Korusha/KorushaException.php");
require_once("Korusha/Linear.php");
require_once("Korusha/Log.php");
require_once("Korusha/Square.php");

final class LogTest extends TestCase
{
  public function testLog1(): void
  {
    Korusha\Log::Instance()->log(123);
    Korusha\Log::Instance()->log(456);

    ob_start();
    Korusha\Log::Instance()->write();
    $log = ob_get_contents();
    ob_end_clean();

    $this->assertEquals(
      $log,
      "123\n456\n"
    );
  }

  public function testLog2(): void
  {
    Korusha\Log::Instance()->log("Log");
    Korusha\Log::Instance()->log("Test");

    ob_start();
    Korusha\Log::Instance()->write();
    $log = ob_get_contents();
    ob_end_clean();

    $this->assertEquals(
      $log,
      "123\n456\nLog\nTest\n"
    );
  }
}
