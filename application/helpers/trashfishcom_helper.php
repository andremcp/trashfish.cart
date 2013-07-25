<?php
/**
 * Convert given array into string with comma as delimiter
 * @param $fields integer indexed array
 * @return mixed, string or false when invalid input
 */
function parse_fields($fields)
{
	$result = false;

	if (is_array($fields))
	{
		$result = implode(',', $fields);
	}
	return $result;
}

function where_string($where)
{
	$str = $where;
	if (is_assoc_array($where)){
		$keys = array_keys($where);
		$str = $keys[0] . ' = ' . $this->db->escape($where[$keys[0]]);
		for ($i=1; $i<count($keys); $i++){
			$str .= "AND {$keys[0]} = " . $this->db->escape($where[$keys[0]]);
		}
	}
	return $str;
}

// check given parameter is array and has value inside
function is_array_filled($arr){
	return is_array($arr) && count($arr) > 0;
}

// check whether given parameter is assosiative array or not.
function is_assoc_array($arr)
{
	$result = true;
	
	if (is_array_filled($arr))
	{
		$keys = array_keys($arr);
		foreach($keys as $v)
		{
			if (is_int($v))
			{
				$result = false;
			}
		}
	}
	else
	{
		$result = false;
	}
	return $result;
}

/* End of file common_helper.php */
/* Location: ./application/helpers/common_helper.php */