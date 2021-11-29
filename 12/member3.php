<?php
declare(strict_types=1);
require_once dirname(__FILE__) . '/Member.php';

(new Member('鈴木次郎', 34, '大阪府'))->showInfo();
