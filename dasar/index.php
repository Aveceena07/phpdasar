<!-- hello world -->
<?php echo 'Hello World'; ?>
<br><br>
<!-- php variable -->
<?php
$txt = 'testing';
echo $txt;
?><br><br>
<!-- datatype -->
<?php
$x = 5985;
var_dump($x);
?>  <br><br>
<!-- php loop foreach -->
<?php
$car = ['pajero', 'inova', 'civic', 'vios'];

foreach ($car as $value) {
    echo "$value <br>";
}
?><br><br>
<!-- php switch -->
<?php
$favcolor = 'red';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red!';
        break;
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
    case 'green':
        echo 'Your favorite color is green!';
        break;
    default:
        echo 'Your favorite color is neither red, blue, nor green!';
}
?><br><br>
<!-- php if else -->
<?php
$t = 20;

if ($t < 13) {
    echo 'Lebih dari 13';
} else {
    echo 'Lebih dari 13';
}
?><br><br>
<!-- php function -->
<?php
function writeMsg()
{
    echo 'Hello world!';
}

writeMsg();

// call the function
?><br><br>
<!-- php array -->
<?php
$cars = ['Volvo', 'BMW', 'Toyota'];
echo 'I like ' . $cars[0] . ', ' . $cars[1] . ' and ' . $cars[2] . '.';
?> <br><br>
<!-- php date and time -->
<?php
echo 'Today is ' . date('Y/m/d') . '<br>';
echo 'Today is ' . date('Y.m.d') . '<br>';
echo 'Today is ' . date('Y-m-d') . '<br>';
echo 'Today is ' . date('l');
?><br><br>
<!-- php OOP -->
<?php
class Fruit
{
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo '<br>';
echo $banana->get_name();
?> <br><br>
<!-- php constructor -->
<?php
class komputer
{
    public $prosesor;
    public $memory;
    public $ram;
    public function __construct(
        $prosesor = 'prosesor',
        $memory = 'memory',
        $ram = 'ram'
    ) {
        $this->prosesor = $prosesor;
        $this->memory = $memory;
        $this->ram = $ram;
    }
    public function getData()
    {
        return "$this->prosesor | $this->memory | $this->ram";
    }
}
$komputer1 = new komputer('Core i7', '225 GB', '8 GB');
$komputer2 = new komputer('Core i9', '500GB');
$komputer3 = new komputer('Core i9', '500GB', '10GB');
echo 'Spek Komputer Sekolah : ' . $komputer1->getData();
echo '<br />';
echo '<br />';
echo 'Spek Komputer Rumah : ' . $komputer2->getData();
echo '<br/>';
echo '<br/>';
echo 'Spek Komputer Pribadi : ' . $komputer3->getData();
?><br><br>
<!-- php destructtor -->
<?php
class product
{
    public $ram;

    public function __construct($ram = 'RAM')
    {
        $this->ram = $ram;
    }
    function __destruct()
    {
        echo "RAM komputer {$this->ram}.";
    }
}

$komputer1 = new product('255 GB');
?>
<br>
<br>
<!-- php session -->
<?php
session_start();
echo 'Id user saya adalah ' . $_SESSION['logged_in_user_id'];
echo '<br/>';
echo 'Username saya adalah ' . $_SESSION['logged_in_user_name'];

?>
