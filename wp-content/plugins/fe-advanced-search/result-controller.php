<?php
//////////////////////////////////////////////
//  検索文字列を出力（テンプレート表示用）
//////////////////////////////////////////////
function search_result( $sterm = null , $num = 0 )
{
	$result = array( 0 => null, 1 => null );
	
	if( isset( $_GET['csp'] ) && ( $_GET['csp'] == "search_add" ) )
	{
	 	//  全ての検索条件（カンマ区切り）
	 	if( isset( $_POST['search_result_data']) && ( $_POST['search_result_data'] != null ) )
			$result[0] = esc_html( $_POST['search_result_data'] );
		// キーワード検索時、inputフィールドに戻すため（Ktai Style は$_GET/POSTの値をinputに返せない？ため） 	
		if( isset( $_POST['kwds_result_data_' . $num ] ) && ( $_POST['kwds_result_data_' . $num ] != null ) )
			$result[1] = esc_html( $_POST['kwds_result_data_' . $num] );

		if( $sterm == "keywords" )
			return $result[1];
		else
			print $result[0];
	}
	else 
		return;
}
//////////////////////////////////////////////
//  検索文字列を出力（array） ハイライト表示などに
//////////////////////////////////////////////
function search_result_array( $sterm = null , $num = 0 )
{
	if( isset( $_GET['csp'] ) && ( $_GET['csp'] == "search_add" ) )
	{
	// 全ての検索条件（カンマ区切り）
		switch( $sterm )
		{
			case 'all':
				if( isset( $_POST['search_result_data'] ) && ( $_POST['search_result_data'] != null ) )
				{
					$result = $_POST['search_result_data'];
					$result_array = explode( ',', $result );
				}
				break;
			case 'keys': // 何かに使えるかもしれない・・・
				if( isset( $_POST['keys_result_data_' . $num] ) )
					$result_array = $_POST['keys_result_data_'. $num];
				else
					$result_array = null;
				break;
			// ハイライト表示のキーワードなどに
			default:
				if( isset( $_POST['kwds_result_data_all'] ) && ( $_POST['kwds_result_data_all'] != null ) )
					$result_array = $_POST['kwds_result_data_all'];
				break;
		}
		if( isset( $result_array ) )
			return esc_html( $result_array );
		else
			return false;
	}
	else 
		return false;
}

?>