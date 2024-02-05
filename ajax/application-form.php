<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_REQUEST["user-name"] != "" && $_REQUEST["user-phone"] != ""):

  $name = $_REQUEST['user-name']; // Тело письма
  $phone = $_REQUEST['user-phone'];
  $title = $_REQUEST['name-form-circle'];

//  ApplicationFormSend($name, $phone, $title);
  $arEventFields = array(
    "NAME" => $name,
    "PHONE" => $phone,
    "TITLE" => $title,
  );

  if(CEvent::Send("APPLICATION_FORM", 's1', $arEventFields, "Y", 14)){
    CEvent::CheckEvents();



    echo "success";

  }else{
    ?>
    error
    <?
  }

endif;
?>