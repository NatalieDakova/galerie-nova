<?
class Galerie 
{
    public $zobrazeni;

    public function __construct($zobrazeni)
    {
        $this->zobrazeni = $zobrazeni;
    }



public function obrazky()
{
    $pole = "";
    $obrazky = glob($this->zobrazeni . "*");

    foreach ($obrazky as $obrazek) {
        $pole .= $obrazek . " ";
    }

    return explode(" ",trim($pole));
}
}

$galerie = new Galerie("galerie/");
($galerie->obrazky());

?>