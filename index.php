<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie {
   public $name;
   public $director;
   public $genre;
   public $year;

	public function __construct($name, $director, $genre, $year)
	{
		$this->name = $name;
		$this->director = $director;
      $this->genre = $genre;
		$this->setYear($year);
	}

	public function setYear($year) {
		if (is_integer($year) && $year >= 0) {
			$this->year = $year;
		}
		return $year;
	}

	public function getYear() {
		return $this->year;
	}
}

$TheTrumanShow = new Movie('The Truman Show', 'Peter Weir', 'Drammatic', 1998);
$KillBill = new Movie('Kill Bill', 'Quentin Tarantino', 'Action', 2003);
$FightClub = new Movie('Fight Club', 'David Fincher', 'Drammatic', 1999);
$MrNobody = new Movie('Mr Nobody', 'Jaco Van Dormael', 'Drammatic', 2009);
$LostInTranslation = new Movie('Lost In Translation', 'Sofia Coppola', 'Drammatic', 2003);

var_dump($TheTrumanShow);
var_dump($FightClub);

?>
</body>
</html>