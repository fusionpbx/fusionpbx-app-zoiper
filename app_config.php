<?php

	//application details
		$apps[$x]['name'] = "Zoiper";
		$apps[$x]['uuid'] = "0e1a851b-fa97-43d8-a862-1f78698661d7";
		$apps[$x]['category'] = "Switch";;
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Zoiper Desktop and Mobile";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$apps[$x]['permissions'][$y]['name'] = "zoiper";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "fe8a5b30-834f-4eeb-8462-494ad6034588";		
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;

	//default settings
		$y = 0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "be9adae6-cef6-4fb7-80dd-d8da4b009884";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "zoiper";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "page_id";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a14cd664-4cdf-4519-89f0-3dee0b43b49f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "zoiper";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "provider_id";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "583a6b99-503e-4e49-8ce5-c8cfa55405bf";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "zoiper";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "outbound_proxy";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
