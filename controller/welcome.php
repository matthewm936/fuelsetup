<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller_Template
{
	public function action_index()
	{
		$data = array();
		$this->template->title = "Home Page";
        $this->template->content = View::forge("welcome/home.php", $data);
		$this->template->css = "style.css";

		if(isset($_GET['colors'])){
            $this->template->title= 'Color Page';
            $this->template->content = View::forge('welcome/colors.php',$data);
        }

		if(isset($_GET['size'])){
            $this->template->title= 'Color Page';
            $this->template->content = View::forge('welcome/colors.php',$data);
        }

		


		if(isset($_GET["page"]) && !isset($_GET['size']) && !isset($_GET['colors']) ) {
            $dir = $_GET["page"];
            if($dir == "about"){
                $this->template->title= 'About Page';
                $this->template->content = View::forge('welcome/about.php',$data);
                
            }
            elseif ($dir == "color") {
                $this->template->title= 'Color Page';
                $this->template->content = View::forge('welcome/colors.php',$data);
			}
			elseif ($dir == "home"  && !isset($_GET['size'])) {
					$this->template->title= 'Home Page';
					$this->template->content = View::forge('welcome/home.php',$data);       
        	}
		}

		if(isset($_GET['colors'])) {
			$colors = $_GET["colors"];
			// Set the default size if the parameter is not set or is not a number
			if ($colors == 0) {
				echo "<p>do not input colors of 0</p>";
			}
			elseif ($colors > 10) {
				echo "<p>do not input colors of greater than 10</p>";
			} else {
				echo "<table>";
				$colorsArray = array('red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 'brown', 'black', 'teal');
				// Generate the table rows and cells
				for ($i = 1; $i <= $colors; $i++) {
					echo "<tr>";
					// Generate the drop-down for the left column cell
					echo "<td>";
					echo "<select name='color" . $i . "'>";
					foreach ($colorsArray as $index => $color) {
						$selected = '';
						if ($index == $i - 1) {
							$selected = 'selected';
						}
						echo "<option value='" . $color . "' " . $selected . ">" . ucfirst($color) . "</option>";
					}
					echo "</select>";
					echo "</td>";
					echo "<td></td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		}
		

		//start of 2 table
		//-----------------------------
		//logic for url get size and colors
		if(isset($_GET['size'])) {
			$size = $_GET["size"];
			// Set the default size if the parameter is not set or is not a number
			if ($size == 0) {
				echo "<p>do not input size of 0</p>";
			}
			if ($size > 26) {
				echo "<p>do not input size of greater than 26</p>";
			} else {
				echo "<table>";
			// Generate the table rows and cells
			for ($i = 1; $i <= $size + 1; $i++) {
				echo "<tr>";
				for ($j = 1; $j <= $size + 1; $j++) {
					if($j == 1 & $i == 1) {
						echo "<td></td>";
					} elseif ($i == 1) {
						echo "<td>" . chr($j+63) . "</td>";
					} 
					elseif ($j == 1) {
						echo "<td>" . ($i-1) . "</td>";
					} 
					else {
						echo "<td></td>";

					}
				}
				echo "</tr>";
			}
			echo "</table>";
			}

			
		}
		//end of 2 table
		//-----------------------------

		return;
	}


	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
