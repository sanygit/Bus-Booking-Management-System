<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function routes_init(&$options, $memberInfo, &$args){

		return TRUE;
	}

	function routes_header($contentType, $memberInfo, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function routes_footer($contentType, $memberInfo, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function routes_before_insert(&$data, $memberInfo, &$args){
		$currentuser=($memberInfo['username']);
		$countrecords=sqlValue("SELECT * FROM membership_userrecords WHERE tableName='routes' AND memberID='$currentuser'");
		if ($countrecords>0) {
			# code...
			$_SESSION['custom_err_msg']="<b>Sorry Record Not Saved,You are only limited to one record in each table.(TRIAL VERSION)</b>";
			return FALSE;

		}
		else{return TRUE;}
	}

	function routes_after_insert($data, $memberInfo, &$args){

		return TRUE;
	}

	function routes_before_update(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function routes_after_update($data, $memberInfo, &$args){

		return TRUE;
	}

	function routes_before_delete($selectedID, &$skipChecks, $memberInfo, &$args){

		return TRUE;
	}

	function routes_after_delete($selectedID, $memberInfo, &$args){

	}

	function routes_dv($selectedID, $memberInfo, &$html, &$args){

	}

	function routes_csv($query, $memberInfo, &$args){

		return $query;
	}
	function routes_batch_actions(&$args){

		return array();
	}
