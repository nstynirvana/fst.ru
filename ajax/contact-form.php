<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_REQUEST["user-name"] != "" && $_REQUEST["phone-number"] != ""):

  $name = $_REQUEST['user-name']; // Тело письма
  $phone = $_REQUEST['phone-number'];
  $width = $_REQUEST['width'];
  $town = $_REQUEST['town'];

  $arEventFields = array(
    "NAME" => $name,
    "PHONE" => $phone,
    "WIDTH" => $width,
    "TOWN" => $town,
  );

  if(CEvent::Send("FEEDBACK_FORM_BID", 's1', $arEventFields, "Y", 12)){
    CEvent::CheckEvents();
    ?>
    success
    <?
  }else{
    ?>
    error
    <?
  }

endif;
?>