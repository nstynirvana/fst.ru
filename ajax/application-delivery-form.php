<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_REQUEST["user-name"] != "" && $_REQUEST["user-phone"] != ""):

  $name = $_REQUEST['user-name']; // Тело письма
  $phone = $_REQUEST['user-phone'];

  $arEventFields = array(
    "NAME" => $name,
    "PHONE" => $phone,
  );

  if(CEvent::Send("APPLICATION_DELIVERY_FORM", 's1', $arEventFields, "Y", 17)){
    CEvent::CheckEvents();

    echo "success";

  }else{
    ?>
    error
    <?
  }

endif;
?>