<?
interface Computer{
	public function run();
	public function loadBIOS();
	public function startOS();
	public function logIN();
}


class PC implements Computer{
	private $configuration = null;
	public function __construct($configuration){
		$this->configuration = $configuration;
	}

	public function keyboardExists(){
		return !empty($this->configuration['keyboard']);
	}

	public function mouseExists(){
		return !empty($this->configuration['mouse']);
	}

	public function run(){
		return 'Run Computer';
	}

	public function loadBIOS(){
		return 'Load Computer BIOS';
	}

	public function startOS(){
		if(!$this->keyboardExists()){
			return 'Keyboard error';
		} 
		if(!$this->mouseExists()){
			return 'Mouse error';
		}
		return 'Start Computer OS';
		
	}

	public function logIN(){
		return 'Login on Computer OS';
	}

	
}

class Laptop implements Computer{
	public function run(){
		return 'Run Computer';
	}

	public function loadBIOS(){
		return 'Load <strong>Laptop</strong> BIOS';
	}

	public function startOS(){
		return 'Start Computer OS';
	}

	public function logIN(){
		return 'Login on Computer OS';
	}
}


$laptop = new Laptop();
echo $laptop->run(); ?><br><?
echo $laptop->loadBIOS();?><br><?
echo $laptop->startOS();?><br><?
echo $laptop->logIN();?><hr><?

$configuration = [
	"keyboard" =>"Bogitech",
	"mouse" => 'Miclosoft'
];

$pc = new PC($configuration);
echo $pc->run(); ?><br><?
echo $pc->loadBIOS();?><br><?
echo $pc->startOS();?><br><?
echo $pc->logIN();?><hr><?