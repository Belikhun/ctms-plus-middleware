<?php
    //? |-----------------------------------------------------------------------------------------------|
    //? |  /api/ping.php                                                                                |
    //? |                                                                                               |
    //? |  Copyright (c) 2021 Belikhun. All right reserved                                              |
    //? |  Licensed under the MIT License. See LICENSE in the project root for license information.     |
    //? |-----------------------------------------------------------------------------------------------|

	define("PAGE_TYPE", "API");
	require_once $_SERVER["DOCUMENT_ROOT"] ."/libs/belibrary.php";

    header("Access-Control-Allow-Origin: ". (isset($headers["Origin"]) ? $headers["Origin"] : "*"));
	header("Access-Control-Allow-Credentials: true");
	stop(0, "Pong!", 200);