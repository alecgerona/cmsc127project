<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function useingredients(){
		$orderlist = json_decode($this->input->post('orderlist'));
		$orderqtylist = json_decode($this->input->post('orderqtylist'));
		$orderpricelist = json_decode($this->input->post('orderpricelist'));



		$counter = 0;
		
		foreach($orderlist as $value){
			if ($value == 'Beefy Burger'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Beef Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Coleslaw'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Tomato Pack'";
				$query = $this->db->query($sql);


				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);

			} else if ($value == 'Double Beefy Burger'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Beef Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Coleslaw'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Tomato Pack'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			} else if ($value == 'Triply Beefy Burger'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*3 where itemname='Beef Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Coleslaw'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*3 where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*3 where itemname='Tomato Pack'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			} else if ($value == 'Cheesy Beefy Burger'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Beef Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Coleslaw'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Tomato Pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Cheese'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			} else if ($value == 'Cheesy Doubly Burger'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Beef Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Coleslaw'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Tomato Pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Cheese'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			} else if ($value == 'Burger++'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Beef Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Coleslaw'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Tomato Pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Cheese'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Pineapple Pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Bacon'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			} else if ($value == 'Burger--'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Small Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Beef Patty'";
				$query = $this->db->query($sql);
			} else if ($value == 'Chiky Burger'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Chicken Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Coleslaw'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Pineapple Pack'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			} else if ($value == 'Veg-eta Burger'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Mushroom Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Tomato Pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Cheese'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Mushroom Pack'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			} else if ($value == 'Hotspot Burger'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Big Bun'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Beef Patty'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Jalapeno Pepper Pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Lettuce'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Tomato Pack'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);

			} else if ($value == 'Fries'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*1 where itemname='Fries Pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*1 where itemname='Cheese Sauce Pack'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			} else if ($value == 'Nachos'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*1 where itemname='Nachos Pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*1 where itemname='Chili con carne pack'";
				$query = $this->db->query($sql);

				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter]*2 where itemname='Cheese Sauce Pack'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);

			} else if($value == 'Drinks'){
				$sql = "UPDATE inventory SET itemcount=itemcount-$orderqtylist[$counter] where itemname='Drinks'";
				$query = $this->db->query($sql);

				$sql = "INSERT into orderhistory(pname, quantity, price, date, time) values('$value', $orderqtylist[$counter], $orderpricelist[$counter], CURRENT_DATE, CURRENT_TIMESTAMP)";
				$query = $this->db->query($sql);
			}
			$counter++;
		}
		

		

	}

	public function pushinventory(){
		$invname = $this->input->post('invname');
		$invqty = $this->input->post('invqty');
		$invclass = $this->input->post('invclass');

		$sql = "INSERT into inventory(itemname, itemcount, classification) values('$invname', $invqty, $invclass);";
		$query = $this->db->query($sql);



	}
	
	public function popinventory(){
		
		$query = $this->db->select('itemcount, itemname')->from('inventory')->get();
   		return $query->result_array(); 	
	}

	public function poporderhistory(){
		$query = $this->db->select('date, time, pname, quantity, price')->from('orderhistory')->get();
   		return $query->result_array(); 	
	}

	public function poporderlist(){
		$query = $this->db->select('*')->from('OrderList')->get();
		return $query->result_array();
	}

	public function pushburger(){
		$this->db->query('insert into "OrderList" select "ProductName", 1, "Price", "id" from "Inventory" where id=1');


		$this -> db -> select('*');
	    $this -> db -> from('OrderList');
	    $query = $this -> db -> get();
	    return $query->result();
	}
}



