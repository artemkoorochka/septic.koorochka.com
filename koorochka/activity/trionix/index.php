<?
/**
 * @var CMain $APPLICATION
 * @var CUser $USER
 */

require_once($_SERVER["DOCUMENT_ROOT"]."/matrix/header.php");
$arResult = array();

$reader = new XMLReader();
$reader->open('http://koorochka.com/activity/trionix/unloading.xml');

/**
 * чтение документа
 */
while ($reader->read()) {


    if ($reader->nodeType == XMLReader::ELEMENT) {

        switch ($reader->localName){
            case "Регион":
                d("...." . $reader->name);
                d(array(
                    $reader->getAttribute('Наименование'),
                    $reader->getAttribute('Сокращение'),
                    $reader->getAttribute('ID_ФИАС')
                ));
                break;
            case "Район":
                d("...." . $reader->name);
                d(array(
                    $reader->getAttribute('Наименование'),
                    $reader->getAttribute('Сокращение'),
                    $reader->getAttribute('ID_ФИАС')
                ));
                break;
            case "Город":
                d("...." . $reader->name);
                d(array(
                    $reader->getAttribute('Наименование'),
                    $reader->getAttribute('Сокращение'),
                    $reader->getAttribute('ID_ФИАС')
                ));
                break;
            case "Улица":
                d("...." . $reader->name);
                d(array(
                    $reader->getAttribute('Наименование'),
                    $reader->getAttribute('Сокращение'),
                    $reader->getAttribute('ID_ФИАС')
                ));
                break;
            case "Абонент":
                d("....." . $reader->name);
                d(array(
                    $reader->getAttribute("Дом"),
                    $reader->getAttribute("Корпус"),
                    $reader->getAttribute("Строение"),
                    $reader->getAttribute("Квартира"),
                    $reader->getAttribute("Комната"),
                    $reader->getAttribute("ГУИД"),
                    $reader->getAttribute("АдресСтрокой"),
                    $reader->getAttribute("ЛицевойСчет"),
                    $reader->getAttribute("СуммаДолга"),
                    $reader->getAttribute("ДатаФормированияДолга"),
                    $reader->getAttribute("ДатаЗапланированногоТО")
                ));

                break;
        }

    }
}
?>

<?require_once($_SERVER["DOCUMENT_ROOT"]."/matrix/footer.php");?>