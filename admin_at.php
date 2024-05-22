<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $USER;
print_r($USER->GetID());
$USER->Authorize(1);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>