<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_REQUEST["applicationUserName"] != "" && $_REQUEST["applicationUserPhone"] != ""):

  $name = $_REQUEST['applicationUserName']; // Тело письма
  $phone = $_REQUEST['applicationUserPhone'];

  $arEventFields = array(
    "NAME" => $name,
    "PHONE" => $phone,
  );

  if(CEvent::Send("APPLICATION_FORM_CLASSIC", 's1', $arEventFields, "Y", 15)){
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