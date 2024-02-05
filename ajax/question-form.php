<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_REQUEST["name-lastname"] != "" && $_REQUEST["phone"] != "" && $_REQUEST["message"] != ""):

  $name = $_REQUEST['name-lastname']; // Тело письма
  $phone = $_REQUEST['phone'];
  $message = $_REQUEST['message'];

  $arEventFields = array(
    "NAME" => $name,
    "PHONE" => $phone,
    "MESSAGE" => $message,
  );

  if(CEvent::Send("QUESTION_FORM_BID", 's1', $arEventFields, "Y", 13)){
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