<?php
session_start();
if(isset($_GET["ac"])){
	if($_GET["ac"] == 'add_vote'){
		$id = $_GET["id"];
		$vote_type = $_GET["vote_type"];
		$_SESSION["sections"][$id][$vote_type]++;
		//voting
	}
}else{
	//echo("no ac!!");
}
include("header.php");

$sections = array(
	'1'=>array(
		"title"=>"Sec. 2. Definitions.",
		"content"=>"1) \"Commission\" means the District of Columbia Statehood Delegation Fund Commission as defined in section 11(a)(1) of the District of Columbia Statehood Constitutional Convention Initiative of 1979, effective March 10, 1981 (D.C. Law 3-171; D.C. Official Code § 34 1-129.01).
(2) \"District of Columbia Statehood Delegation\" means the 2 United States Senators and the United States Representative holding office pursuant to section 4 of the District of Columbia Statehood Constitutional Convention Initiative of 1979, effective March 10, 1981 (D.C. Law 3-1 171; D.C. Official Code § 1-123).
(3) \"Fund\" means the Statehood Delegation Fund as defined in section 11(a)(3) of the District of Columbia Statehood Constitutional Convention Initiative of 1979, effective March 10, 1981 (D.C. Law 3-171; D.C. Official Code § 1-129.01).
(4) \"Statehood Fund\" means the fund as defined in section 11(a)(4) of the District of Columbia Statehood Constitutional Convention Initiative of 1979, effective March 10, 1981 (D.C. Law 3-171; D.C. Official Code § 1-129.01).
(5) \"United States Representative\" means the District of Columbia public official elected pursuant to section 4 of the District of Columbia Statehood Constitutional Convention Initiative of 1979, effective March 10, 1981 (D.C. Law 3-171; D.C. Official Code § 1-123).
(6) \"United States Senator\" means either of the 2 District of Columbia public officials elected pursuant to section 4 of the District of Columbia Statehood Constitutional Convention Initiative of 1979, effective March 10, 1981 (D.C. Law 3-171; D.C. Official Code § 1-123).",
		"yay" => 2,
		"nay" => 10,
		"comment_count" => 2,
		),
	'2'=>array(
		"title"=>"Sec. 3. Executive and legislative.",
		"content"=>"   (a) $150,000 shall be appropriated by The Council of the District of Columbia for the purposes of retaining the services of a Congressional Affairs firm(s) to lobby Congress on the issue of District of Columbia statehood and other related issues.	",
		"yay" => 12,
		"nay" => 3,
		"comment_count" => 6,
	),
	'3'=>array(
		"title"=>"Sec. 4. Media Advocacy",
		"content"=>"      (a) $400,000 shall be appropriated by The Council of the District of Columbia for the purposes of retaining the services of a media firm(s) to execute a paid media campaign on the issue of District of Columbia statehood and other related issues.",	
		"yay" => 5,
		"nay" => 3,
		"comment_count" => 15,
	),
);

if(!isset($_SESSION["sections"])){
	$_SESSION["sections"] = $sections;
}

foreach($_SESSION["sections"] as $id=>$section){
	$yay = $section["yay"];
	$nay = $section["nay"];
	$title = $section["title"];
	$content = $section["content"];
	$comment_count = $section["comment_count"];
	include("section.php");
}

include("footer.php");

?>
