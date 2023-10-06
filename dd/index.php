<?php
require("vendor/autoload.php");
class Michi
{
    protected $patas = [];
    protected $color;

    public function __construct(string $color)
    {
        $this->color = $color;

        for ($i = 0; $i < 4; $i++)
            $this->patas[$i] = new PawsMichi();
    }
}
class PawsMichi
{
    protected $nails = 4;
    protected $description = "tiene manchitas";

    function get_description(): string
    {
        return $this->description;
    }
}

$house_michis = array(
    "name" => "Michilandia",
    "location" => [
        "country" => "Mexico",
        "city" => "Ciudad de Mexico",
        "cologne" => "Doctores",
        "number" => 27
    ],
    "number_of_cats" => 3,
    "cats" => [
        new Michi("blanco"),
        new Michi("negro"),
        new Michi("tricolor")
    ]
);

dd($house_michis);
